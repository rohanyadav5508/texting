<?php
include "header.php";
require('config.php');
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <img src="envir_img/leaf1.jpg" height="500px"; width="500px;"/>
</div>
        <div class="col-md-7">
            <h2>DONATE</h2> 
            <form method="post" action="<?= $_SERVER['PHP_SELF']; ?> ">
                <div class="row">
                <div class="col"><input type="text" placeholder="First Name"class="form-control" name="firstname"/>
        </div>
        <br/>
        <div class="col">
                <input type="text" placeholder="last Name" class="form-control"name="lastname"/>
        </div> 
        </div> 
        <br/>     
                <input type="text" placeholder="Address" class="form-control"name="address"/></br>
                <input type="number" placeholder="Phone Number" class="form-control" name="number"/>
        <br/>
        <div class="row">
            <div class="col">
        <input type="mail" placeholder="Email" class="form-control"name="email"/>
        </div><br/>
        <div class="col">
            <input type="text" placeholder="Enter city" class="form-control" name="city"/>

    </div>
    </div>    
    <br/>
            <div class="row">
                <div class="col">
                    <select id="country" class="form-control" name="state">
                    <option value="">Selcet State</option>
                        <option value="pn">punjab</option>
                        <option value="hr">haryana</option>
                        <option value="up">up</option>
                        <option value="dl">delhi</option>

                            </select>
                </div><br/>

               <div class="col">
                <input type="text" placeholder="Enter country" class="form-control"name="country"/>
</div>
</div> 
<br/>
               <div class="row">
                <div class="col">
                    <input type="number" placeholder="Pin code" class="form-control" name="pincode"/>
</div>
<br/>
                <div class="input-field col">
                <i class="fa-solid fa-indian-rupee-sign"></i>
                    <input type="number" placeholder="Enter Amount" class="form-control input-field "  name="amount" />
                    
</div>
</div>
<br/>
<textarea row="5" placeholder="message" class="form-control" name="message"></textarea><br/>
<button class="form-control btn bg-danger" name="dontebtn">Donate</button>

</div>

</div>



<?php
include "connection.php";
?>
<?php
if(isset($_POST['dontebtn'])){
    $firstname=mysqli_real_escape_string($con,$_POST['firstname']);
    $lastname=mysqli_real_escape_string($con,$_POST['lastname']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $number=mysqli_real_escape_string($con,$_POST['number']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $state=mysqli_real_escape_string($con,$_POST['state']);
    $country=mysqli_real_escape_string($con,$_POST['country']);
    $pincode=mysqli_real_escape_string($con,$_POST['pincode']);
    $amount=mysqli_real_escape_string($con,$_POST['amount']);
    $message=mysqli_real_escape_string($con,$_POST['message']);
    $insrt="insert into donate(firstname,lastname,address,number,email,city,state,country,pincode,amount,message)VALUE ('$firstname','$lastname','$address','$number','$email','$city','$state','$country','$pincode','$amount','$message') ";
    if (mysqli_query($con, $insrt)) {
        $order_id=mysqli_insert_id($con);
        
        $api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => $order_id,
    'amount'          => $_POST['amount'] * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;
$_SESSION['actual_amount']=$_POST['amount']*100;
$_SESSION['orderid']=$order_id;


        echo "<script>
        window.location.href='pay1.php';
        </script>";
    } else {
        echo mysqli_error($con);
    }
}
?>

</form>


<button id="rzp-button1">Pay</button>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
    function pay_now(){
      
          //get the input from the form
          //var name = $("#payee_name").val();
          var amount = $("#amount").val();
          var actual_amount = amount*100;
          //var description = $('#description').val();
          //var actual_amount = amount;
          var options = {
            "key": "rzp_test_s4s4AjHYMWSyeI", // Enter the Key ID generated from the Dashboard
            "amount": '5000', // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Mojouri",
            "description": "Payment to Mojouri",
            "image": "razorpay.png",
            "order_id": 'ord_23746', //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function (response){
                console.log(response);
                //alert(response);
                $.ajax({
 
                    url: 'process_payment.php',
                    'type': 'POST',
                    'data': {'payment_id':response.razorpay_payment_id,'amount':actual_amount,'name':name},
                    success:function(data){
                        console.log(data);
                       // alert(data);
                      window.location.href = 'thank_you.php';
                    }
 
                });
                //alert(response.razorpay_payment_id);
                //alert(response.razorpay_order_id);
                //alert(response.razorpay_signature)
            },
             
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function (response){
                alert(response.error.code);
                alert(response.error.description);
                alert(response.error.source);
                alert(response.error.step);
                alert(response.error.reason);
                alert(response.error.metadata.order_id);
                alert(response.error.metadata.payment_id);
        });
        document.getElementById('rzp-button1').onclick = function(e){
            rzp1.open();
            e.preventDefault();
        }
    }
</script>
<?php
include "footer.php"
?>