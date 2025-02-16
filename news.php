<html>
    <head>
        <title>enivronment</title>
        <link href="index.css" rel="stylesheet">
        <link href="css/bootstrap-grid.min.css" rel="stylesheet"/>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
</head>
<?php

include "connection.php";

?>

<div class="container-fluid ">
<div class="row ps-4 pt-5 pe-5 pb-4">
                <?php


$view="select * from addnews";
$res=mysqli_query($con,$view);
while($v=mysqli_fetch_array($res)){
    echo"
     
         <div class='col-md-3'>
         <div class='card cardscol'>
         <div class='card-img-top'>
                        <img src='uploads/".$v['image']."' height='200px' width='300px' class='images'/>
                        </div>
                         <div class='card-body'>
                            <span class='dec1'>".$v['date']."</span>
                        <p class='topic1'>".$v['title']."</p>
                        <p class='lorem13'>".$v['message']."</p>
                           <button type='btn'  class='read_more1'>Read More</button>  
                        </div>        
                    </div>
                    </div>
";
}
?>
</div>
</div>
