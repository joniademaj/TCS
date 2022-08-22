const arrow = document.querySelector(".circle");
const loadingElement = document.getElementById("loading");
const cookiesContent = document.querySelector(".cookies");
    arrow.style.display = "none";   
    
    window.addEventListener("scroll", () => {
        console.log(window.scrollY);
        if(window.scrollY !== 0){
            arrow.style.display = "block";
        }else{
            arrow.style.display = "none";
        }
        arrow.addEventListener("click", () => {
            window.scrollTo(0, 0);
        });
    });

const btn = document.querySelector(".navbar-toggler");
const closeBtn = document.querySelector(".close");
const burger = document.querySelector(".burger");

btn.addEventListener("click", () => {
    closeBtn.classList.toggle("close-open");
    burger.classList.toggle("burger-not-active");
});

// window.addEventListener("load", () => {
//     loadingElement.style.display = "none";
// });

// $(window).on('load', () => {
//     $('.loading').fadeOut(1000);
//     $('.background').fadeIn(1000);
// });
