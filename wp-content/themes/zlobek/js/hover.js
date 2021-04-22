let payment = document.querySelectorAll(".payment-two-div");
let span = document.querySelectorAll('.payment-progressbar span');

for(let i = 0; i < payment.length; i++){
    payment[i].addEventListener("mouseenter", function() {
    span[i].style.backgroundColor = "darkred";
    });
          
    payment[i].addEventListener("mouseleave", function() {
    span[i].style.backgroundColor = "";
    });
}
