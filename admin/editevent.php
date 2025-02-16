<?php
include "adminheader.php";
include "../connection.php";
$id=mysqli_escape_string($con,$_POST['id']);
$query="select * from events where id='$id'";
$result=mysqli_query($con,$query);
$v=mysqli_fetch_array($result);

?>
  <div class="col-md-8">
    <h1 class="add_blog">Update Events</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id ?>"/>
<input type="hidden" name="oldimage" value="<?php echo $v['image'] ?>"/>

<input type="text" placeholder="location" class="form-control border-dark" name="location" value="<?php echo $v['location'] ?>" /><br>

<input type="file" placeholder="images" class="form-control border-dark" name="image"  value="<?php echo $v['image'] ?>"/><br/>

   <div class="row">
    <div class="col"> 
<input type="date" placeholder="mm/dd/yyyy" class="form-control border-dark" name="date"  value="<?php echo $v['date'] ?>"/><br>
</div>
<div class="col">
<input type="text" placeholder="title" class="form-control border-dark" name="title"  value="<?php echo $v['title'] ?>"/><br>
</div>
</div>
    <textarea placeholder="message" row="1" class="form-control border-dark" 
    name="message"  value="<?php echo $v['message'] ?>"></textarea>   
    
</br>
   
    
<button class="form-control border-dark "  name="updatedbtn">Update</button>
       
    </div>
    </form>


    </div>
</div>


 </body>
 </html>
 <?php
 if(isset($_POST['updatedbtn'])){
    if($_FILES['image']['name']=="")
    {
        $image=$_POST['oldimage'];
    }
    else{
    $image=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmp,'../uploads/'.$image);
    }
   
    // $date=mysqli_escape_string($con,$_POST['date']);
    $location=mysqli_escape_string($con,$_POST['location']);
    $date=mysqli_escape_string($con,$_POST['date']);
    $title=mysqli_escape_string($con,$_POST['title']);
    $message=mysqli_escape_string($con,$_POST['message']);
    $inst="UPDATE events SET  image='$image',location='$location',date='$date',title='$title',message='$message' where id='$id'";
    if(mysqli_query($con,$inst)){
        echo"<script>alert('your form is updated');
        window.location.href='eventsview.php';
        </script>";
    }
        else{
                echo mysqli_error($con);
        }
    }
 