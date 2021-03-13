//Add background image with scroll//
const menuBackground = document.querySelector('.nav-bg');

let scrollpos = window.scrollY;
const header_height = 900;

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

