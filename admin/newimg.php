<?php
include "../connection.php";
 include "adminheader.php";
?>
<div class="col-md-8">
<h1 class="view_blog">Image View</h1>
<table class="table">

<tr>

<th>S.no</th>        
<th>image</th>
<th>title</th>
<th>Delete</th>
<th>edit</th>
</tr>

<?php

$c=1;
$views="select * from addimg";
$rest=mysqli_query($con,$views);
while($v=mysqli_fetch_array($rest)){
    echo"
    <tr>
    <td>".$c."</td>
    <td><img src='../uploads/".$v['img']."' height='100px' width='100px'/></td>
    
    <td>".$v['title']."</td>
   
   <td><form action='' method='post'>
     <input type='hidden' name='id' value='".$v['id']."'/>
    <button class='btn' name='btndelete'><i class='fa-solid fa-trash'></i></button>
    </form></td>
    <td><form action='editimage.php' method='post'>
     <input type='hidden' name='id' value='".$v['id']."'/>
    <button class='btn' name='btndedit'><i class='fa-solid fa-edit'></i></button>
    </form></td>
    </tr>";
    $c++;

}
?>
<?php
if(isset($_POST['btndelete']))
{
    $id=$_POST['id'];
    $q="delete from addimg where id='$id'";
    if(mysqli_query($con,$q))
    {
        echo "<script>alert('Deleted');
        window.location.href='viewimg.php';
        </script>";
    }
    else{
        echo mysqli_error($con);
    }

} 
?>

</table>
</div>