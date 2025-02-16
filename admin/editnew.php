<?php
include "../connection.php";
include "adminheader.php";
$id=mysqli_escape_string($con,$_POST['id']);
$edit="select * from addimg where id='$id'";
$result=mysqli_query($con,$edit);
$v=mysqli_fetch_array($result);

?>
<div class="col-md-8">
                <h1 class="add_glry" data-acos="fade-right">Update Gallery</h1>
            <form method="post" action="" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>"/>

                <input type="hidden" name="oldimage" value="<?php echo $v['image'] ?>"/>

                <input type="file" class="file_add" name="img" value="<?php echo $v['image'] ?>"><br/>

                <input type="text" placeholder="title" class="ps-4 title_img" name="title" value="<?php echo $v['title'] ?>"/><br/>

                <button class="add_btn" name="updtbtn">submit</button>



            </form>
</div>
        

</div>
</div>
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
$title=mysqli_real_escape_string($con,$_POST['title']);
$im="UPDATE addimg SET img='$image',title='$title' where id='$id'"; 
if(mysqli_query($con,$im)){
    echo"<script>alert('image uploaded successfully');
    window.location.href='viewimg.php';
    </script>";
}
else{
    echo mysqli_error($con);

}
}
?>
        
    </body>
</html>