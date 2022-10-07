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


var drinkImg = ['../img/golden-drink.jpg'];
var drinksName = ['Blue Scotch', 'Red Scotch', 'Golden Scotch', 'Green Scotch', 'Orange Scotch', 'White Scotch'];
var drinkPrice = [500, 450, 560, 430, 500, 200];
//DrinkTags: 
//  1: Coctail
//  2: Alcoholic
//  3: Non-Alcoholic
var drinkTag = [0, 1, 2, 0, 1, 2];


// var drinkSection = `
// <div class="menu-item">
//                 <div class="menu-item-img">
//                     <img src="../img/golden-drink.jpg" alt="Golden Drink">
//                 </div>
//                 <div class="menu-item-details">
//                     <p class="drink-name">Blue Scotch</p>
//                     <p class="cost">$500</p>
//                     <div class="tag tag-icon">
//                         <i class="fa-solid fa-tag tag-icon"></i>
//                         <p>Alcoholic</p>
//                     </div>
//                     <button class="add-to-cart">
//                         <i class="fa-solid fa-bag-shopping add-to-cart"></i>
//                         &nbsp;Add to Cart
//                     </button>
//                 </div>
//             </div> `;

// var menuItem = document.querySelector('menu-item');
// menuItem.insertAdjacentHTML("afterend", drinkSection);