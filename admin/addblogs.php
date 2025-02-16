<?php
include "adminheader.php"; 

?>

        <div class="col-md-8">
    <h1 class="add_blog">Add blogs</h1>
    <form action="" method="post" enctype="multipart/form-data">
   
<input type="file"  class="form-control border-dark" name="image" /><br>

   <div class="row">
    <div class="col">
<input type="date" placeholder="mm/dd/yyyy" class="form-control border-dark"name="date"/><br>
</div>
<div class="col">
<input type="text" placeholder="title" class="form-control border-dark"name="title"/><br>
</div>
</div>
    <textarea placeholder="massage" row="1" class="form-control border-dark" 
    name="massage"></textarea>
   
 
    

    
   
    
</br>
   
    
<button class="form-control border-dark "  name="sendbtn">Submit Now</button>
       
    </div>
    </form>


    </div>
</div>


 </body>
 </html>
 <?php
 include "../connection.php";

 if(isset($_POST['sendbtn'])){
    $image=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmp,'../uploads/'.$image);
    
   
     $date=mysqli_escape_string($con,$_POST['date']);
    $title=mysqli_escape_string($con,$_POST['title']);
    $massage=mysqli_escape_string($con,$_POST['massage']);
    $inst="insert into addblog (image,date,title,massage) values('$image','$date','$title','$massage')";
    if(mysqli_query($con,$inst)){
        echo"<script>alert('your form is submitted')</script>";
    }
        else{
                echo mysqli_error($con);
        }
    }

 ?>

