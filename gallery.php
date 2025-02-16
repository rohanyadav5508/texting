<?php
include "header.php";
?>

<html>
    <head>
        <title>gallery</title>
        <link href="css/bootstrap-grid.min.css" rel="stylesheet"/>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
         <link href="index.css" rel="stylesheet">
    </head>
    <body>
         <div class="container-fluid gallery_head">
             <div class="row">
                <div class="col-md-12">
                    <div class="about_img">
                     <h1 class="about_env">Image Gallery</h1>
                        <h5 class="help_us">help today because tomorrow you may be the one who needs more helpings
                        </h5>
                      <a href="index.php" class="home_about"><span>Home</span></a>
                      <a href="gallery.php" class="pages_about"><span >Gallery</span></a>
                        <a href="about.php" class="about_about"><span >About us</span></a>
          </div>                 
        </div>   
    </div>
            
        <div class="row pt-5"> 
    <h4 class="work_gallery">our work</h4>
    <h1 class="welfare_gallery">We consider environment welfare</h1>
    <h5 class="prgh_gallery">Lorem ipsum dolor sit amet consectur adip sed eiusmod amet consectur adip sed eiusmod 
        tempor ipsum dolor<br/> sit consectur adip sed eiusmod amet consectur adip sed eiusmod tempor.
    </h5>
     <br/>
</div>
<br/><br/>
                <div class="container">
                <div class="row">
                <div class="col-md-4">

                <div class=" overlay_img">
  <img src="envir_img/gallery2.jpg" alt="Avatar" class="image">
 
  <div class="overlay">
    <div class="text">Beauty of Life</div>
  </div>
</div>

  <div class="overlay_img">
  <img src="envir_img/gallery3.jpg" alt="Avatar" class="image2">
 
  <div class="overlay">
    <div class="text">Beauty of Life</div>
</div>
 </div>
</div>



                <div class="col-md-4">
                <div class="overlay_img">
  <img src="envir_img/gallery1.jpg" alt="Avatar" class="image1">
 
  <div class="overlay">
    <div class="text">Beauty of Life</div>
</div>
    </div>
</div>

                <div class="col-md-4">
                <div class="overlay_img">
  <img src="envir_img/gallery4.jpg" alt="Avatar" class="image3">
 
  <div class="overlay">
    <div class="text">Beauty of Life</div>
</div>
    </div>
                    
                
                <div class="overlay_img">
  <img src="envir_img/gallery5.jpg" alt="Avatar" class="image4">
 
  <div class="overlay">
    <div class="text">Beauty of Life</div>
</div>
    </div>
                    
 </div>
 </div>
</div>     
         
         

     <?php
     include "footer.php";
     ?>

     
    </body>
</html>