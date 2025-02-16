<?php
include "adminheader.php";
include "../connection.php";
?>


<div class="col-md-8">
<h1 class="enquiry" >Enquiry</h1>
<table class="table">
    <tr>
        <th>s.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phonenumber</th>
        <th>Address</th>
        <th>Message</th>
        <th>delete</th>
    </tr>

    <?php
    $c=1;
    $query="select * from contact";
    $res=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($res)){
    echo"
    <tr>
    <td>".$c."</td>
    <td>".$row['name']."</td>
    <td>".$row['email']."</td>
    <td>".$row['phonenumber']."</td>
    <td>".$row['address']."</td>
    <td>".$row['message']."</td>
    <td><form method='post' action=''>
    <input type='hidden' name='id' value='".$row['id']."'/>
    <button class='btn' name='btndelete'><i class='fa-solid fa-trash'></i></button>
    </form></td>
    </tr>";
    $c++;
    }
    ?>
</table>

</div>
<?php
if(isset($_POST['btndelete']))
{
    $id=$_POST['id'];
    $q="delete from contact where id='$id'";
    if(mysqli_query($con,$q))
    {
        echo "<script>alert('Deleted');
        window.location.href='enquiry.php';
        </script>";
    }
    else{
        echo mysqli_error($con);
    }

} 
?>