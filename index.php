<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/icon.png" />
        <title>PhoneShop</title>
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
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>PhoneShop - telefonat e fundit</h1>
                       <p>Gjeni telefonat e firmave më të mëdha.</p>
                       <a href="products.php" class="btn btn-danger">Blej Tani</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products-apple.php">
                                <img src="img/Apple/apple-wp.jpg" width="1920" height="1080" alt="Iphone">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Iphone</p>
                                        <p>Modelet e fundit të telefonave nga Apple.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products-samsung.php">
                               <img src="img/Samsung/samsung-wp.jpg" width="1920" height="1080" alt="Samsung Galaxy">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Samsung Galaxy</p>
                                    <p>Modelet e fundit të telefonave nga Samsung.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products-xiaomi.php">
                               <img src="img/Xiaomi/xiaomi-wp.jpg" alt="Xiaomi">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Xiaomi</p>
                                   <p>Modelet e fundit të telefonave nga Xiaomi.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Lifestyle Store. All Rights Reserved. | Contact Us: +383 999 999</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>