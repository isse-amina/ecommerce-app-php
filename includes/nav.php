<header>
    <div class="utility__bar">
        <div>
            <input type="image" class="search__icon" name="search__icon" src="images/nav/search.png"/>
            <input type="text" class="search__text" name="search__text" placeholder="Search">
        </div>
    </div>
    <nav class="desktop__nav">
        <div>
            <h4 class="store__logo">
                <a href="index.php">
                    Intrasdala
                    <img class="store__icon" src="images/nav/star.png">
                </a>
            </h4>
        </div>
        <div>
            <ul class="nav__links">
                <li>
                    <a class="main__links" href="<?php echo 'aisle-page.php?category='.urlencode('Shop All');?>">SHOP
                        <span class="downwards__arrow"></span>
                    </a>
                    <div class="dropdown__container">
                        <ul class="dropdown__menu">
                            <li>
                                <a href="<?php echo 'product-page.php?title='.urlencode('Intrasdala Lotion');?>">
                                    <img src="images/nav/intrasdala_lotion.jpg">
                                    <p>Intrasdala Lotion</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo 'aisle-page.php?category='.urlencode('The Ordinary');?>">
                                    <img src="images/nav/the_ordinary.jpg">
                                    <p>The Ordinary</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo 'aisle-page.php?category='.urlencode('Glow Recipe');?>">
                                    <img src="images/nav/glow_recipe.jpg">
                                    <p>Glow Recipe</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo 'aisle-page.php?category='.urlencode('Glossier');?>">
                                    <img src="images/nav/glossier.jpg">
                                    <p>Glossier</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo 'aisle-page.php?category='.urlencode('Shop All');?>">
                                    <img src="images/nav/shop_all.jpg">
                                    <p>Shop All</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a class="main__links" href="<?php echo 'product-page.php?title='.urlencode('Intrasdala Lotion');?>">BEST SELLER</a></li>
                <li><a class="main__links" href="<?php echo 'construction-page.php';?>">SKINCARE QUIZ</a></li>
            </ul>
        </div>
        <div class="nav__actions">
            <?php
                if(isset($_SESSION["fname"])) {
            ?>
            <a href="<?php echo 'profile-page.php';?>"><img class="nav__icon" src="images/nav/logged_in.png"></a>
            <?php
                }
                else {
            ?>
            <a href="<?php echo 'login-page.php';?>"><img class="nav__icon" src="images/nav/user.png"></a>
            <?php
                }
            ?>
            <a href="cart-page.php"><img class="nav__icon" src="images/nav/bag.png"></a>
        </div>
    </nav>
    <nav class="mobile__nav">
        <div class="hamburger__menu">
            <img class="nav__icon" src="images/nav/menu.png">
            <div class="hamburger__menu__container">
                <div class="nav__login">
                    <?php
                        if(isset($_SESSION["fname"])) {
                    ?>
                    <a href="<?php echo 'profile-page.php';?>"><img class="nav__icon" src="images/nav/logged_in.png"></a>
                    <a href="<?php echo 'profile-page.php';?>"><p>PROFILE</p></a>
                    <?php
                        }
                        else {
                    ?>
                    <a href="<?php echo 'login-page.php';?>"><img class="nav__icon" src="images/nav/user.png"></a>
                    <a href="<?php echo 'login-page.php';?>"><p>LOG IN</p></a>
                    <?php
                        }
                    ?>
                    <div>
                        <span class="close__symbol"></span>
                    </div>
                </div>
                <ul class="nav__links">
                    <li data-index="0" data-tag="nav">
                        <a>
                            SHOP
                            <span class="downwards__arrow"></span>
                            <span class="upwards__arrow"></span>
                        </a>
                        <div class="dropdown__container">
                            <ul class="dropdown__menu">
                                <li>
                                    <a href="<?php echo 'product-page.php?title='.urlencode('Intrasdala Lotion');?>">Intrasdala Lotion </a>
                                </li>
                                <li>
                                    <a href="<?php echo 'aisle-page.php?category='.urlencode('The Ordinary');?>">The Ordinary</a>
                                </li>
                                <li>
                                    <a href="<?php echo 'aisle-page.php?category='.urlencode('Glow Recipe');?>">Glow Recipe</a>
                                </li>
                                <li>
                                    <a href="<?php echo 'aisle-page.php?category='.urlencode('Glossier');?>">Glossier</a>
                                </li>
                                <li>
                                    <a href="<?php echo 'aisle-page.php?category='.urlencode('Shop All');?>">Shop All</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="<?php echo 'product-page.php?title='.urlencode('Intrasdala Lotion');?>">BEST SELLER</a></li>
                    <li><a href="<?php echo 'construction-page.php';?>">SKINCARE QUIZ</a></li>
                </ul>
                <ul class="more__nav__links">
                    <li><a href="<?php echo 'shipping-page.php';?>">Shipping</a></li>
                    <li><a href="<?php echo 'returns-page.php';?>">Return Policy</a></li>
                    <li><a href="<?php echo 'contact-page.php';?>">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div>
            <h4 class="store__logo">
                <a href="index.php">
                    Intrasdala
                    <img class="store__icon" src="images/nav/star.png">
                </a>
            </h4>
        </div>
        <div class="nav__actions">
            <a href="cart-page.php"><img class="nav__icon" src="images/nav/bag.png"></a>
        </div>
    </nav>
</header>
<div class="search__results"></div>