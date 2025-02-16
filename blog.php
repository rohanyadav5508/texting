<?php
include "header.php";
include "connection.php";
?>
<html>
    <head>
    <title>
        Blog
    </title>
    
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
                     <h1 class="about_env">Blogs</h1>
                        <h5 class="help_us">help today because tomorrow you may be the one who needs more helpings
                        </h5>
                      <a href="index.php" class="home_about"><span>Home</span></a>
                      <a href="blog.php" class="pages_about"><span >Blog</span></a>
                        <a href="about.php" class="about_about"><span >About us</span></a>
          </div>                 
        </div>   
    </div>
      <div class="container">
             <div class="row ps-4 pt-5"> 
            <h5 class="latest">LATEST NEWS</h5>
            <h1 class="help_today">Help today because tomorrow you may be <br/>
                the one who needs more helping!
            </h1>
</div>
        </div>
          <div class="container-fluid">  
        <div class="row ps-4 pe-3"> 
<?php 


$view="select * from addnews";
$res=mysqli_query($con,$view);
while($v=mysqli_fetch_array($res)){
    echo"
     
         <div class='col-md-3'>
         <a href='newsdetail.php?id=".$v['id']."' class='text-decoration-none text-dark' >
         <div class='card cardscol'>
         <div class='card-img-top'>
                <img src='uploads/".$v['image']."' height='200px' width='300px' class='images' />
                        </div>
                         <div class='card-body'>
                            <span class='dec1'>".$v['date']."</span>
                        <p class='topic1'>".$v['title']."</p>
                        <p class='lorem13'>".substr($v['message'],0,100)."....</p>
                           <button type='btn'  class='read_1'>Read More</button>  
                        </div>   
                        </a>     
                    </div>
                    </div>
";
}
?>
 </div>
</div>
<?php
  
   include "footer.php";
?>
  </body>
  </html>        
      