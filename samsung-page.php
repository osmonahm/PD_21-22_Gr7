<?php 
session_start();
require 'check_if_added.php';
require('header.php');
?>

<div style ="height: 200px;"; id="bannerImage">
<h1>PhoneShop - telefonat e fundit</h1>
    <p>Koleksioni jonë i Samsung.</p>

</div>

<?php require('products-samsung.php'); ?>

<br><br><br><br>
<footer class="footer"> 
    <div class="container">
    <center>
        <p>Copyright &copy PhoneShop. All Rights Reserved. | Contact Us: +383 999 999</p>
    </center>
    </div>
</footer>