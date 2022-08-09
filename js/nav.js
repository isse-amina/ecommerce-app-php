const closeSymbol = document.querySelector(".close__symbol");
const hamburgerMenuSymbol = document.querySelector(".hamburger__menu .nav__icon");
const hamburgerMenuContainer = document.querySelector(".hamburger__menu__container"); 

let isHamburgerMenuOpen = true; 
hamburgerMenuSymbol.addEventListener("click", openHamburgerMenu); 
closeSymbol.addEventListener("click", openHamburgerMenu);


function openHamburgerMenu(event) {
    if (isHamburgerMenuOpen) {
        hamburgerMenuContainer.style.left = "0"; 
        isHamburgerMenuOpen = false; 
        document.querySelector(".search__text").value = "";
        $(".search__results").load("searchbar.php", {
            searchedSubstring: $(".search__text").val()
        }); 
    }
    else {
        hamburgerMenuContainer.style.left = "-315px"; 
        isHamburgerMenuOpen = true; 
        document.querySelector(".search__text").value = "";
    }
}

$(document).ready(function() {
    var searchTerm = ""; 
    $(".search__text").on("input", function() {
        if (isHamburgerMenuOpen) {
            $(".search__results").load("searchbar.php", {
                searchedSubstring: $(".search__text").val()
            }); 
        }
    }); 
    $(".search__icon").click(function() {
        searchTerm = $.trim($(".search__text").val()); 
        if (searchTerm != "") {
            window.location.href = "search-page.php?search=" + searchTerm; 
        }
    })
    $('.search__text').keypress(function (e) {
        searchTerm = $.trim($(".search__text").val()); 
        if (searchTerm != "" && e.which == 13) {
            window.location.href = "search-page.php?search=" + searchTerm; 
        }
    });
});