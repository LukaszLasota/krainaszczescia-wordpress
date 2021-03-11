
import $ from 'jquery';

if ( !( 'scrollBehavior' in document.documentElement.style ) ) {

!function(){"use strict";function o(){var o=window,t=document;if(!("scrollBehavior"in t.documentElement.style&&!0!==o.__forceSmoothScrollPolyfill__)){var l,e=o.HTMLElement||o.Element,r=468,i={scroll:o.scroll||o.scrollTo,scrollBy:o.scrollBy,elementScroll:e.prototype.scroll||n,scrollIntoView:e.prototype.scrollIntoView},s=o.performance&&o.performance.now?o.performance.now.bind(o.performance):Date.now,c=(l=o.navigator.userAgent,new RegExp(["MSIE ","Trident/","Edge/"].join("|")).test(l)?1:0);o.scroll=o.scrollTo=function(){void 0!==arguments[0]&&(!0!==f(arguments[0])?v.call(o,t.body,void 0!==arguments[0].left?~~arguments[0].left:o.scrollX||o.pageXOffset,void 0!==arguments[0].top?~~arguments[0].top:o.scrollY||o.pageYOffset):i.scroll.call(o,void 0!==arguments[0].left?arguments[0].left:"object"!=typeof arguments[0]?arguments[0]:o.scrollX||o.pageXOffset,void 0!==arguments[0].top?arguments[0].top:void 0!==arguments[1]?arguments[1]:o.scrollY||o.pageYOffset))},o.scrollBy=function(){void 0!==arguments[0]&&(f(arguments[0])?i.scrollBy.call(o,void 0!==arguments[0].left?arguments[0].left:"object"!=typeof arguments[0]?arguments[0]:0,void 0!==arguments[0].top?arguments[0].top:void 0!==arguments[1]?arguments[1]:0):v.call(o,t.body,~~arguments[0].left+(o.scrollX||o.pageXOffset),~~arguments[0].top+(o.scrollY||o.pageYOffset)))},e.prototype.scroll=e.prototype.scrollTo=function(){if(void 0!==arguments[0])if(!0!==f(arguments[0])){var o=arguments[0].left,t=arguments[0].top;v.call(this,this,void 0===o?this.scrollLeft:~~o,void 0===t?this.scrollTop:~~t)}else{if("number"==typeof arguments[0]&&void 0===arguments[1])throw new SyntaxError("Value could not be converted");i.elementScroll.call(this,void 0!==arguments[0].left?~~arguments[0].left:"object"!=typeof arguments[0]?~~arguments[0]:this.scrollLeft,void 0!==arguments[0].top?~~arguments[0].top:void 0!==arguments[1]?~~arguments[1]:this.scrollTop)}},e.prototype.scrollBy=function(){void 0!==arguments[0]&&(!0!==f(arguments[0])?this.scroll({left:~~arguments[0].left+this.scrollLeft,top:~~arguments[0].top+this.scrollTop,behavior:arguments[0].behavior}):i.elementScroll.call(this,void 0!==arguments[0].left?~~arguments[0].left+this.scrollLeft:~~arguments[0]+this.scrollLeft,void 0!==arguments[0].top?~~arguments[0].top+this.scrollTop:~~arguments[1]+this.scrollTop))},e.prototype.scrollIntoView=function(){if(!0!==f(arguments[0])){var l=function(o){for(;o!==t.body&&!1===d(o);)o=o.parentNode||o.host;return o}(this),e=l.getBoundingClientRect(),r=this.getBoundingClientRect();l!==t.body?(v.call(this,l,l.scrollLeft+r.left-e.left,l.scrollTop+r.top-e.top),"fixed"!==o.getComputedStyle(l).position&&o.scrollBy({left:e.left,top:e.top,behavior:"smooth"})):o.scrollBy({left:r.left,top:r.top,behavior:"smooth"})}else i.scrollIntoView.call(this,void 0===arguments[0]||arguments[0])}}function n(o,t){this.scrollLeft=o,this.scrollTop=t}function f(o){if(null===o||"object"!=typeof o||void 0===o.behavior||"auto"===o.behavior||"instant"===o.behavior)return!0;if("object"==typeof o&&"smooth"===o.behavior)return!1;throw new TypeError("behavior member of ScrollOptions "+o.behavior+" is not a valid value for enumeration ScrollBehavior.")}function p(o,t){return"Y"===t?o.clientHeight+c<o.scrollHeight:"X"===t?o.clientWidth+c<o.scrollWidth:void 0}function a(t,l){var e=o.getComputedStyle(t,null)["overflow"+l];return"auto"===e||"scroll"===e}function d(o){var t=p(o,"Y")&&a(o,"Y"),l=p(o,"X")&&a(o,"X");return t||l}function h(t){var l,e,i,c,n=(s()-t.startTime)/r;c=n=n>1?1:n,l=.5*(1-Math.cos(Math.PI*c)),e=t.startX+(t.x-t.startX)*l,i=t.startY+(t.y-t.startY)*l,t.method.call(t.scrollable,e,i),e===t.x&&i===t.y||o.requestAnimationFrame(h.bind(o,t))}function v(l,e,r){var c,f,p,a,d=s();l===t.body?(c=o,f=o.scrollX||o.pageXOffset,p=o.scrollY||o.pageYOffset,a=i.scroll):(c=l,f=l.scrollLeft,p=l.scrollTop,a=n),h({scrollable:c,method:a,startTime:d,startX:f,startY:p,x:e,y:r})}}"object"==typeof exports&&"undefined"!=typeof module?module.exports={polyfill:o}:o()}();

			document.querySelector( '.navigation' ).addEventListener( 'click', ( evt ) => {
				const link = evt.target.closest( '.menu__link' );

				if ( !link ) {
					return;
				}

				evt.preventDefault();

				const scrollToElement = link.getAttribute( 'href' );

				document.querySelector( scrollToElement ).scrollIntoView( {
					behavior: 'smooth' }
				);

				location.href = scrollToElement;
			} );
	}


