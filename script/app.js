var navLines = document.querySelector(".nav-lines");
var navGreyLine = document.querySelector(".nav-grey-line");
navLines.addEventListener("click", () => {
    var navLinks = document.querySelector(".nav-links");
    navLinks.classList.toggle("active");
})

function screenWidthTest() {
    if(screen.width < 1000) {
        console.log("screen width less than 1000px");
        navGreyLine.remove();
    }
}

var plus = document.querySelectorAll(".plus");

function plusclick() {
    plus.forEach(pl => {
        pl.addEventListener("click", () => {
            pl.classList.toggle("active");
        });
    });
}
setInterval(plusclick(), 1);

var addTocart = document.querySelectorAll(".add-to-cart");
var addTocartOverlay = document.querySelector(".add-to-cart-overlay");
function addToCartClick() {
    // addTocart.addEventListener("click", () => {});
    addTocart.forEach(addtocart => {
        addtocart.addEventListener("click", () => {
            addTocartOverlay.classList.add("show");
            setTimeout(fadeOut, 3000);
        });
    });
}

function fadeOut() {
    addTocartOverlay.classList.remove("show");
}

setInterval(addToCartClick(), 1);