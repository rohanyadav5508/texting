<?php
include "../connection.php";
?>

<html>
    <head>
        <title>adminlogin</title>
        <link href="../index.css" rel="stylesheet">
        <link href="../css/bootstrap-grid.min.css" rel="stylesheet"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet"/>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     </head>
     <body style="background-color:black;">
            
        <div class="conartiner-fluid userpanel">
            <div class="row">
            <h1 class="user_panel">Admin Panel</h1>
                <div class="col-md-7 ">
                    <form method="post" action="">
                        <input type="text" placeholder="Enter Username" class="form-control "style="font-weight:600;" name="username"/><br/>
                        <input type="password" placeholder="Enter Password" class="form-control "style="font-weight:600;"  name="password"/><br/>
                        <button class="form-control btn_user" style="font-weight:600;background-color:chocolate;font-family:jost,sans-sarif;" name="login">LOG IN</button>
                    </form>
                </div>
            </div>
        </div>
     </body> 
    </html>
    <?php

    if(isset($_POST['login'])){
        $username=mysqli_escape_string($con,$_POST['username']);
        $password=mysqli_escape_string($con,$_POST['password']);
        $sel="select * from adminlogin where username='$username' and password='$password'";
        $run=mysqli_query($con,$sel);
        if($run){
            if(mysqli_num_rows($run)>0)
            {
                echo"<script>window.location.href='dashboard.php'</script>";
            }
            else{
                echo"invalid detail";
            }
        }
            else
            {
                echo "error".mysqli_error($con);

            }
        }
        

    ?>   