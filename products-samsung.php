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
                    <img src="img/Samsung/A23.jpg" alt="A23">
                </a>
                <center>
                    <div class="caption">
                        <h3>Samsung Galaxy A23</h3>
                        <p>Çmimi: 232.00 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(1)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Samsung/S22.jpg" alt="S22">
                </a>
                <center>
                    <div class="caption">
                        <h3>Samsung Galaxy S22</h3>
                        <p>Çmimi: 1638.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(2)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Samsung/S21.jpg" alt="S21">
                </a>
                <center>
                    <div class="caption">
                        <h3>Samsung Galaxy S21</h3>
                        <p>Çmimi: 929.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(3)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Samsung/A32.jpg" alt="A32">
                </a>
                <center>
                    <div class="caption">
                        <h3>Samsung Galaxy A32</h3>
                        <p>Çmimi: 299.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(4)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Samsung/M22.jpg" alt="M22">
                </a>
                <center>
                    <div class="caption">
                        <h3 style = "font-size: 22px;">Samsung Galaxy M22</h3>
                        <p>Çmimi: 296.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(5)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Samsung/A23.jpg" alt="A23">
                </a>
                <center>
                    <div class="caption">
                        <h3>Samsung Galaxy A23</h3>
                        <p>Çmimi: 232.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(6)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Samsung/A53.jpg" alt="A53">
                </a>
                <center>
                    <div class="caption">
                        <h3>Samsung Galaxy A53</h3>
                        <p>Çmimi: 479.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(7)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Samsung/A13.jpg" alt="Favre Leuba">
                </a>
                <center>
                    <div class="caption">
                        <h3>Samsung Galaxy A13</h3>
                        <p>Çmimi: 219.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(8)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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