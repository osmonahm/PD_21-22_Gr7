<?php 
 
?>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>Samsung</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- jquery library -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified javascript -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <a href="cart.php">
                    <img src="img/Apple/11.jpg" alt="11">
                </a>
                <center>
                    <div class="caption">
                        <h3>Apple iPhone 11</h3>
                        <p>Çmimi: 691.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(9)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
                    </div>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <a href="cart.php">
                    <img src="img/Apple/12.jpg" alt="12">
                </a>
                <center>
                    <div class="caption">
                        <h3>Apple iPhone 12</h3>
                        <p>Çmimi: 882.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(10)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=10" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    </div>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <a href="cart.php">
                    <img src="img/Apple/SE2020.jpg" alt="SE">
                </a>
                <center>
                    <div class="caption">
                        <h3>Apple iPhone SE</h3>
                        <p>Çmimi: 617.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(11)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=11" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    </div>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <a href="cart.php">
                    <img src="img/Apple/13.jpg" alt="13">
                </a>
                <center>
                    <div class="caption">
                        <h3>Apple iPhone 13</h3>
                        <p>Çmimi: 1200.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(12)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    </div>
                </center>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <a href="cart.php">
                    <img src="img/Apple/XR.jpg" alt="XR">
                </a>
                <center>
                    <div class="caption">
                        <h3>Apple iPhone XR</h3>
                        <p>Çmimi: 979.00 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(13)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=13" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    </div>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <a href="cart.php">
                    <img src="img/Apple/11pro.jpg" alt="11P">
                </a>
                <center>
                    <div class="caption">
                        <h3>Apple IPhone 11 Pro</h3>
                        <p>Çmimi: 599.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(14)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=14" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    </div>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <a href="cart.php">
                    <img src="img/Apple/7.jpg" alt="7">
                </a>
                <center>
                    <div class="caption">
                        <h3>Apple iPhone 7</h3>
                        <p>Çmimi: 344.00 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(15)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=15" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    </div>
                </center>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <a href="cart.php">
                    <img src="img/Apple/6splus.jpg" alt="6s">
                </a>
                <center>
                    <div class="caption">
                        <h3>Apple iPhone 6s Plus</h3>
                        <p>Çmimi: 200.00 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(16)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=16" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="footer"> 
    <div class="container">
    <center>
        <p>Copyright &copy Lifestyle Store. All Rights Reserved. | Contact Us: +383 999 999</p>
    </center>
    </div>
</footer>