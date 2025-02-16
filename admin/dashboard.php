<?php

 include "adminheader.php"; 
include "../connection.php";
?>

    <div class="col-md-8 ">
    <h1 style="text-align:center;background-color:orange;padding:20px;">Admin dashboard</h1>
   
            <div class="row pt-5">
                <div class="col-md-4">
                    <div class="col  bg-success text-center p-3 text-align">
                        <?php
                        $res=mysqli_query($con,"select count(*) from addblog");
                        $ft=mysqli_fetch_array($res);
                        echo"<h2>".$ft[0]."<h2/>";
                        ?>
                         <hr/>
                        <h5>Blogs</h5>
                       
</div>
</div>
                    <div class="col-md-4">
                    <div class="col bg-danger text-center p-3 text-align">
                        <?php
                        $res=mysqli_query($con,"select count(*) from addimg");
                        $ft=mysqli_fetch_array($res);
                        echo"<h2>".$ft[0]."<h2/>";
                        ?>
                         <hr/>
                        <h5>Gallery</h5>
                       
</div>
</div>
</div>
            <div class="row pt-5">
            <div class="col-md-4">
                    <div class="col  bg-success text-center p-3 text-align">
                        <?php
                        $res=mysqli_query($con,"select count(*) from events");
                        $ft=mysqli_fetch_array($res);
                        echo"<h2>".$ft[0]."<h2/>";
                        ?>
                        <hr/>
                        <h5>Events</h5>
                        

</div>
</div>
            <div class="col-md-4">
                    <div class="col  bg-danger text-center p-3 text-align">
                        <?php
                        $res=mysqli_query($con,"select count(*) from addnews");
                        $ft=mysqli_fetch_array($res);
                        echo"<h2>".$ft[0]."<h2/>";
                        ?>
                          <hr style="color:white";/>

                        <h5 style="color:white";>News</h5>
                      
</div>
</div>
    <div class="row pt-5 ps-5">
            <div class="col-md-8">
                    <div class="col  dash">
                        <?php
                        $res=mysqli_query($con,"select count(*) from contact");
                        $ft=mysqli_fetch_array($res);
                        echo"<h2>".$ft[0]."<h2/>";
                        ?>
                         <hr/>
                        <h5>Equiry</h5>
                       

</div>
</div>
</div>
</body>
</html>
