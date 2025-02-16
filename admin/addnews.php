<?php
include "../connection.php";
include "adminheader.php";
?>

<div class="col-md-8">
    <h1 class="add_blog">Add News</h1>
    <form action="" method="post" enctype="multipart/form-data">
    

<input type="file" placeholder="images" class="form-control border-dark" name="image"/><br/>
   <div class="row">
    <div class="col"> 
<input type="date" placeholder="mm/dd/yyyy" class="form-control border-dark" name="date"/><br>
</div>
<div class="col">
<input type="text" placeholder="title" class="form-control border-dark" name="title"/><br>
</div>
</div>
    <textarea placeholder="message" row="1" class="form-control border-dark" 
    name="message"></textarea>   
    
</br>
   
    
<button class="form-control border-dark "  name="sendbtn">Submit Now</button>
       
    </div>
    </form>


    </div>
</div>


 </body>
 </html>
 <?php
 if(isset($_POST['sendbtn'])){
    $image=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmp,'../uploads/'.$image);
   
    // $date=mysqli_escape_string($con,$_POST['date']);
    
    $date=mysqli_escape_string($con,$_POST['date']);
    $title=mysqli_escape_string($con,$_POST['title']);
    $message=mysqli_escape_string($con,$_POST['message']);
    $inst="insert into addnews (image,date,title,message) values('$image','$date','$title','$message')";
    if(mysqli_query($con,$inst)){
        echo"<script>alert('your form is submitted')</script>";
    }
        else{
                echo mysqli_error($con);
        }
    }