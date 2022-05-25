<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand">Ballina</a>
                       <a href="products.php" class="navbar-brand">Të gjitha produktet</a>
                       <a href="apple-page.php" class="navbar-brand">Apple</a>
                       <a href="samsung-page.php" class="navbar-brand">Samsung</a>
                       <a href="xiaomi-page.php" class="navbar-brand">Xiaomi</a>
                       <a href="https://localhost:3001/" class="navbar-brand">Video Call</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shporta</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Përditëso</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Dil</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Regjistrohu</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Kyçu</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>