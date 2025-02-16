
<?php
//connect the database
session_start();
include 'connection.php';
 
//get the payment details from payment page
 
if(isset($_POST['payment_id']) && isset($_POST['amount']) && isset($_POST['name']))
{
    $paymentId = $_POST['payment_id'];
    $amount = $_POST['amount'];
    $name = $_POST['name'];
 
    //insert data into database
    // $sql="insert into razorpay_payment(name,amount,payment_status,payment_id) values ('$name','$amount','paid','$paymentId')";
    // mysqli_query($con,$sql);
    
    $q=mysqli_query($con,"update donation set payment_method='done' where id='".$_SESSION['orderid']."'");
}
?>