!function(t){function o(o){for(var l,i,s=o[0],c=o[1],a=o[2],u=0,d=[];u<s.length;u++)i=s[u],Object.prototype.hasOwnProperty.call(r,i)&&r[i]&&d.push(r[i][0]),r[i]=0;for(l in c)Object.prototype.hasOwnProperty.call(c,l)&&(t[l]=c[l]);for(f&&f(o);d.length;)d.shift()();return n.push.apply(n,a||[]),e()}function e(){for(var t,o=0;o<n.length;o++){for(var e=n[o],l=!0,s=1;s<e.length;s++){var c=e[s];0!==r[c]&&(l=!1)}l&&(n.splice(o--,1),t=i(i.s=e[0]))}return t}var l={},r={0:0},n=[];function i(o){if(l[o])return l[o].exports;var e=l[o]={i:o,l:!1,exports:{}};return t[o].call(e.exports,e,e.exports,i),e.l=!0,e.exports}i.m=t,i.c=l,i.d=function(t,o,e){i.o(t,o)||Object.defineProperty(t,o,{enumerable:!0,get:e})},i.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(t,o){if(1&o&&(t=i(t)),8&o)return t;if(4&o&&"object"==typeof t&&t&&t.__esModule)return t;var e=Object.create(null);if(i.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:t}),2&o&&"string"!=typeof t)for(var l in t)i.d(e,l,function(o){return t[o]}.bind(null,l));return e},i.n=function(t){var o=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(o,"a",o),o},i.o=function(t,o){return Object.prototype.hasOwnProperty.call(t,o)},i.p="/wp-content/themes/przedszkole/bundled-assets/";var s=window.webpackJsonp=window.webpackJsonp||[],c=s.push.bind(s);s.push=o,s=s.slice();for(var a=0;a<s.length;a++)o(s[a]);var f=c;n.push([1,1]),e()}([,function(t,o,e){"use strict";e.r(o);e(2),e(3),e(4),e(5),e(8)},,function(t,o,e){},function(t,o){const e=document.querySelector(".nav-bg");let l;window.innerWidth>1600?l=900:window.innerWidth>1400?l=700:window.innerWidth>1200?l=570:window.innerWidth>800?l=420:window.innerWidth>650&&(l=350);e&&window.addEventListener("scroll",(function(){scrollpos=window.scrollY,scrollpos>=l?(e.style.opacity=1,e.style.transition="opacity 1.2s"):(e.style.opacity=0,e.style.transition="opacity 0.1s")}));const r=document.querySelector(".hamburger"),n=document.querySelector(".navigation"),i=document.querySelector(".main-nav");let s=window.scrollY;r.addEventListener("click",()=>{r.classList.toggle("hamburger--active"),r.setAttribute("aria-expanded",r.classList.contains("hamburger--active")),n.classList.toggle("navigation--active"),s<10&&i.classList.add("main-nav-bg")})},function(t,o,e){"use strict";(function(t){e(7);"scrollBehavior"in document.documentElement.style||(!function(){function o(){var t=window,o=document;if(!("scrollBehavior"in o.documentElement.style)||!0===t.__forceSmoothScrollPolyfill__){var e,l=t.HTMLElement||t.Element,r=468,n={scroll:t.scroll||t.scrollTo,scrollBy:t.scrollBy,elementScroll:l.prototype.scroll||c,scrollIntoView:l.prototype.scrollIntoView},i=t.performance&&t.performance.now?t.performance.now.bind(t.performance):Date.now,s=(e=t.navigator.userAgent,new RegExp(["MSIE ","Trident/","Edge/"].join("|")).test(e)?1:0);t.scroll=t.scrollTo=function(){void 0!==arguments[0]&&(!0!==a(arguments[0])?h.call(t,o.body,void 0!==arguments[0].left?~~arguments[0].left:t.scrollX||t.pageXOffset,void 0!==arguments[0].top?~~arguments[0].top:t.scrollY||t.pageYOffset):n.scroll.call(t,void 0!==arguments[0].left?arguments[0].left:"object"!=typeof arguments[0]?arguments[0]:t.scrollX||t.pageXOffset,void 0!==arguments[0].top?arguments[0].top:void 0!==arguments[1]?arguments[1]:t.scrollY||t.pageYOffset))},t.scrollBy=function(){void 0!==arguments[0]&&(a(arguments[0])?n.scrollBy.call(t,void 0!==arguments[0].left?arguments[0].left:"object"!=typeof arguments[0]?arguments[0]:0,void 0!==arguments[0].top?arguments[0].top:void 0!==arguments[1]?arguments[1]:0):h.call(t,o.body,~~arguments[0].left+(t.scrollX||t.pageXOffset),~~arguments[0].top+(t.scrollY||t.pageYOffset)))},l.prototype.scroll=l.prototype.scrollTo=function(){if(void 0!==arguments[0])if(!0!==a(arguments[0])){var t=arguments[0].left,o=arguments[0].top;h.call(this,this,void 0===t?this.scrollLeft:~~t,void 0===o?this.scrollTop:~~o)}else{if("number"==typeof arguments[0]&&void 0===arguments[1])throw new SyntaxError("Value could not be converted");n.elementScroll.call(this,void 0!==arguments[0].left?~~arguments[0].left:"object"!=typeof arguments[0]?~~arguments[0]:this.scrollLeft,void 0!==arguments[0].top?~~arguments[0].top:void 0!==arguments[1]?~~arguments[1]:this.scrollTop)}},l.prototype.scrollBy=function(){void 0!==arguments[0]&&(!0!==a(arguments[0])?this.scroll({left:~~arguments[0].left+this.scrollLeft,top:~~arguments[0].top+this.scrollTop,behavior:arguments[0].behavior}):n.elementScroll.call(this,void 0!==arguments[0].left?~~arguments[0].left+this.scrollLeft:~~arguments[0]+this.scrollLeft,void 0!==arguments[0].top?~~arguments[0].top+this.scrollTop:~~arguments[1]+this.scrollTop))},l.prototype.scrollIntoView=function(){if(!0!==a(arguments[0])){var e=function(t){for(;t!==o.body&&!1===d(t);)t=t.parentNode||t.host;return t}(this),l=e.getBoundingClientRect(),r=this.getBoundingClientRect();e!==o.body?(h.call(this,e,e.scrollLeft+r.left-l.left,e.scrollTop+r.top-l.top),"fixed"!==t.getComputedStyle(e).position&&t.scrollBy({left:l.left,top:l.top,behavior:"smooth"})):t.scrollBy({left:r.left,top:r.top,behavior:"smooth"})}else n.scrollIntoView.call(this,void 0===arguments[0]||arguments[0])}}function c(t,o){this.scrollLeft=t,this.scrollTop=o}function a(t){if(null===t||"object"!=typeof t||void 0===t.behavior||"auto"===t.behavior||"instant"===t.behavior)return!0;if("object"==typeof t&&"smooth"===t.behavior)return!1;throw new TypeError("behavior member of ScrollOptions "+t.behavior+" is not a valid value for enumeration ScrollBehavior.")}function f(t,o){return"Y"===o?t.clientHeight+s<t.scrollHeight:"X"===o?t.clientWidth+s<t.scrollWidth:void 0}function u(o,e){var l=t.getComputedStyle(o,null)["overflow"+e];return"auto"===l||"scroll"===l}function d(t){var o=f(t,"Y")&&u(t,"Y"),e=f(t,"X")&&u(t,"X");return o||e}function p(o){var e,l,n,s,c=(i()-o.startTime)/r;s=c=c>1?1:c,e=.5*(1-Math.cos(Math.PI*s)),l=o.startX+(o.x-o.startX)*e,n=o.startY+(o.y-o.startY)*e,o.method.call(o.scrollable,l,n),l===o.x&&n===o.y||t.requestAnimationFrame(p.bind(t,o))}function h(e,l,r){var s,a,f,u,d=i();e===o.body?(s=t,a=t.scrollX||t.pageXOffset,f=t.scrollY||t.pageYOffset,u=n.scroll):(s=e,a=e.scrollLeft,f=e.scrollTop,u=c),p({scrollable:s,method:u,startTime:d,startX:a,startY:f,x:l,y:r})}}"object"==typeof exports&&void 0!==t?t.exports={polyfill:o}:o()}(),document.querySelector(".navigation").addEventListener("click",t=>{const o=t.target.closest(".navigation-item");if(!o)return;t.preventDefault();const e=o.getAttribute("href");document.querySelector(e).scrollIntoView({behavior:"smooth"}),location.href=e}))}).call(this,e(6)(t))},,,function(t,o){const e=function(t){t.classList.contains("is-visible")?function(t){t.style.height=t.scrollHeight+"px",window.setTimeout((function(){t.style.height="0"}),1),window.setTimeout((function(){t.classList.remove("is-visible")}),350)}(t):function(t){const o=function(){t.style.display="block";const o=t.scrollHeight+"px";return t.style.display="",o}();t.classList.add("is-visible"),t.style.height=o,window.setTimeout((function(){t.style.height=""}),350)}(t)};document.addEventListener("click",(function(t){if(!t.target.classList.contains("toggle"))return;t.preventDefault();const o=document.querySelector(t.target.hash);o&&e(o)}),!1);const l=document.querySelector(".toggle-one"),r=document.querySelector(".toggle-two");l&&(l.addEventListener("click",(function(){l.classList.toggle("toggle-border")})),r.addEventListener("click",(function(){r.classList.toggle("toggle-border")})))}]);