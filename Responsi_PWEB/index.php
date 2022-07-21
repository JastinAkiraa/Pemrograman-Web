<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>TOKO ngab</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- CSS -->
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
                       <h1>TOKO MAS BRO .</h1>
                       <p>Semua Brand disini dijamin original brooooo.</p>
                       <p>Dilarang Ngeluh!</p>
                       <a href="products.php" class="btn btn-danger">Beli Sekarang</a>
                       <h3>Follow Me</h3>
            <ul>
            <li><a href="https://www.facebook.com/jastin.akirareswara/"><i class="fa fa-facebook">&nbsp;Facebook</i></a></li><br>
            <li><a href="https://www.instagram.com/jastin_a_r/"><i class="fa fa-instagram">&nbsp;Instagram</i></a></li><br>
            <li><a href="https://twitter.com/JastinAkira"><i class="fa fa-twitter">&nbsp;Twitter</i></a></li><br>
            </ul>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/camera.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Camera</p>
                                        <p>Klik Untuk memilih Camera kamu ygy.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/watch.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Jam tangan</p>
                                    <p>Klik untuk memilih Jam tangan Kamu ygy.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/shirt.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Kemeja</p>
                                   <p>Klik untuk memilih Kemeja kamu ygy.</p>
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
                <p>copyright &copy;2022 codeOpacity. designed by<span>Justin Ar</span></p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>