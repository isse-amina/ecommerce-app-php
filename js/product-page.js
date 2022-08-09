const productPrice = document.querySelectorAll(".product__page .product__price");
const productSizes = document.querySelectorAll(".product__page .selection__size p");

for (var i = 0; i < productSizes.length; i++) {
    productSizes[i].addEventListener("click", productSelection); 
}

function productSelection() {
    var productSizeIndex; 
    for (var i = 0; i < productSizes.length; i++) {
        productSizes[i].style.backgroundColor = "white";
        productSizes[i].style.color = "black"; 
        productPrice[i].style.display = "none"; 
        if (productSizes[i] === this) {
            productSizeIndex = i; 
        }
    } 
    
    this.style.backgroundColor = "black"; 
    this.style.color = "white"; 
    productPrice[productSizeIndex].style.display = "block"; 
}

const productMainImage = document.querySelector(".product__page .product__image .main__image img");
const productSubImages = document.querySelectorAll(".product__page .product__image .sub__image img");

var currentMainImage = productSubImages[0]; 

for (var i = 0; i < productSubImages.length; i++) {
    productSubImages[i].addEventListener("click", productImage); 
}

function productImage() {
    if (this.src != productMainImage.src) {
        productMainImage.src = this.src; 
        this.style.borderColor = "black";
        currentMainImage.style.borderColor = "#E0E0E0"; 
        currentMainImage = this; 
    }
}

const addToCartButton = document.querySelector(".product__page .button.add__cart");

if (addToCartButton != null) {
    addToCartButton.addEventListener("click", addToCart); 
}

const buyNowButton = document.querySelector(".product__page .button.buy__now");

if (buyNowButton != null) {
    buyNowButton.addEventListener("click", addToCart); 
}

function addToCart() {
    var addedToCart = getProductDetails(); 
    if (addedToCart) {
        if (this.className == "button buy__now") {
            window.location.href = "cart-page.php";
            return; 
        }
        document.querySelector(".product__page .quantity__field").value = "1"; 
        addToCartButton.value = "Added \u2713"; 
        setTimeout(revertCartMessage, 500);
    }
}

function revertCartMessage() {
    addToCartButton.value = "Add to cart"; 
}

function getProductDetails() {
    var index; 
    var title = document.querySelector(".product__page .product__name").innerHTML;
    var prices = document.querySelectorAll(".product__page .product__price");
    index = 0; 
    for (var i = 0; i < prices.length; i++) {
        if (prices[i].style.display == "block") {
            index = i; 
        }
    }
    var price = prices[index].innerHTML; 
    price = (price.substring(1)).split(" ")[0];
    var sizes = document.querySelectorAll(".product__page .selection__size p");
    index = 0; 
    for (var i = 0; i < sizes.length; i++) {
        if (sizes[i].style.backgroundColor == "black") {
            index = i; 
        }
    }
    var size = sizes[index].innerHTML; 
    var quantity = document.querySelector(".product__page .quantity__field").value;
    if (quantity == "") {
        alert("Quantity field cannot be empty."); 
        return false; 
    }

    var cartItem = [title, price, size, quantity];  
    var date = new Date(); 
    date.setMonth(date.getMonth() + 3);
    var expires = date.toUTCString(); 
    setCookieItems(cookieLength().toString(), JSON.stringify(cartItem), expires); 
    return true; 
}

function getCookieItems() {
    var temp = [];
    var cookies = document.cookie.split(';'); 
    for (var i = 0; i < cookies.length; i++) {
        if (!isNaN(parseInt(cookies[i]))) {
            temp[i] = cookies[i].trim(); 
        }
    }
    return temp.map(cookie => cookie.split('='));
}

function setCookieItems(key, value, expires) {
    if (value.includes("&amp;")) {
        value = value.replace("&amp;", "__"); 
    }
    if (key > 0) {
        if (checkCookieDuplicate(key, value, expires)) {
            return; 
        } 
    }
    document.cookie = key + "=" + value + ";expires=" + expires + "; path=/";
    // console.log(getCookieItems()); 
}

function cookieLength() {
    if (document.cookie.length == 0) {
        return 0;
    }
    else {
        return Object.keys(getCookieItems()).length; 
    }
}

function checkCookieDuplicate(key, value, expires) {
    var valueToAdd = JSON.parse(value); 
    var titleToAdd = valueToAdd[0];
    var priceToAdd = valueToAdd[1];
    var quantityToAdd = valueToAdd[3];
    // console.log("To Add: key=" + key + ";title=" + titleToAdd + ";price=" + priceToAdd + ";quantity=" + quantityToAdd); 
    for (var i = 0; i <= cookieLength(); i++) {
        if (typeof(getCookieItems()[i]) !== "undefined") {
            var keyOfCookie = JSON.parse(getCookieItems()[i][0]); 
            var valueInCookie = JSON.parse(getCookieItems()[i][1]); 
            var titleInCookie = valueInCookie[0];
            var priceInCookie = valueInCookie[1];
            var sizeInCookie = valueInCookie[2];
            var quantityInCookie = valueInCookie[3];
            if (titleToAdd == titleInCookie && priceToAdd == priceInCookie) {
                // console.log("In Cookie: key=" + keyOfCookie + ";title=" + titleInCookie + ";price=" + priceInCookie + ";quantity=" + quantityInCookie); 
                var newQuantity = parseInt(quantityToAdd) + parseInt(quantityInCookie);
                var cartItem = [titleToAdd, priceToAdd, sizeInCookie, newQuantity.toString()];
                document.cookie = keyOfCookie + "=" + JSON.stringify(cartItem) + ";expires=" + expires + "; path=/";
                // console.log(getCookieItems()); 
                return true; 
            }
        }
    }
    return false;
}