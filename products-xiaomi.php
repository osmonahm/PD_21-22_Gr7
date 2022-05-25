<?php
 //require('check_if_added.php');
     require('connection.php');
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
        <?php

        $products = array(
        array("img/Xiaomi/Xiaomi 12 Pro 5G.jpg", "Xiaomi 12 Pro 5G", 900.50, 17),
		array("img/Xiaomi/Xiaomi 12 5G.jpg", "Xiaomi 12 5G", 981.50, 18),
		array("img/Xiaomi/Xiaomi Redmi 10.jpg", "Xiaomi Redmi 10", 224.50, 19),
		array("img/Xiaomi/Xiaomi 11 Lite 5G NE.jpg", "Xiaomi 11 Lite 5G NE", 467.50, 20),
		array("img/Xiaomi/Xiaomi Mi 9.jpg", "Xiaomi Mi 9", 485.50, 21),
		array("img/Xiaomi/Xiaomi 12X 5G.jpg", "Xiaomi 12X 5G", 325.50, 22),
		array("img/Xiaomi/Xiaomi Redmi Note 8 Pro.jpg", "Xiaomi Redmi Note 8 Pro", 344.50, 23),
		array("img/Xiaomi/Xiaomi Redmi Note 11 Pro.jpg", "Xiaomi Redmi Note 11 Pro", 385.50, 24)
        );

        foreach ($products as $value) {
            $query = "insert ignore into items(id, itemName, price) values ('$value[3]', '$value[1]', '$value[2]')";
            //die($user_registration_query);
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            //echo "Item successfully registered";
        }

        foreach($products as $value): ?>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                    <img src= <?= str_replace(" ", '%20', $value[0]); ?>  alt=<?= $value[1] ?>>
                    </a>
                    <center>
                        <div class="caption">
                            <h3><?= $value[1]; ?></h3>
                            <p>Çmimi: <?= $value[2]; ?> €</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Blej Tani</a></p>
                                <?php
                                }
                                else{
                                    if(check_if_added_to_cart($value[3])){
                                        echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                    }else{
                                        ?>
                                        <a href=<?= "cart_add.php?id=" . $value[3]; ?> class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Shto në shportë</a>
                                        <?php
                                    }
                                }
                                ?>
                        </div>
                    </center>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>