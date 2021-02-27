const menuBackground = document.querySelector('.nav-bg');
const menu = document.querySelector('.nav-bg');
const header= document.querySelector('.header');
let scrollpos = window.scrollY;
const header_height = header.offsetHeight - 380;

const add_class_on_scroll = () => {
    menuBackground.style.opacity = 1;
    menuBackground.style.transition = 'opacity 1.2s';
}
const remove_class_on_scroll = () =>  {
    menuBackground.style.opacity = 0;
    menuBackground.style.transition = 'opacity 0.1s';
}

window.addEventListener('scroll', function(){ 
    scrollpos = window.scrollY;
    if(scrollpos >= header_height){
        add_class_on_scroll();
    } 
    else {
        remove_class_on_scroll();
    }
});
