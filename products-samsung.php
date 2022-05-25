<?php
 //require('check_if_added.php');
    require('connection.php');
?>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>PhoneShop - Samsung</title>
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
        array("img/Samsung/A23.jpg", "Samsung Galaxy A23", 232.00, 1),
        array("img/Samsung/S22.jpg", "Samsung Galaxy S22", 1638.50, 2),
        array("img/Samsung/S21.jpg", "Samsung Galaxy S21", 929.50, 3),
        array("img/Samsung/A32.jpg", "Samsung Galaxy A32", 299.50, 4),
        array("img/Samsung/M22.jpg", "Samsung Galaxy M22", 296.50, 5),
        array("img/Samsung/A23.jpg", "Samsung Galaxy A23", 232.50, 6),
        array("img/Samsung/A53.jpg", "Samsung Galaxy A53", 479.50, 7),
        array("img/Samsung/A13.jpg", "Samsung Galaxy A13", 219.50, 8)
        );

        foreach ($products as $value) {
            //$query = "insert ignore into items(id, itemName, price) values ('$value[3]', '$value[1]', '$value[2]')";
            $query = "insert ignore into items(itemName, price) values ('$value[1]', '$value[2]')";
            //die($user_registration_query);
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            //echo "Item successfully registered";
        }

        foreach($products as $value): ?>

            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                    <img src= <?= $value[0] ?>  alt=<?= $value[1] ?>>
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