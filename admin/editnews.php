<?php
include "../connection.php";
include "adminheader.php";
$id = mysqli_escape_string($con, $_POST['id']);
$query = "SELECT * FROM addnews WHERE id='$id'";
$result = mysqli_query($con, $query);
$v = mysqli_fetch_array($result);
?>

<div class="col-md-8">
    <h1 class="add_blog">Update News</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <input type="hidden" name="oldimage" value="<?php echo $v['image']; ?>"/>
        <input type="file" class="form-control border-dark" name="image"/><br/>
        <div class="row">
            <div class="col">
                <input type="date" class="form-control border-dark" name="date" value="<?php echo $v['date']; ?>"/><br>
            </div>
            <div class="col">
                <input type="text" class="form-control border-dark" name="title" value="<?php echo $v['title']; ?>"/><br>
            </div>
        </div>
        <textarea class="form-control border-dark" name="message"><?php echo $v['message']; ?></textarea><br/>
        <button class="form-control border-dark" name="updatebt">Submit Now</button>
    </form>
</div>

<?php
if (isset($_POST['updatebt'])) {
    $image = $_POST['oldimage'];
    if ($_FILES['image']['name'] != "") {
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp, '../uploads/' . $image);
    }

    $date = mysqli_escape_string($con, $_POST['date']);
    $title = mysqli_escape_string($con, $_POST['title']);
    $message = mysqli_escape_string($con, $_POST['message']);
    
    $ins = "UPDATE addnews SET image='$image', date='$date', title='$title', message='$message' WHERE id='$id'";
    
    if (mysqli_query($con, $ins)) {
        echo "<script>alert('Your form is updated'); window.location.href='newsview.php';</script>";
    } else {
        echo mysqli_error($con);
    }
}
?>
