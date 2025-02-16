<?php
include "header.php";
include "connection.php";
?>
<html>

    <body>
    <form action="" method="post"> 
        <div class="container box_contact">
            <div class="row">
                <div class="col-md-5 ps-5">
                    <h3 class="get_contact">Get in touch</h3>
                    <p class="pr_contact">The contact form is currently inactive. Get a functional<br/> and working contact form with Ajax & PHP in a few .<br/> Just copy and paste the files, add a little code and you're done. <span class="d_now">Download Now.</span></p>
                    <div class="row">
                        <div class="col">
                        <input type="text" placeholder="Your Name" class="form-control input1"  name="name"/>    
                        </div>
                        <div class="col">
                            <input type="email" placeholder="Your Email" class="form-control input1" name="email"/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col">
                            <input type="tel" placeholder="Your Phone" class="form-control input1" name="phonenumber"/>
                        </div>
                        <div class="col">
                            <input type="address" placeholder="Your Address" class="form-control input1" name="address"/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col">
                            <textarea placeholder="Your Massage" row="17"  col="15" class="form-control input2" name="message"> 
                        </textarea>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col">
                            <button class="form-control  btn_contact" style="background-color:#f8b864;" name="sendbtn">Submit</button>
                        </div>
                    </div>
                </div>

                <?php 
                if(isset($_POST['sendbtn']))
                {
                    $name=mysqli_real_escape_string($con,$_POST['name']);
                    $email=mysqli_real_escape_string($con,$_POST['email']);
                    $phonenumber=mysqli_real_escape_string($con,$_POST['phonenumber']);
                    $address=mysqli_real_escape_string($con,$_POST['address']);
                    $message=mysqli_real_escape_string($con,$_POST['message']);
                    $query="insert into contact(name,email,phonenumber,address,message) values('$name','$email','$phonenumber','$address','$message')";
                    if(mysqli_query($con,$query))
                    {
                        echo"<script>alert('your message is submitted')</script>";
                    }
                    else
                    {
                        echo mysqli_error($con);
                    }

                }
                ?>


                  <div class="col-md-6 mt-5">
                    <div class="row">
                        <div class="col col_contact">
                        <i class="fa-solid fa-location-pin pin1"></i>
                        <h3 class="add_contact" style="font-weight:600">Address</h3>
                        <p class="contact_add">123 street New<br/>&nbsp;York</p>
                        </div>
                  
                    <div class="col col_contact1">
                    <i class="fa-solid fa-envelope enevlope1"></i>
                    <h3 class="email_contact" style="font-weight:600">Mail Us</h3>
                    <p class="contact_add1">envir1@gmail.com</p>
                    </div>
                    <div class="col col_contact2">
                    <i class="fa-solid fa-phone phone2"></i>
                    <h3 class="tele_contact" style="font-weight:600">Telephone</h3>
                    <p class="contact_add2">+91 939393939</p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.8168730857615!2d74.95375757436409!3d30.2137737105302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732a37a147d93%3A0xef480ed6ce926c!2sAjit%20Rd%2C%20Bathinda%2C%20Punjab%20151001!5e0!3m2!1sen!2sin!4v1722840933426!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="pt-5"></iframe>
                    </div>
                  </div>  
            </div>
           
        </div>
        </div>
        </form>
        
        </body>
        <?php
        include "footer.php";
        ?>
</html>