// $('.navigation-list a, .footer-one-text a, .arrow-down-img a').on('click', function(e) {
//     // e.preventDefault()
    
//       $('html, body').animate(
//         {
//           scrollTop: $($(this).attr('href')).offset().top -300,
//         },
//         500,
//         'linear'
//       )
//     });

    //jQuery.noConflict();
// jQuery(function($) {
 

//     // Customize Settings: For more information visit www.blogsynthesis.com/plugins/jquery-smooth-scroll/
     
//       // When to show the scroll link
//       // higher number = scroll link appears further down the page	
//       var upperLimit = 100; 
        
//       // Our scroll link element
//       var scrollElem = $('a#scroll-to-top');
      
//       // Scroll Speed. Change the number to change the speed
//       var scrollSpeed = 700;
      
//       // Choose your easing effect http://jqueryui.com/resources/demos/effect/easing.html
//       var scrollStyle = 'swing';
      
//     /****************************************************
//      *                                                  *
//      *      JUMP TO ANCHOR LINK SCRIPT START            *
//      *                                                  *
//      ****************************************************/
      
    
    
//       // Scroll to top animation on click
//       $(scrollElem).click(function(){ 
//         $('html, body').animate({scrollTop:0}, scrollSpeed, scrollStyle ); return false; 
//       });
    
//     /****************************************************
//      *                                                  *
//      *      JUMP TO ANCHOR LINK SCRIPT START            *
//      *                                                  *
//      ****************************************************/
    
//       $('a[href*="#"]:not([href="#"]):not([href^="#tab"]):not([href^="#collapse"])').click(function()
//       {
//         if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
//             || location.hostname == this.hostname) 
//         {
          
//           var target = $(this.hash),
//           headerHeight = $(".header").height() + 5; // Get fixed header height
                
//           target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  
//           if (target.length) 
//           {
//             $('html,body').animate({ scrollTop: target.offset().top -65 }, scrollSpeed, scrollStyle );
//             return false;
//           }
//         }
//       });
      
    
//     /****************************************************
//      *                                                  *
//      *   FOLLOW BLOGSYNTHESIS.COM FOR WORDPRESS TIPS    *
//      *                                                  *
//      ****************************************************/
     
//     });

//Add smooth scroling after click a atribute//







// const linkMenu = document.querySelectorAll('.navigation-list a[href^="#"]');
// const linkFooter = document.querySelectorAll('.footer-one-text a[href^="#"]');
// // const arrow = document.querySelectorAll('.arrow-down-img a > img');

// const links = [...linkMenu, ...linkFooter];
// // console.log(links);

// for (const link of links) {
//     link.addEventListener("click", clickHandler);
//     // console.log(link);
//   }

// function clickHandler(e) {
//     e.preventDefault();
//     const href = this.getAttribute("href");
//     console.log(href);
//     const offsetTop = document.querySelector(href).offsetTop;
//     console.log(offsetTop);
  
//     window.scrollTo({
//       top: offsetTop,
//       behavior: "smooth"
//     });
//   }
  
    // links.forEach(trigger => {
    //     trigger.onclick = function(e) {
    //         e.preventDefault();
    //         let hash = this.getAttribute('href');
    //         let target = document.querySelector(hash);
    //         let headerOffset = 200;
    //         let elementPosition = target.offsetTop;
    //         let offsetPosition = elementPosition - headerOffset;

    //         window.scrollTo({
    //             top: offsetPosition,
    //             behavior: "smooth"
    //         });
    //     };
    // });