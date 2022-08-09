const itemDeleteButton = document.querySelectorAll(".cart__icon");

for (var i = 0; i < itemDeleteButton.length; i++) {
    itemDeleteButton[i].addEventListener("click", deleteCartElement); 
}

function deleteCartElement() {
    var date = new Date(); 
    date.setMonth(date.getMonth() + 3);
    var expires = date.toUTCString(); 

    var cartElement = this.parentElement.parentElement.parentElement.parentElement;
    if (window.innerWidth <= 400) {
        cartElement = cartElement; 
    }
    else if (window.innerWidth <= 768) {
        cartElement = cartElement.parentElement; 
    } 

    var titleToDelete = cartElement.querySelector("span h4").innerHTML;
    if (titleToDelete.includes("&amp;")) {
        titleToDelete = titleToDelete.replace("&amp;", "__"); 
    }
    var priceToDelete = cartElement.querySelector("span p").innerHTML;
    priceToDelete = (priceToDelete.substring(1)).split(" ")[0];

    for (var i = 0; i <= cookieLength(); i++) {
        if (typeof(getCookieItems()[i]) !== "undefined") {
            var keyOfCookie = JSON.parse(getCookieItems()[i][0]); 
            var valueInCookie = JSON.parse(getCookieItems()[i][1]); 
            var titleInCookie = valueInCookie[0];
            var priceInCookie = valueInCookie[1];
            var sizeInCookie = valueInCookie[2];
            var quantityInCookie = valueInCookie[3];
            if (titleToDelete == titleInCookie && priceToDelete == priceInCookie) {
                var cartItem = ["NULL"];
                document.cookie = keyOfCookie + "=" + JSON.stringify(cartItem) + ";expires=" + expires + "; path=/";
            }
        }
    }
    cartElement.style.display = "none"; 

    changeSubtotal();
    isCartEmpty(cartElement);
}

function isCartEmpty(currentCartElement) { 
    var table = currentCartElement.parentElement.parentElement; 
    var rows = table.querySelectorAll("tr");
    var numberOfEmptyRows = 0; 
    for (var i = 0; i < rows.length; i++) {
        if (rows[i].style.display == "none") {
            numberOfEmptyRows++; 
        }
    }
    if (numberOfEmptyRows == rows.length - 1) {
        table.style.display = "none"; 
        document.querySelector(".subtotal").style.display = "none"; 
        document.querySelector(".empty__cart").style.display = "flex"; 
    }
}

function updateCookie(index, quantity) {
    var date = new Date(); 
    date.setMonth(date.getMonth() + 3);
    var expires = date.toUTCString(); 

    var cartElement = productQuantity[index].parentElement.parentElement.parentElement.parentElement; 
    if (window.innerWidth <= 400) {
        cartElement = cartElement.parentElement; 
    }
    else if (window.innerWidth <= 768) {
        cartElement = cartElement.parentElement.parentElement; 
    }

    var titleToUpdate = cartElement.querySelector("span h4").innerHTML;
    if (titleToUpdate.includes("&amp;")) {
        titleToUpdate = titleToUpdate.replace("&amp;", "__"); 
    }
    var priceToUpdate = cartElement.querySelector("span p").innerHTML;
    priceToUpdate = (priceToUpdate.substring(1)).split(" ")[0];
    if (quantity == "") {
        quantity = "1"; 
    }
    var quantityToUpdate = quantity; 

    for (var i = 0; i <= cookieLength(); i++) {
        if (typeof(getCookieItems()[i]) !== "undefined") {
            var keyOfCookie = JSON.parse(getCookieItems()[i][0]); 
            var valueInCookie = JSON.parse(getCookieItems()[i][1]); 
            var titleInCookie = valueInCookie[0];
            var priceInCookie = valueInCookie[1];
            var sizeInCookie = valueInCookie[2];
            if (titleToUpdate == titleInCookie && priceToUpdate == priceInCookie) {
                var cartItem = [titleToUpdate, priceToUpdate, sizeInCookie, quantityToUpdate];
                document.cookie = keyOfCookie + "=" + JSON.stringify(cartItem) + ";expires=" + expires + "; path=/";
            }
        }
    }
    updateQuantityField(index, quantity); 
    updateRowPriceField(index, quantity, priceToUpdate);
}

function updateQuantityField(index, quantity) {
    // quantity tablet = first; quantity mobile = second; quantity desktop = third
    if (window.innerWidth <= 400) {
        productQuantity[index-1].value = quantity;
        productQuantity[index+1].value = quantity;
    }
    else if (window.innerWidth <= 768) {
        productQuantity[index+1].value = quantity;
        productQuantity[index+2].value = quantity;
    }
    else {
        productQuantity[index-1].value = quantity;
        productQuantity[index-2].value = quantity;
    }
}

function updateRowPriceField(index, quantity, price) {
    // quantity tablet = first; quantity mobile = second; quantity desktop = third
    if (window.innerWidth <= 400) {
        rowIndex = index - 1; 
    }
    else if (window.innerWidth <= 768) {
        rowIndex = index; 
    }
    else {
        rowIndex = index - 2; 
    }
    rowIndex = rowIndex / 3; 

    var rowPrice = (parseFloat(quantity) * parseFloat(price)).toFixed(2); 
    const productRowPrice = document.querySelectorAll(".row__price");
    productRowPrice[rowIndex].innerHTML = "$" + rowPrice + " CAD"; 
    
    changeSubtotal();
}

function changeSubtotal() {
    const productRowPrice = document.querySelectorAll(".row__price");
    var cartSubtotal = 0; 
    for (var i = 0; i < productRowPrice.length; i++) {
        if (productRowPrice[i].parentElement.style.display == "none") {
            continue; 
        } 
        var rowPrice = productRowPrice[i].innerHTML.trim().substring(1).split(" ")[0];
        cartSubtotal = cartSubtotal + parseFloat(rowPrice);
    }
    document.querySelector(".subtotal p").innerHTML = "$" + cartSubtotal.toFixed(2) + " CAD"; 
}

for (var i = 0; i < productQuantity.length; i++) {
    productQuantity[i].addEventListener("input", changeQuantity);
}

function changeQuantity() {
    var index;
    for (var i = 0; i < productQuantity.length; i++) {
        if (this == productQuantity[i]) {
            index = i; 
        }
    }
    var page = (window.location.pathname).split("/").pop();
    if (page == "cart-page.php") {
        updateCookie(index, productQuantity[index].value); 
    }
}