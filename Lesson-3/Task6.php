<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="/public/font-awesome/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">-->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <header class="header">
            <div class="container_header">
                <div class="header_l">
                    <a class="header_l" href="index.html"><img src="img/logo.png" alt="Логотип"></a>
                    <div class="header_l"><a href="index.html" class="textbrand">BRAN<span class="pink">D</span></a></div>
                    <form class="header_l" action="#">
                        <div class="browse-button">
                            Browse&nbsp; <i class="fa fa-caret-down" aria-hidden="true"></i>
                            <div class="drop">
                                <div class="drop-title">WOMAN</div>
                                <ul>
                                    <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                    <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                    <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                    <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                                    <li><a class="drop-link" href="catalog.html">Blazers</a></li>
                                    <li><a class="drop-link" href="catalog.html">Denim</a></li>
                                    <li><a class="drop-link" href="catalog.html">Leggings/Pants</a></li>
                                    <li><a class="drop-link" href="catalog.html">Skirts/Shorts</a></li>
                                    <li><a class="drop-link" href="catalog.html">Accessories</a></li>
                                </ul>
                                <div class="drop-title">MAN</div>
                                <ul>
                                    <li><a class="drop-link" href="catalog.html">Tees/Tank tops</a></li>
                                    <li><a class="drop-link" href="catalog.html">Shirts/Polos</a></li>
                                    <li><a class="drop-link" href="catalog.html">Sweaters</a></li>
                                    <li><a class="drop-link" href="catalog.html">Sweatshirts/Hoodies</a></li>
                                    <li><a class="drop-link" href="catalog.html">Blazers</a></li>
                                    <li><a class="drop-link" href="catalog.html">Jackets/vests</a></li>
                                </ul>
                            </div>
                        </div>
                        <input class="header_l" type="text" placeholder="Search for item...">
                        <button class="header_l"></button>
                    </form>
                </div>
                <div class="header_r">
                    <div class="cart-head">
                        <a class="header_r" href="cart.html"><img src="img/cart.svg" alt="Добавить в корзину"></a>
                        <div class="drop-cart">
                            <div class="drop-cart-item">
                                <img src="img/cart-item1.jpg" alt="item1">
                                <div class="item-about">
                                    <h3 class="item-about-name">REBOX ZANE</h3>
                                    <span class="item-about-span">
                                    <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true" style="color: #e4af48"></i>
                                </span>
                                    <p class="item-about-p">1 x $250</p>
                                </div>
                                <div class="cart-item-del"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                            </div>
                            <div class="drop-cart-item">
                                <div class="drop-cart-item">
                                    <img src="img/cart-item2.jpg" alt="item2">
                                    <div class="item-about">
                                        <h3 class="item-about-name">REBOX ZANE</h3>
                                        <span class="item-about-span">
                                    <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: #e4af48"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true" style="color: #e4af48"></i>
                                </span>
                                        <p class="item-about-p">1 x $250</p>
                                    </div>
                                    <div class="cart-item-del"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <div class="total-sum">
                                <div>TOTAL</div>
                                <div>$500.00</div>
                            </div>
                            <a href="checkout.html" class="button-checkout">CHECKOUT</a>
                            <a href="cart.html" class="button-checkout">GO TO CART</a>
                        </div>

                    </div>
                    <a href="account.html" class="header_r redbutton">My Account</a>
                </div>
            </div>
        </header>

        <nav class="navigation">
            <div class="container_navigation">
                <ul class="menu">
                    <?php
                    $baseMenu = ["Home", "MAN", "WOMAN", "KIDS", "ACCESSORIES", "FEATURED", "HOT DEALS"];
                    for ($i = 0; $i < count($baseMenu); $i++) {
                        echo "<li class=\"list-menu\">
                                 <a class=\"link-menu\" href=\"index.html\">$baseMenu[$i]</a>";
                                 echo '<div class="drop" style="top: 45px; left: -38px;">';

                                    for ($k = 0; $k < 3; $k++) {
                                    echo '<div class="drop-block">
                                        <div class="drop-title">WOMAN</div>
                                        <ul>';
                                            $itemArray = ["Dresses","Tops","Sweaters/Knits","Jackets/Coats","Blazers",
                                            "Denim","Leggings/Pants","Skirts/Shorts","Accessories"];

                                            for ($l = 0; $l < count($itemArray); $l++) {
                                                echo "<li><a class=\"drop-link\" href=\"catalog.html\">" . $itemArray[$l] . "</a></li>";
                                            }
                                     echo'</ul>
                                    </div>';
                                    }

                    echo '<div class="drop-block-ssale" ><p>Super Sale!</p></div>';
                    echo '</div>';
                    echo '</li>';
                    }
                    ?>
                </ul>
            </div>
        </nav>
        <div class="promo">
            <div class="container_promo">
                <div class="promo-text">
                    <h1>THE BRAND</h1>
                    <h2>OF LUXERIOUS <span class="pink">FASHION</span></h2>
                </div>
            </div>
        </div>
        <div class="categories">
            <div class="container-categories">
                <a href="catalog.html">
                    <div class="categ1">
                        <div class="label-categ">
                            <h3>HOT DEAL</h3>
                            <h2>FOR MEN</h2>
                        </div>
                    </div>
                </a>
                <a href="catalog.html">
                    <div class="categ2">
                        <div class="label-categ">
                            <h3>LUXIROUS & TRENDY</h3>
                            <h2>ACCESORIES</h2>
                        </div>
                    </div>
                </a>
                <a href="catalog.html">
                    <div class="categ3">
                        <div class="label-categ">
                            <h3>30% OFFER</h3>
                            <h2>WOMEN</h2>
                        </div>
                    </div>
                </a>
                <a href="catalog.html">
                    <div class="categ4">
                        <div class="label-categ">
                            <h3>NEW ARRIVALS</h3>
                            <h2>FOR KIDS</h2>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <div class="text-featured_items">
            <h2>Featured Items</h2>
            <h4>Shop for items based on what we featured in this week</h4>
        </div>
        <div class="items">
            <div class="item">
                <a href="single_page.html">
                    <figure>
                        <img src="img/Item1.jpg" alt="Item">
                        <div class="item-text">
                            <p>Mango people t-shirt</p>
                            <h3>$52.00</h3>
                        </div>
                    </figure>
                </a>
                <a href="cart.html" class="add">Add to Card</a>
            </div>
            <div class="item">
                <a href="single_page.html">
                            <img src="img/Item2.jpg" alt="Item">
                        <div class="item-text">
                            <p>Mango people t-shirt</p>
                            <h3>$52.00</h3>
                        </div>
                    </a>
                <a href="cart.html" class="add">Add to Card</a>
            </div>
            <div class="item">
                <a href="single_page.html">
                    <img src="img/Item3.jpg" alt="Item">
                    <div class="item-text">
                        <p>Mango people t-shirt</p>
                        <h3>$52.00</h3>
                    </div>
                </a>
                <a href="cart.html" class="add">Add to Card</a>
            </div>
            <div class="item">
                <a href="single_page.html">
                    <img src="img/Item4.jpg" alt="Item">
                    <div class="item-text">
                        <p>Mango people t-shirt</p>
                        <h3>$52.00</h3>
                    </div>
                </a>
                <a href="cart.html" class="add">Add to Card</a>
            </div>
            <div class="item">
                <a href="single_page.html">
                    <img src="img/Item5.jpg" alt="Item">
                    <div class="item-text">
                        <p>Mango people t-shirt</p>
                        <h3>$52.00</h3>
                    </div>
                </a>
                <a href="cart.html" class="add">Add to Card</a>
            </div>
            <div class="item">
                <a href="single_page.html">
                    <img src="img/Item6.jpg" alt="Item">
                    <div class="item-text">
                        <p>Mango people t-shirt</p>
                        <h3>$52.00</h3>
                    </div>
                </a>
                <a href="cart.html" class="add">Add to Card</a>
            </div>
            <div class="item">
                <a href="single_page.html">
                    <img src="img/Item7.jpg" alt="Item">
                    <div class="item-text">
                        <p>Mango people t-shirt</p>
                        <h3>$52.00</h3>
                    </div>
                </a>
                <a href="cart.html" class="add">Add to Card</a>
            </div>
            <div class="item">
                <a href="single_page.html">
                    <img src="img/Item8.jpg" alt="Item">
                    <div class="item-text">
                        <p>Mango people t-shirt</p>
                        <h3>$52.00</h3>
                    </div>
                </a>
                <a href="cart.html" class="add">Add to Card</a>
            </div>
        </div>

        <a href="catalog.html" class="redbutton button-all">Browse All Product &#160;&#160;&#8594;</a>

        <div class="banner">
            <div class="banner-img">
                <img src="img/banner.jpg" alt="Баннер">
                <a href="catalog.html" class="banner-img-label">
                    <h2>30% <span>offer</span></h2>
                    <h3>for woman</h3>
                </a>

            </div>
            <ul>
                <li>
                    <img src="img/Index-delivery.png" alt="Delivery" class="banner-index">
                    <div class="banner-text">
                        <h3>Free Delivery</h3>
                        <p>Worldwide delivery on all. Autorit tively morph next-deneration innova tion with extensive models.</p>
                    </div>
                </li>
                <li>
                    <img src="img/Index-Sales.png" alt="Sales" class="banner-index">
                    <div class="banner-text">
                        <h3>Sales & Discounts</h3>
                        <p>Worldwide delivery on all. Autorit tively morph next-deneration innova tion with extensive models.</p>
                    </div>
                </li>
                <li>
                    <img src="img/Index-Quality.png" alt="Quality" class="banner-index">
                    <div class="banner-text">
                        <h3>Quality assurance</h3>
                        <p>Worldwide delivery on all. Autorit tively morph next-deneration innova tion with extensive models.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="info-sbsr">
            <div class="info-sbsr-cont">
                <div class="info-sbsr-l">
                    <aside><img class="face" src="img/face.png" alt="face"></aside>
                    <div class="quotation">
                        <p>"Vestibilum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimetum a. Aliquam condimentum mattis neque sed pretium"</p>
                        <h3>Bin Burhan</h3>
                        <h5>Dhaka, Bd</h5>
                        <img class="plank" src="img/plankwhite.jpg" alt="">
                        <img class="plank" src="img/plankpink.jpg" alt="">
                    </div>

                </div>
                <div class="info-sbsr-r">
                    <h2>subscribe</h2>
                    <h3>for our newsletter and promoution</h3>
                    <form action="#" class="sbsr-email">
                        <input  class="sbsr-input" type="email" placeholder="Enter your E-mail" pattern="\S+@[a-z]+.[a-z]+">
                        <a href="index.html" class="sbsr-button">Subscribe</a>

                    </form>
                </div>
            </div>
        </div>
        <div class="container-lower">
            <div class="about-brand">
                <div class="about-brand-logo">
                    <a href="index.html"><img src="img/logo.png" alt="Логотип"></a>
                    <div><a href="index.html" class="textbrand">BRAN<span class="pink">D</span></a></div>
                </div>
                <p>
                    Objectively transition extencive data rather than cross functional solutions. Monotonectally syndicate multidisciplinary matherials before go&nbsp;forward benefits. Intrinsicly syndicate an&nbsp;explanded array of&nbsp;processes and cross-unit parthnerships.                </p>
                <p>
                    Efficiently plagiarize 24/365 action items and focuses infomediaries. Distinctively seize superior initiatives for wireless technologies. Dinamically optimize.
                </p>
            </div>
            <nav class="navi-bottom">
                <div>
                    <h2>COMPANY</h2>
                    <a href="index.html">Home</a>
                    <a href="catalog.html">Shop</a>
                    <a href="#">About</a>
                    <a href="#">How it Works</a>
                    <a href="#">Contact</a>
                </div>
                <div>
                    <h2>INFORMATION</h2>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">How to Bye</a>
                    <a href="#">How to Sell</a>
                    <a href="#">Promotion</a>
                </div>
                <div>
                    <h2>SHOP CATEGORY</h2>
                    <a href="catalog.html">Man</a>
                    <a href="catalog.html">Women</a>
                    <a href="catalog.html">Child</a>
                    <a href="catalog.html">Apparel</a>
                    <a href="catalog.html">Brows All</a>
                </div>
            </nav>
        </div>
        <footer>
            <div class="footer-container">
                <div class="footer-left">&copy; 2019 Brand All Rights Reserved.</div>
                <div class="footer-right">
                    <ul>
                        <li><a href="https://www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li><a href="http://www.linkedin.com/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.pinterest.ru"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://plus.google.com/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
