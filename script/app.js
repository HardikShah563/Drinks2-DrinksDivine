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
// setInterval(screenWidthTest, 10);