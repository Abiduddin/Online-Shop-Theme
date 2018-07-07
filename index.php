<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Buy it</title>
        <script src="lib/jquery.min.js" type="text/javascript"></script>
        <link href="css/style1.css" rel="stylesheet" type="text/css"/>
        <script src="lib/jquery.slides.min.js" type="text/javascript"></script>
        <script src="js/script1.js" type="text/javascript"></script>


        <script>
            $(function(){
                $('#slides').slidesjs({
                width: 972,
                height: 330,
                play: {
                  active: true,
                  auto: true,
                  interval: 3000,
                  swap: true
                }
                });
            });
        </script>
    </head>
    <body>

        <div class="navigation_main clear">
            <div class="navigation clear">
            <ul>
                <li><a href="index.php" class="main">OnlineShopping.com</a></li>
                <li><input type="text" name="searchBox"/><input type="button" name="search" value="Search"/></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">About</a></li>
            </ul>
            </div>
            <div class="navigation_sec clear">
                <ul>
                <li><a href="pages/login.php">Sing In</a></li>

                <li><a href="pages/signup.php">Sign Up</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="#">Need Help?</a></li>
                <li><a href="pages/dev.php">DEVELOPER</a></li>
                </ul>
            </div>
        </div>

        <div class="body_main clear">
            <div class="body_sub clear">

                <div class="category_left clear">
                <ul>
                    <li><a href="#cat" class="active">CATEGORY</a></li>
                    <li><a href="pages/men_item.php">MEN'S FASHION</a></li>
                    <li><a href="pages/phone_item.php">PHONES & TABLETS</a></li>
                    <li><a href="pages/tv_item.php">TV, AUDIO & CAMERAS</a></li>
                    <li><a href="pages/computer_item.php">COMPUTING & GAMMING</a></li>
                    <li><a href="pages/appliances_item.php">APPLIANCES</a></li>
                    <li><a href="pages/home_item.php">HOME & LIVING</a></li>
                    <li><a href="pages/sports_item.php">SPORTS & TRAVEL</a></li>
                    <li><a href="pages/baby_item.php">BABY , KIDS & TOYS</a></li>

                </ul>
                </div>

                <div class="banner clear">
                    <div id='slides'>
                        <img src="images/banner1.jpg" alt="Not Found">
                        <img src="images/banner2.jpg" alt="Not Found">
                        <img src="images/banner3.jpg" alt="Not Found">
                        <img src="images/banner4.jpg" alt="Not Found">


                    </div>
                </div>

                <div class="container clear">
                    <div class="container_menu clear">
                        <ul>
                            <li><a href="index.php" class="active">All Products</a></li>
                            <li><a href="index.php">Popular Products</a></li>
                            <li><a href="pages/men_item.php">Men's Products</a></li>
                            <li><a href="pages/phone_item.php">Smart Electronics</a></li>
                        </ul>
                    </div>

                    <div class="box clear" id="box_1">
                        <div class="box_item_pic clear" >

                            <img src="images/1.1.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Men's Jeans<hr>
                                <h4>Blue Denim Jeans Pant<br>৳ 1,105.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>
                    <div class="box clear" id="box_2">
                        <div class="box_item_pic clear" >

                            <img src="images/1.2.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Men's Jeans<hr>
                                <h4>Blue Denim Jeans Pant<br>৳ 1,105.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>


                    <div class="box clear" id="box_3">
                        <div class="box_item_pic clear" >

                            <img src="images/1.5.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Men's Shirt<hr>
                                <h4>Cotton Formal Long Shirt - Steel Blue<br>৳ 1,105.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>

                    <div class="box clear" id="box_4">
                        <div class="box_item_pic clear" >

                            <img src="images/1.7.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Men's Shirt<hr>
                                <h4>Cotton Formal Long Shirt - Dark Blue<br>৳ 1,105.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>

                    <div class="box clear" id="box_5">
                        <div class="box_item_pic clear" >

                            <img src="images/1.8.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Laptops<hr>
                                <h4>Asus X441NA-N3060-Dual Core-4GB RAM-500GB HDD... <br>৳ 20,500.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>

                    <div class="box clear" id="box_6">
                        <div class="box_item_pic clear" >

                            <img src="images/1.9.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Laptops<hr>
                                <h4>Dell XPS 139360-7th Gen Core i7-8GB RAM-256GB SSD...<br>৳ 136,500.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>
                    <div class="box clear" id="box_7">
                        <div class="box_item_pic clear" >

                            <img src="images/1.12.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Smart Phones<hr>
                                <h4>iPhone 6s Plus<br>৳ 81,000.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>
                    <div class="box clear" id="box_8">
                        <div class="box_item_pic clear" >

                            <img src="images/1.13.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Smart Phones<hr>
                                <h4>Nokia 6<br>৳ 24,800.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>
                    <div class="box clear" id="box_9">
                        <div class="box_item_pic clear" >

                            <img src="images/1.14.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Smart Phones<hr>
                                <h4>Symphony P6<br>৳ 6,800.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>
                    <div class="box clear" id="box_10">
                        <div class="box_item_pic clear" >

                            <img src="images/1.15.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Smart Phones<hr>
                                <h4>Symphony P6 PRO<br>৳ 8,400.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>
                    <div class="box clear" id="box_11">
                        <div class="box_item_pic clear" >

                            <img src="images/1.16.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Sports<hr>
                                <h4>Fitbit Surge Fitness Tracker<br>৳ 19,800.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>
                    <div class="box clear" id="box_12">
                        <div class="box_item_pic clear" >

                            <img src="images/1.17.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Sports<hr>
                                <h4>Fitbit Flex 2 Fitness Tracker<br>৳ 7,800.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>
                    <div class="box clear" id="box_13">
                        <div class="box_item_pic clear" >

                            <img src="images/1.18.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Water Purifier<hr>
                                <h4>Kent Prime Water Purifier 9L<br>৳ 22,300.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>
                    <div class="box clear" id="box_14">
                        <div class="box_item_pic clear" >

                            <img src="images/1.19.jpg" alt="Not Found"/>

                        </div>
                        <div class="box_item_details clear" >
                            <div class="box_item_details_div clear">
                                Water Purifier<hr>
                                <h4>Kent Excell Plus Water Purifier 7L- White<br>৳ 19,500.00</h4>
                            </div>
                            <a href="#">Add To Cart</a>
                            <a href="#">Details</a>

                        </div>
                    </div>




                </div>
            </div>



        <div class="footer"></div>
        </div>



        <?php
        // put your code here
        ?>
    </body>
</html>
