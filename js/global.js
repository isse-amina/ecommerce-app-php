const productDropdownButton = document.querySelectorAll(".product__page .product__section__title"); 
const productDropdownMenu = document.querySelectorAll(".product__page .dropdown__wrapper");
const productDownwardsArrow = document.querySelectorAll(".product__page .downwards__arrow");
const productUpwardsArrow = document.querySelectorAll(".product__page .upwards__arrow");  

var isProductDropdownOpen = new Array(productDropdownButton.length).fill(false);

for (var i = 0; i < productDropdownButton.length; i++) {
    productDropdownButton[i].addEventListener("click", openDropdown); 
}

const footerDropdownButton = document.querySelectorAll(".mobile__footer .footer__section__title"); 
const footerDropdownMenu = document.querySelectorAll(".mobile__footer .dropdown__wrapper");
const footerDownwardsArrow = document.querySelectorAll(".mobile__footer .downwards__arrow");
const footerUpwardsArrow = document.querySelectorAll(".mobile__footer .upwards__arrow");  

var isFooterDropdownOpen = new Array(footerDropdownButton.length).fill(false);

for (var i = 0; i < footerDropdownButton.length; i++) {
    footerDropdownButton[i].addEventListener("click", openDropdown); 
}

const navDropdownButton = document.querySelectorAll(".mobile__nav .nav__links li"); 
const navDropdownMenu = document.querySelectorAll(".mobile__nav .dropdown__container");
const navDownwardsArrow = document.querySelectorAll(".mobile__nav .downwards__arrow");
const navUpwardsArrow = document.querySelectorAll(".mobile__nav .upwards__arrow");  

var isNavDropdownOpen = new Array(navDropdownButton.length).fill(false);

for (var i = 0; i < navDropdownButton.length; i++) {
    navDropdownButton[i].addEventListener("click", openDropdown); 
}

function openDropdown() {
    let index = this.getAttribute("data-index"); 
    if (this.getAttribute("data-tag") == "nav") {
        var isDropdownOpen = isNavDropdownOpen;
        var dropdownMenu = navDropdownMenu[index];
        var downwardsArrow = navDownwardsArrow[index]; 
        var upwardsArrow = navUpwardsArrow[index]; 
    } 
    else if (this.getAttribute("data-tag") == "footer") {
        var isDropdownOpen = isFooterDropdownOpen;
        var dropdownMenu = footerDropdownMenu[index];
        var downwardsArrow = footerDownwardsArrow[index]; 
        var upwardsArrow = footerUpwardsArrow[index]; 
    }
    else if (this.getAttribute("data-tag") == "product") { 
        var isDropdownOpen = isProductDropdownOpen;
        var dropdownMenu = productDropdownMenu[index];
        var downwardsArrow = productDownwardsArrow[index]; 
        var upwardsArrow = productUpwardsArrow[index]; 
    }
    else {
        return; 
    }

    if (!isDropdownOpen[index]) {
        dropdownMenu.classList.add("open"); 
        downwardsArrow.style.display = "none"; 
        upwardsArrow.style.display = "inline-block"; 
        isDropdownOpen[index] = true;
    }
    else {
        dropdownMenu.classList.remove("open"); 
        downwardsArrow.style.display = "inline-block"; 
        upwardsArrow.style.display = "none"; 
        isDropdownOpen[index] = false; 
    }
}

const productMinusQuantity = document.querySelectorAll(".selection__quantity .button.minus");
const productPlusQuantity = document.querySelectorAll(".selection__quantity .button.plus");
const productQuantity = document.querySelectorAll(".selection__quantity .quantity__field");

for (var i = 0; i < productMinusQuantity.length; i++) {
    productMinusQuantity[i].addEventListener("click", decrementQuantity);
}

for (var i = 0; i < productPlusQuantity.length; i++) {
    productPlusQuantity[i].addEventListener("click", incrementQuantity);
}

function decrementQuantity() {
    var index;
    for (var i = 0; i < productMinusQuantity.length; i++) {
        if (this == productMinusQuantity[i]) {
            index = i; 
        }
    }
    var currentQuantityValue = productQuantity[index].value; 
    if (currentQuantityValue > 1) {
        productQuantity[index].value = parseInt(currentQuantityValue) - 1; 
    }
    var page = (window.location.pathname).split("/").pop();
    if (page == "cart-page.php") {
       updateCookie(index, productQuantity[index].value); 
    }
}

function incrementQuantity() {
    var index;
    for (var i = 0; i < productPlusQuantity.length; i++) {
        if (this == productPlusQuantity[i]) {
            index = i; 
        }
    }
    var currentQuantityValue = productQuantity[index].value; 
    if (currentQuantityValue == "") {
        currentQuantityValue = 1; 
    }
    productQuantity[index].value = parseInt(currentQuantityValue) + 1; 
    var page = (window.location.pathname).split("/").pop();
    if (page == "cart-page.php") {
       updateCookie(index, productQuantity[index].value); 
    }
} 

const toggleVisibility = document.querySelector(".show__password");
if (toggleVisibility != null) {
    toggleVisibility.addEventListener("click", togglePasswordVisibility); 
}

function togglePasswordVisibility() {
    if (document.querySelector(".user__password").type === "password") {
        document.querySelector(".user__password").type = "text";
    } else {
        document.querySelector(".user__password").type = "password";
    }
}