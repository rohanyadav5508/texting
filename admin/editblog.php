<?php
include "adminheader.php";
include "../connection.php";
$id=mysqli_escape_string($con,$_POST['id']);
$query="select * from addblog where id='$id'";
$result=mysqli_query($con,$query);
$v=mysqli_fetch_array($result); 
?>

        <div class="col-md-8">
    <h1 class="add_blog">update blogs</h1>
    <form action="" method="post" enctype="multipart/form-data">
   
    <input type="hidden"  name="id" value="<?php echo $id ?>" />
    <input type="hidden" name="oldimage" value="<?php echo $v['image'] ?>" />
<input type="file"  class="form-control border-dark" name="image" /><br>

   <div class="row">
    <div class="col">
<input type="date" placeholder="mm/dd/yyyy" class="form-control border-dark"name="date" value="<?php echo $v['date']?>"/><br>
</div>
<div class="col">
<input type="text" placeholder="title" class="form-control border-dark" name="title" value="<?php echo $v['title']?>"/><br>
</div>
</div>
    <textarea placeholder="massage" row="1" class="form-control border-dark" 
    name="massage" value="<?php echo $v['massage']?>"></textarea>
   
 
    

    
   
    
</br>
   
    
<button class="form-control border-dark "  name="updatebtn">Update</button>
       
    </div>
    </form>


    </div>
</div>


 </body>
 </html>
 <?php
 



 if(isset($_POST['updatebtn'])){

    if($_FILES['image']['name']=="")
    {
        $image=$_POST['oldimage'];
    }
    else{
    $image=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
    move_uploaded_file($tmp,'../uploads/'.$image);
}
   
     $date=mysqli_escape_string($con,$_POST['date']);
    $title=mysqli_escape_string($con,$_POST['title']);
    $massage=mysqli_escape_string($con,$_POST['massage']);
    $update = "UPDATE addblog SET image='$image', date='$date', title='$title', massage='$massage' WHERE id='$id'";

    if(mysqli_query($con,$update)){
        echo"<script>alert('your form is updated');
        window.location.href='viewblog.php';
        </script>";
    }
        else{
                echo mysqli_error($con);
        }
    }

 ?>