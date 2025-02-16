<?php
include "header.php";
include "connection.php";
?>
    <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
                    <div class="about_img">
                     <h1 class="about_env">Causes</h1>
                        <h5 class="help_us">help today because tomorrow you may be the one who needs more helpings
                        </h5>
                        <div class=" ol_about d-flex">
                      <a href="index.php" class="home_about"><span>Home</span></a>
                      <a href="causes.php" class="pages_about"><span>Causes</span></a>
                        <a href="gallery.php" class="about_about"><span >Gallery</span></a>
                        </div>
                     
                </div>  
                </div>
            </div> 
</div>
 <div class="container">
    <h4 class="recent"data-aos="fade-down-right" >RECENT CAUSES</h4>
        <h1 class="needs" data-aos="fade-down-left">The environment needs our protection</h1>
        <p class="lorem11 pt-3" data-aos="fade-zoom-in"
     data-aos-easing="ease-in-back"
     data-aos-delay="300"
     data-aos-offset="0">By using public transport, planting a tree, using natural products, reducing
             meat consumption,<br/> avoiding single-use plastics, conserving water, and educating your child
            </p>
    
           

                <div class="row">
                <?php


$view="select * from addblog";
$res=mysqli_query($con,$view);
while($v=mysqli_fetch_array($res)){
    echo"
    <div class='col-md-3'>
    <a href='causesdetail.php?id=".$v['id']."' class='text-decoration-none text-dark' >
                       
                        <img src='uploads/".$v['image']."' height='290px' width='270px'data-aos='flip-left'
     data-aos-easing='ease-out-cubic'
     data-aos-duration='2000' class='images'/>
                         <div class='first4' data-aos='flip-right'
     data-aos-easing='ease-out-cubic'
     data-aos-duration='2000'>
                            <p class='first2'>".$v['title']."</p>
                            <h6 class='date1'>".$v['date']."</h6>
                                <p class='today'> ".substr($v['massage'],0,100)."...   
                                </p>
                             
                            <button type='btn' class='read2'>read more</button>
                            </a>
                        </div>
                    </div>
    "; 
}
?>
        </div>    
            
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init();
</script>
<?php
include "footer.php";
?>
