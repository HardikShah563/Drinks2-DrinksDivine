var plus = document.querySelectorAll(".plus");

// plus.forEach(pl => {
//     pl.addEventListener("click", () => {
//         console.log('plus clicked');
//         pl.classList.toggle("active");
//     });
// });

function plusclick() {
    plus.forEach(pl => {
        pl.addEventListener("click", () => {
            console.log('plus clicked');
            pl.classList.toggle("active");
        });
    });
}

setInterval(plusclick(), 1);