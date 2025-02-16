
<?php
include "../connection.php";
include "adminheader.php";
?>
<div class="col-md-8">
                <h1 class="add_glry" data-acos="fade-right">Add Gallery</h1>
            <form method="post" action="" enctype="multipart/form-data">
                <input type="file" class="file_add" name="img"/><br/>
                <input type="text" placeholder="title" class="ps-4 title_img" name="title"/><br/>
                <button class="add_btn" name="addbtn">submit</button>



            </form>
</div>
        

</div>
</div>
        
    </body>
</html>
<?php


if(isset($_POST['addbtn'])){
    $img=$_FILES['img']['name'];
    $tmp=$_FILES['img']['tmp_name'];
    move_uploaded_file($tmp,'../uploads/'.$img);
    $title=mysqli_real_escape_string($con,$_POST['title']);
    $im="insert into addimg(img,title) values('$img','$title')";
    if(mysqli_query($con,$im)){
        echo"<script>alert('image uploaded successfully')</script>";
    }
    else{
        echo mysqli_error($con);

    }
}
?>

