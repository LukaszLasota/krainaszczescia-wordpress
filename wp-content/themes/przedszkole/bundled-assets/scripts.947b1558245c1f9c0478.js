!function(t){function e(e){for(var l,i,s=e[0],c=e[1],a=e[2],u=0,d=[];u<s.length;u++)i=s[u],Object.prototype.hasOwnProperty.call(n,i)&&n[i]&&d.push(n[i][0]),n[i]=0;for(l in c)Object.prototype.hasOwnProperty.call(c,l)&&(t[l]=c[l]);for(f&&f(e);d.length;)d.shift()();return r.push.apply(r,a||[]),o()}function o(){for(var t,e=0;e<r.length;e++){for(var o=r[e],l=!0,s=1;s<o.length;s++){var c=o[s];0!==n[c]&&(l=!1)}l&&(r.splice(e--,1),t=i(i.s=o[0]))}return t}var l={},n={0:0},r=[];function i(e){if(l[e])return l[e].exports;var o=l[e]={i:e,l:!1,exports:{}};return t[e].call(o.exports,o,o.exports,i),o.l=!0,o.exports}i.m=t,i.c=l,i.d=function(t,e,o){i.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:o})},i.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var o=Object.create(null);if(i.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var l in t)i.d(o,l,function(e){return t[e]}.bind(null,l));return o},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="/wp-content/themes/przedszkole/bundled-assets/";var s=window.webpackJsonp=window.webpackJsonp||[],c=s.push.bind(s);s.push=e,s=s.slice();for(var a=0;a<s.length;a++)e(s[a]);var f=c;r.push([1,1]),o()}([,function(t,e,o){"use strict";o.r(e);o(2),o(3),o(4),o(5),o(8),o(9)},,function(t,e,o){},function(t,e){const o=document.querySelector(".nav-bg");let l;window.innerWidth>1600?l=900:window.innerWidth>1400?l=700:window.innerWidth>1200?l=570:window.innerWidth>800?l=420:window.innerWidth>650&&(l=350);o&&window.addEventListener("scroll",(function(){scrollpos=window.scrollY,scrollpos>=l?(o.style.opacity=1,o.style.transition="opacity 1.2s"):(o.style.opacity=0,o.style.transition="opacity 0.1s")}));const n=document.querySelector(".hamburger"),r=document.querySelector(".navigation"),i=document.querySelector(".main-nav");let s=window.scrollY;n.addEventListener("click",()=>{n.classList.toggle("hamburger--active"),n.setAttribute("aria-expanded",n.classList.contains("hamburger--active")),r.classList.toggle("navigation--active"),s<10&&i.classList.add("main-nav-bg")})},function(t,e,o){"use strict";(function(t){o(7);"scrollBehavior"in document.documentElement.style||(!function(){function e(){var t=window,e=document;if(!("scrollBehavior"in e.documentElement.style)||!0===t.__forceSmoothScrollPolyfill__){var o,l=t.HTMLElement||t.Element,n=468,r={scroll:t.scroll||t.scrollTo,scrollBy:t.scrollBy,elementScroll:l.prototype.scroll||c,scrollIntoView:l.prototype.scrollIntoView},i=t.performance&&t.performance.now?t.performance.now.bind(t.performance):Date.now,s=(o=t.navigator.userAgent,new RegExp(["MSIE ","Trident/","Edge/"].join("|")).test(o)?1:0);t.scroll=t.scrollTo=function(){void 0!==arguments[0]&&(!0!==a(arguments[0])?v.call(t,e.body,void 0!==arguments[0].left?~~arguments[0].left:t.scrollX||t.pageXOffset,void 0!==arguments[0].top?~~arguments[0].top:t.scrollY||t.pageYOffset):r.scroll.call(t,void 0!==arguments[0].left?arguments[0].left:"object"!=typeof arguments[0]?arguments[0]:t.scrollX||t.pageXOffset,void 0!==arguments[0].top?arguments[0].top:void 0!==arguments[1]?arguments[1]:t.scrollY||t.pageYOffset))},t.scrollBy=function(){void 0!==arguments[0]&&(a(arguments[0])?r.scrollBy.call(t,void 0!==arguments[0].left?arguments[0].left:"object"!=typeof arguments[0]?arguments[0]:0,void 0!==arguments[0].top?arguments[0].top:void 0!==arguments[1]?arguments[1]:0):v.call(t,e.body,~~arguments[0].left+(t.scrollX||t.pageXOffset),~~arguments[0].top+(t.scrollY||t.pageYOffset)))},l.prototype.scroll=l.prototype.scrollTo=function(){if(void 0!==arguments[0])if(!0!==a(arguments[0])){var t=arguments[0].left,e=arguments[0].top;v.call(this,this,void 0===t?this.scrollLeft:~~t,void 0===e?this.scrollTop:~~e)}else{if("number"==typeof arguments[0]&&void 0===arguments[1])throw new SyntaxError("Value could not be converted");r.elementScroll.call(this,void 0!==arguments[0].left?~~arguments[0].left:"object"!=typeof arguments[0]?~~arguments[0]:this.scrollLeft,void 0!==arguments[0].top?~~arguments[0].top:void 0!==arguments[1]?~~arguments[1]:this.scrollTop)}},l.prototype.scrollBy=function(){void 0!==arguments[0]&&(!0!==a(arguments[0])?this.scroll({left:~~arguments[0].left+this.scrollLeft,top:~~arguments[0].top+this.scrollTop,behavior:arguments[0].behavior}):r.elementScroll.call(this,void 0!==arguments[0].left?~~arguments[0].left+this.scrollLeft:~~arguments[0]+this.scrollLeft,void 0!==arguments[0].top?~~arguments[0].top+this.scrollTop:~~arguments[1]+this.scrollTop))},l.prototype.scrollIntoView=function(){if(!0!==a(arguments[0])){var o=function(t){for(;t!==e.body&&!1===d(t);)t=t.parentNode||t.host;return t}(this),l=o.getBoundingClientRect(),n=this.getBoundingClientRect();o!==e.body?(v.call(this,o,o.scrollLeft+n.left-l.left,o.scrollTop+n.top-l.top),"fixed"!==t.getComputedStyle(o).position&&t.scrollBy({left:l.left,top:l.top,behavior:"smooth"})):t.scrollBy({left:n.left,top:n.top,behavior:"smooth"})}else r.scrollIntoView.call(this,void 0===arguments[0]||arguments[0])}}function c(t,e){this.scrollLeft=t,this.scrollTop=e}function a(t){if(null===t||"object"!=typeof t||void 0===t.behavior||"auto"===t.behavior||"instant"===t.behavior)return!0;if("object"==typeof t&&"smooth"===t.behavior)return!1;throw new TypeError("behavior member of ScrollOptions "+t.behavior+" is not a valid value for enumeration ScrollBehavior.")}function f(t,e){return"Y"===e?t.clientHeight+s<t.scrollHeight:"X"===e?t.clientWidth+s<t.scrollWidth:void 0}function u(e,o){var l=t.getComputedStyle(e,null)["overflow"+o];return"auto"===l||"scroll"===l}function d(t){var e=f(t,"Y")&&u(t,"Y"),o=f(t,"X")&&u(t,"X");return e||o}function p(e){var o,l,r,s,c=(i()-e.startTime)/n;s=c=c>1?1:c,o=.5*(1-Math.cos(Math.PI*s)),l=e.startX+(e.x-e.startX)*o,r=e.startY+(e.y-e.startY)*o,e.method.call(e.scrollable,l,r),l===e.x&&r===e.y||t.requestAnimationFrame(p.bind(t,e))}function v(o,l,n){var s,a,f,u,d=i();o===e.body?(s=t,a=t.scrollX||t.pageXOffset,f=t.scrollY||t.pageYOffset,u=r.scroll):(s=o,a=o.scrollLeft,f=o.scrollTop,u=c),p({scrollable:s,method:u,startTime:d,startX:a,startY:f,x:l,y:n})}}"object"==typeof exports&&void 0!==t?t.exports={polyfill:e}:e()}(),document.querySelector(".navigation").addEventListener("click",t=>{const e=t.target.closest(".navigation-item");if(!e)return;t.preventDefault();const o=e.getAttribute("href");document.querySelector(o).scrollIntoView({behavior:"smooth"}),location.href=o}))}).call(this,o(6)(t))},,,function(t,e){const o=function(t){t.classList.contains("is-visible")?function(t){t.style.height=t.scrollHeight+"px",window.setTimeout((function(){t.style.height="0"}),1),window.setTimeout((function(){t.classList.remove("is-visible")}),350)}(t):function(t){const e=function(){t.style.display="block";const e=t.scrollHeight+"px";return t.style.display="",e}();t.classList.add("is-visible"),t.style.height=e,window.setTimeout((function(){t.style.height=""}),350)}(t)};document.addEventListener("click",(function(t){if(!t.target.classList.contains("toggle"))return;t.preventDefault();const e=document.querySelector(t.target.hash);e&&o(e)}),!1);const l=document.querySelectorAll(".toggle");for(let t=0;t<l.length;t++)l[t].addEventListener("click",(function(){l[t].classList.toggle("toggle-border")}))},function(t,e){let o=document.querySelectorAll(".payment-two-div"),l=document.querySelectorAll(".payment-progressbar span");for(let t=0;t<o.length;t++)o[t].addEventListener("mouseenter",(function(){l[t].style.backgroundColor="darkviolet"})),o[t].addEventListener("mouseleave",(function(){l[t].style.backgroundColor=""}))}]);