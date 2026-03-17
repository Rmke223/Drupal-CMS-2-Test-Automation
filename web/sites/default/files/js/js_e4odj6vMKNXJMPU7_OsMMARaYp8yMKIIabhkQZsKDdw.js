/* @license GPL-2.0-or-later https://www.drupal.org/licensing/faq */
(function(){const STORAGE_KEY='CanvasPreviousURL';const currentUrl=window.location.href;const inIframe=window.self!==window.top||currentUrl==='about:srcdoc';if(inIframe)return;sessionStorage.setItem(STORAGE_KEY,currentUrl);})();;
