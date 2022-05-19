const arrow = document.querySelector(".circle");
const text = docucment.querySelector(".scroll-to-the-top-text");

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

const responsive_capabilities = document.querySelector(".responsive-capabilities");
const capabilities = document.querySelector(".capabilities");

console.log(responsive_capabilities);
console.log(capabilities);
let mobile = 768;

responsive_capabilities.style.display = "none";

if(window.innerWidth <= mobile){
    responsive_capabilities.style.display = "block";
    responsive_capabilities.style.display = "none";
}

// show animation to scroll to the top on hover
