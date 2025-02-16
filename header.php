<?php
 session_start();
 include "connection.php";
?>

<html>
   
    <head>
        <title>enivronment</title>
        <link href="index.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap-grid.min.css" rel="stylesheet"/>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        

         <script>
           
        
        
$(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
    $(this).text(Math.ceil(now));
}
});
});

});  




         </script>


    </head>
    <body>
            

            <div class="container-fluid main_nav">
                <div class="row heading_1">
                    <div class="col-md-4">
                        <i class="fa-solid fa-envelope">&nbsp;&nbsp;</i><a href="#" class="example">Environs0007@gmail.com</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-phone"></i>&nbsp;&nbsp;+91 98889-89998
                       
                        </div>  
                        <div class="col-md-6">
                            <i class="fa-brands fa-facebook-f face"></i>
                            <i class="fa-brands fa-twitter twitt"></i>
                            <i class="fa-brands fa-instagram insta"></i>
                            <i class="fa-sharp fa-solid fa-p pa"></i>
                            <i class="fa-brands fa-linkedin-in linkdin"></i>
                           
                        </div>
                        <div class="col">
                        <a href="admin/adminlogin.php"><i class="fa-solid fa-user-tie ties"></i></a>
                        <a href="admin/adminlogin.php" target="blank" class="admin_panel">admin panel</a>
                        </div>   
                    </div>

      <!-- <div class="container-fluid box">  -->
        <div class="row env_head">
        <div class="col-md-3">
           <span> <img src="envir_img/earth.gif" class="earth_1"/>
                <h1 class="heading_env py-5">Enivorns</h1>
            </span>    
            </div>
                <div class="col-md-6">
                    <nav class="navbar1">
                        <nav class="navbar navbar-expand-lg navbar-light main_nav">
                           
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                              <div class="navbar-nav d-flex ">
                                <a class="nav-item " href="index.php">Home<span class="sr-only"></span></a>
                                <a class="nav-item   " href="about.php">About</a>
                                <a class="nav-item  " href="services.php">Service</a>
                                <a class="nav-item  "  href="blog.php">Blog</a>
                                <a class="nav-item  " href="causes.php">Causes</a>
                                <a class="nav-item  " href="eventfetch.php">Event</a>
                                <a class="nav-item  "  href="gallery.php">Gallery</a>

                                 <a class="nav-item  " href="contact.php"  >Contact</a>

                              </div>
                            </div>
                            
                          </nav>
                       
                </nav>
             </div>
             <div class="col-md-3">
             <a href="donate.php"><button class="button1">Donate now</button>
</a>
            </div>

        </div> 
    </div>
</div>

