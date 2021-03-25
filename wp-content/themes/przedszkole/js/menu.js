//Add background image with scroll//
const menuBackground = document.querySelector('.nav-bg');

let header_height;

if(window.innerWidth >  1600){
    header_height = 900;
} else if(window.innerWidth >  1400){
    header_height = 700;
}else if(window.innerWidth >  1200){
    header_height = 570;
}else if(window.innerWidth > 800){
    header_height = 420;
}else if(window.innerWidth > 650){
    header_height = 350;
}

const add_class_on_scroll = () => {
    menuBackground.style.opacity = 1;
    menuBackground.style.transition = 'opacity 1.2s';
}
const remove_class_on_scroll = () =>  {
    menuBackground.style.opacity = 0;
    menuBackground.style.transition = 'opacity 0.1s';
}

if(menuBackground){
    window.addEventListener('scroll', function(){ 
        scrollpos = window.scrollY;
        if(scrollpos >= header_height){
            add_class_on_scroll();
        } 
        else {
            remove_class_on_scroll();
        }
    });
}



// Hambureger 

const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.navigation');
const mainNav = document.querySelector('.main-nav');
let scrollposTwo = window.scrollY;


const handleClick = () => {
  hamburger.classList.toggle('hamburger--active');
  hamburger.setAttribute('aria-expanded', hamburger.classList.contains('hamburger--active'));
  nav.classList.toggle('navigation--active');
  
  if(scrollposTwo < 10){
    mainNav.classList.add("main-nav-bg");
  }
}

hamburger.addEventListener('click', handleClick);

//Add background-color to menu

// function addClassOnScroll() {
//   mainNav.classList.add("main-nav-bg");
// }

// function removeClassOnScroll() {
//   mainNav.classList.remove("main-nav-bg");
// }
