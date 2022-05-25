<?php
 //require('check_if_added.php');
    require('connection.php');
?>
<head>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <title>PhoneShop - Apple</title>
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
        array("img/Apple/11.jpg", "Apple iPhone 11", 691.50, 9),
		array("img/Apple/12.jpg", "Apple iPhone 12", 882.50, 10),
		array("img/Apple/SE.jpg", "Apple iPhone SE", 617.50, 11),
		array("img/Apple/13.jpg", "Apple iPhone 13", 1200.50, 12),
		array("img/Apple/XR.jpg", "Apple iPhone XR", 979.00, 13),
		array("img/Apple/11pro.jpg", "Apple iPhone 11 Pro", 599.50, 14),
		array("img/Apple/7.jpg", "Apple iPhone 7", 344.00, 15),
		array("img/Apple/6splus.jpg", "Apple iPhone 6s Plus", 200.00, 16)
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
</div>