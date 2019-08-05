<?php
session_start();


//$id = (int)$_GET['item'];
//
//if (isset($id) && !empty($id)) {
//    $sql = mysqli_query($handle, "SELECT * FROM carts WHERE id= " . $id);
//    if (empty($sql)) {
//        echo "Вы не выбрали товар";
//    }
//    while ($result = mysqli_fetch_assoc($sql)) {
//        array_push($json, $result);
//    }
//}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
                <li class="list-menu">
                    <a class="link-menu" href="catalog.html">WOMAN</a>
                    <div class="drop" style="top: 45px; left: -38px;">
                        <div class="drop-block">
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
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block-ssale"><p>Super Sale!</p></div>
                    </div>


                </li>
                <li class="list-menu">
                    <a class="link-menu" href="catalog.html">KIDS</a>
                    <div class="drop" style="top: 45px; left: -38px;">
                        <div class="drop-block">
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
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block">
                            <div class="drop-title">WOMAN</div>
                            <ul>
                                <li><a class="drop-link" href="catalog.html">Dresses</a></li>
                                <li><a class="drop-link" href="catalog.html">Tops</a></li>
                                <li><a class="drop-link" href="catalog.html">Sweaters/Knits</a></li>
                                <li><a class="drop-link" href="catalog.html">Jackets/Coats</a></li>
                            </ul>
                        </div>
                        <div class="drop-block-ssale"><p>Super Sale!</p></div>
                    </div>


                </li>


            </ul>
        </div>
    </nav>
    <nav class="arrivals">
        <div class="arrivals-cont">
            <h2 class="arrivals-name">NEW ARRIVALS</h2>
            <ul class="arrivals-menu">
                <li class="arrivals-crumbs"><a href="index.html">HOME</a></li>
                <li>/</li>
                <li class="arrivals-crumbs"><a href="catalog.html">MAN</a></li>
                <li>/</li>
                <li class="arrivals-crumbs"><a href="catalog.html">NEW ARRIVALS</a></li>
            </ul>
        </div>
    </nav>
    <div class="cart">
        <table class="cart-list">
            <tr>
                <th style="text-align: left">Product Details</th>
                <th>unite Price</th>
                <th>Quantity</th>
                <th>shipping</th>
                <th>Subtotal</th>
                <th>ACTION</th>
            </tr>
            <?php
            include_once "config.php";
            $user_id = 1; // hard coded user id
            $queryAll = "SELECT * FROM carts WHERE user_id=" . $user_id;
            $result = mysqli_query($handle, $queryAll);
            $json = [];
            while ($catalogArray = mysqli_fetch_assoc($result)) {
                array_push($json, $catalogArray);
            }

            $oneItem = json_decode(json_encode($json), true);
            forEach ($oneItem as $key):
                $someArray = json_decode($key['item'], true);
                ?>
                <tr>
                    <td class="cart__table_item1">
                        <a href="single_page.html"><img src="img/item9.jpg" alt="Item"></a>
                        <div class="cart__table_about">
                            <h3><?= $someArray['description'] ?></h3>
                            <h4>Color: <span>Red</span></h4>
                            <h4>Size: <span>XXL</span></h4>
                        </div>
                    </td>
                    <td><?= $someArray['price'] ?></td>
                    <td>
                        <input type="text" class="cart__table_quanity" value="<?= $someArray['quantity'] ?>">
                        <input type="hidden" class="cart_table_hidden" value="<?= $someArray['product_id'] ?>"/>
                    </td>
                    <td>FREE</td>
                    <td>$300</td>
                    <td>
                        <div class="cart-item-del"><i
                                    class="fa fa-times-circle"
                                    onclick="delete_item(<?= (int)$someArray['product_id'] ?>)" aria-hidden="true"></i>
                        </div>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </table>
        <div class="cart__block2">
            <a href="#" class="cart__2_buttons" title="Очистить корзину">CLEAR SHOPPING CART</a>
            <a href="catalog.html" class="cart__2_buttons" title="Продолжить покупки">cONTINUE sHOPPING</a>
        </div>
        <div class="cart__block3">
            <div class="cart__block3_adressBlock">
                <h2 class="cart__block3_h2">Shipping Adress</h2>
                <select class="cart__block3_input">
                    <option class="cart__block3_input">Russia</option>
                    <option class="cart__block3_input">USA</option>
                    <option class="cart__block3_input">Bangladesh</option>
                </select>
                <input type="text" class="cart__block3_input" placeholder="State">
                <input type="text" class="cart__block3_input" placeholder="Postcode / Zip">
                <input type="button" class="cart__block3_button" title="get a quote" value="get a quote">
            </div>
            <div class="cart__block3_discontBlock">
                <h2 class="cart__block3_h2">Shipping Adress</h2>
                <p>Enter your coupon code if you have one</p>
                <input type="text" class="cart__block3_input" placeholder="State">
                <input type="button" class="cart__block3_button" title="Применить" value="Apply coupon">
            </div>
            <div class="cart__block3_totalBlock">
                <div class="cart__block3_totalSub">
                    <p>Sub total</p>
                    <p class="pink">$900</p>
                </div>
                <div class="cart__block3_totalGrand">
                    <h3>Grand Total</h3>
                    <h3 class="pink">$900</h3>
                </div>
                <div class="horisontal-line2"></div>
                <div class="redbutton">PROCESSED TO CHECKOUT</div>
            </div>
        </div>
    </div>
    <div class="info-sbsr">
        <div class="info-sbsr-cont">
            <div class="info-sbsr-l">
                <aside><img class="face" src="img/face.png" alt="face"></aside>
                <div class="quotation">
                    <p>"Vestibilum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimetum a. Aliquam
                        condimentum mattis neque sed pretium"</p>
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
                    <input class="sbsr-input" type="text" placeholder="Enter your E-mail">
                    <a href="#" class="sbsr-button">Subscribe</a>

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
                Objectively transition extencive data rather than cross functional solutions. Monotonectally syndicate
                multidisciplinary matherials before go&nbsp;forward benefits. Intrinsicly syndicate an&nbsp;explanded
                array of&nbsp;processes and cross-unit parthnerships.
            </p>
            <p>
                Efficiently plagiarize 24/365 action items and focuses infomediaries. Distinctively seize superior
                initiatives for wireless technologies. Dinamically optimize.
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
                    <li><a href="https://www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="https://twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="http://www.linkedin.com/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="https://www.pinterest.ru"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="https://plus.google.com/"><i class="fa fa-google-plus-square"
                                                              aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<script>
  document.querySelector('.cart-list').addEventListener('focusout', () => {
    fetch('add_to.php', {
      method: 'POST',
      headers: {
        "ContentType": "application/json"
      },
      body: JSON.stringify({
        type: "update",
        user_id: 1,
        quantity: document.querySelector('.cart__table_quanity').value,
        product_id: document.querySelector('.cart_table_hidden').value
      })
    })
        .then(result => result.json())
        .then(r => console.log(r));
  });

  function delete_item(product_id) {
    fetch('add_to.php', {
      method: 'POST',
      headers: {
        "ContentType": "application/json"
      },
      body: JSON.stringify({
        type: "delete",
        id: product_id
      })
    })
        .then(result => result.json())
        .then(r => console.log(r));
  }
</script>
</body>
</html>
