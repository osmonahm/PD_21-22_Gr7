<?php
 //require('check_if_added.php');
?>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>PhoneShop - Xioami</title>
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
                    <img src="img/Xiaomi/Xiaomi 12 Pro 5G.jpg" alt="Xiaomi 12 Pro 5G">
                </a>
                <center>
                    <div class="caption">
                        <h3>Xiaomi 12 Pro 5G</h3>
                        <p>Çmimi: 900.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(17)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Xiaomi/Xiaomi 12 5G.jpg" alt="Xiaomi 12 5G">
                </a>
                <center>
                    <div class="caption">
                        <h3>Xiaomi 12 5G</h3>
                        <p>Çmimi: 981.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(18)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Xiaomi/Xiaomi Redmi 10.jpg" alt="Xiaomi Redmi 10">
                </a>
                <center>
                    <div class="caption">
                        <h3>Xiaomi Redmi 10</h3>
                        <p>Çmimi: 224.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(19)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Xiaomi/Xiaomi 11 Lite 5G NE.jpg" alt="Xiaomi 11 Lite 5G NE">
                </a>
                <center>
                    <div class="caption">
                        <h3>Xiaomi 11 Lite 5G NE</h3>
                        <p>Çmimi: 467.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(20)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Xiaomi/Xiaomi Mi 9.jpg" alt="Xiaomi Mi 9">
                </a>
                <center>
                    <div class="caption">
                        <h3>Xiaomi Mi 9</h3>
                        <p>Çmimi: 485.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(21)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Xiaomi/Xiaomi 12X 5G.jpg" alt="Xiaomi 12X 5G">
                </a>
                <center>
                    <div class="caption">
                        <h3>Xiaomi 12X 5G</h3>
                        <p>Çmimi: 325.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(22)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Xiaomi/Xiaomi Redmi Note 8 Pro.jpg" alt="Xiaomi Redmi Note 8 Pro">
                </a>
                <center>
                    <div class="caption">
                        <h3>Xiaomi Redmi Note 8 Pro</h3>
                        <p>Çmimi: 344.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(23)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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
                    <img src="img/Xiaomi/Xiaomi Redmi Note 11 Pro.jpg" alt="Xiaomi Redmi Note 11 Pro">
                </a>
                <center>
                    <div class="caption">
                        <h3>Xiaomi Redmi Note 11 Pro</h3>
                        <p>Çmimi: 385.50 €</p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                            <?php
                            }
                            else{
                                if(check_if_added_to_cart(24)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=9" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
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