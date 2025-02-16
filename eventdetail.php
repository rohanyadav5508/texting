<html>
<head>
<link href="index.css" rel="stylesheet">
        <link href="css/bootstrap-grid.min.css" rel="stylesheet"/>
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>


</html>

<?php

include "connection.php";

?>

<div class="container">
<div class="row ps-5">
                <?php

$id=mysqli_escape_string($con,$_GET['id']);
$view="select * from events";
$res=mysqli_query($con,$view);
while($v=mysqli_fetch_array($res)){
    echo"
     
        <div class='col-md-4'>
   
                    
                        <img src='uploads/".$v['image']."' height='250px' width='350px' class='images'/>
                          <div class='box7'>
                          <div class='d-flex'>
                          <i class='fa-solid fa-location-dot location_event'></i>
                        <p class='grand_mahal'>".$v['location']."</p>
                            <i class='fa-sharp fa-regular fa-calendar-days calender_event'></i><span class='date1 '>".$v['date']."</span>
                           </div>
                            <p class='p_build'>".$v['title']."</p>
                            
                                <p class='lorem12'> ".$v['message'].".....   
                                </p>
                             
                            <button type='btn' class='read_more1'>read more</button>
                        </div>
                    </div>
               
                   
                 
    ";
    

   
}
?>
</div>
</div>


