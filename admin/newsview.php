<?php
include "adminheader.php";

?>

<div class="col-md-8">
<h1 class="view_blog">View News</h1>
<table class="table">

<tr>
<th>S.no</th>        
<th>image</th>
<th>date</th>
<th>title</th>
<th>message</th>
<th>delete</th>
<th>update</th>
</tr>

<?php
include "../connection.php";
$c=1;
$view="select * from addnews";
$res=mysqli_query($con,$view);
while($v=mysqli_fetch_array($res)){
    echo"
    <tr>
    <td>".$c."</td>
    <td><img src='../uploads/".$v['image']."' height='100px' width='100px'</td>
    <td>".$v['date']."</td>
    <td>".$v['title']."</td>
    <td>".$v['message']."</td>
    <td><form action='' method='post'>
     <input type='hidden' name='id' value='".$v['id']."'/>
    <button class='btn' name='btndelete'><i class='fa-solid fa-trash'></i></button>
    </form></td>
     <td><form action='editnews.php' method='post'>
     <input type='hidden' name='id' value='".$v['id']."'/>
    <button class='btn' name='btnedit'><i class='fa-solid fa-edit'></i></button>
    </form></td>
    </tr>";
    $c++;

}
?>
<?php
if(isset($_POST['btndelete']))
{
    $id=$_POST['id'];
    $q="delete from addnews where id='$id'";
    if(mysqli_query($con,$q))
    {
        echo "<script>alert('Deleted');
        window.location.href='newsview.php';
        </script>";
    }
    else{
        echo mysqli_error($con);
    }

} 
?>

</table>
</div>