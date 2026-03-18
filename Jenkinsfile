pipeline {
  agent { label 'drupal-e2e' }

  options {
    timestamps()
    ansiColor('xterm')
    disableConcurrentBuilds()
    timeout(time: 45, unit: 'MINUTES')
    buildDiscarder(logRotator(numToKeepStr: '20', artifactNumToKeepStr: '20'))
  }

  parameters {
    string(name: 'PW_SITE', defaultValue: 'default', description: 'Site id from testing/playwright/core/config/site-registry.ts')
    booleanParam(name: 'RUN_VISUAL', defaultValue: false, description: 'Run visual snapshots (requires committed baselines).')
    booleanParam(name: 'RUN_SEED', defaultValue: true, description: 'Run deterministic seed step before tests.')
  }

  environment {
    CI = 'true'
    PW_SKIP_WEB_SERVER = '1'
    PW_SKIP_READY_CHECK = '1'
    PW_SITE = "${params.PW_SITE}"
    PW_RUN_SEED = "${params.RUN_SEED}"
  }

  stages {
    stage('Checkout') {
      steps {
        checkout scm
      }
    }

    stage('Validate Toolchain') {
      steps {
        sh '''#!/usr/bin/env bash
          set -euo pipefail
          command -v node >/dev/null
          command -v npm >/dev/null
          command -v docker >/dev/null
          command -v ddev >/dev/null
          docker version >/dev/null
          ddev version
          node -v
          npm -v
        '''
      }
    }

    stage('Install Node Dependencies') {
      steps {
        sh 'npm install'
      }
    }

    stage('Install Playwright Browser') {
      steps {
        sh 'npx playwright install --with-deps chromium'
      }
    }

    stage('Start Drupal Services') {
      steps {
        sh 'ddev start -y'
      }
    }

    stage('Install PHP Dependencies') {
      steps {
        sh 'ddev composer install --no-interaction --prefer-dist'
      }
    }

    stage('Ensure Drupal Is Installed') {
      steps {
        withCredentials([usernamePassword(credentialsId: 'drupal-admin-creds', usernameVariable: 'PW_ADMIN_USER', passwordVariable: 'PW_ADMIN_PASS')]) {
          sh '''#!/usr/bin/env bash
            set -euo pipefail
            if ddev drush status --field=bootstrap | grep -qi successful; then
              echo "Drupal is already installed."
            else
              echo "Drupal is not installed. Running site install."
              ddev drush site:install standard -y \
                --account-name="${PW_ADMIN_USER:-admin}" \
                --account-pass="${PW_ADMIN_PASS:-admin}" \
                --site-name="Jenkins Drupal"
            fi
            ddev drush status
          '''
        }
      }
    }

    stage('Resolve Base URL') {
      steps {
        script {
          env.PW_BASE_URL = sh(
            script: "ddev describe -j | node -e \"const fs=require('node:fs');let d='';process.stdin.on('data',c=>d+=c);process.stdin.on('end',()=>{const o=JSON.parse(d);const u=o.raw?.httpurl||o.raw?.primary_url||o.raw?.urls?.[0];if(!u){process.exit(1)};process.stdout.write(u);});\"",
            returnStdout: true
          ).trim()
          echo "PW_BASE_URL=${env.PW_BASE_URL}"
        }
      }
    }

    stage('Preflight Test Discovery') {
      steps {
        sh 'npm run test:pw:list'
      }
    }

    stage('Run Playwright Tests') {
      steps {
        withCredentials([usernamePassword(credentialsId: 'drupal-admin-creds', usernameVariable: 'PW_ADMIN_USER', passwordVariable: 'PW_ADMIN_PASS')]) {
          script {
            if (params.RUN_VISUAL) {
              sh 'npm run test:pw:jenkins'
            } else {
              sh 'npm run test:pw:jenkins -- --grep-invert @visual'
            }
          }
        }
      }
    }
  }

  post {
    always {
      sh '''#!/usr/bin/env bash
        set +e
        echo "===== DDEV STATUS ====="
        ddev status || true
        echo "===== DRUSH STATUS ====="
        ddev drush status || true
      '''

      archiveArtifacts artifacts: 'testing/playwright/artifacts/**/*', allowEmptyArchive: true, fingerprint: true

      script {
        if (fileExists('testing/playwright/artifacts/default/html-report/index.html')) {
          echo 'Playwright HTML report archived under testing/playwright/artifacts/...'
        }
      }
    }
  }
}
