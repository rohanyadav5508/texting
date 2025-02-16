<html>
    <head>
        <title>adds </title>
        <link href="../index.css" rel="stylesheet">
        <link href="../css/bootstrap-grid.min.css" rel="stylesheet"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet"/>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        </head>
 <body>
 <!-- <div class="container-fluid"> -->
    <!-- <div class="row">
        <div class="admin_main">
        <h1>DASHBOARD</h1>
    </div>
    </div> -->
    <!-- <div class="row">
        <div class="col-md-3 ps-5 pt-5">
            <div class="navbar-nav">
    <li class="nav-item"><a href="dashboard.php" class="nav-link">admin dashboard</a></li>
<li class="nav-item dropdown"><a href="" class="nav-link dropbtn">blogs</a>
</li>
<ul class="dropdown-content">
        <li><a href="addblogs.php" class="dropdown-item">add</a></li>
        <li><a href="" class="dropdown-item">view</a></li>
    </ul>
            
<li class="nav-item dropdown"><a href="" class="nav-link dropbtn">gallery</a>
</li>

<ul class="dropdown-content">
        <li><a href="addimage.php" class="dropdown-item">add</a></li>
        <li><a href="" class="dropdown-item">view</a></li>
    </ul>
            
<li class="nav-item dropdown"><a href="enquiry.php" class="nav-link dropbtn">enquery</a>
</li>

<li class="nav-item dropdown"><a href="appointment.php" class="nav-link dropbtn">appointment</a>
</li>

</ul>
<a href="index.php"><button class="btn ps-5 pe-5  bg-success text-light logout">log out</button></a>

        </div>
   
     -->
    <!-- <h2 style="text-align:center" class="dash_h1">Dashboard</h2>
     <div class="container-fluid">
    <div class="row">
        <div class="col-md-3 admin_header">
            <div class="navbar-nav">
    <li class="nav-item dash_header"><a href="dashboard.php" class="nav-link ">ADMIN DASHBOARD</a></li>
<li class="nav-item dropdown blog_header"><a href="" class="nav-link dropbtn text-dark">BLOGS</a>
</li>
<ul class="dropdown-content">
        <li><a href="addblogs.php" class="dropdown-item">add</a></li>
        <li><a href="viewblog.php" class="dropdown-item">view</a></li>
    </ul>
            
<li class="nav-item dropdown glr_header"><a href="" class="nav-link text-dark dropbtn ">gallery</a>
</li>

<ul class="dropdown-content">
        <li><a href="addimage.php" class="dropdown-item">add</a></li>
        <li><a href="viewimg.php" class="dropdown-item">view</a></li>
    </ul>

<li class="nav-item dropdown glr_header"><a href="" class="nav-link text-dark dropbtn ">events</a>
</li>

<ul class="dropdown-content">
        <li><a href="events.php" class="dropdown-item">add</a></li>
        <li><a href="eventsview.php" class="dropdown-item">view</a></li>
    </ul>
    <li class="nav-item dropdown glr_header"><a href="" class="nav-link text-dark dropbtn ">News</a>
</li>

<ul class="dropdown-content">
        <li><a href="addnews.php" class="dropdown-item">add</a></li>
        <li><a href="newsview.php" class="dropdown-item">view</a></li>
    </ul>

    <li class="nav-item enquiry1"><a href="enquiry.php" class="nav-link  text-dark ">enquiry</a>
</li>
</ul>
<div class="row">
    <div class="col">
    <a href="../index.php"><button class="text-decoration-none color-dark logout">logout</a></button>
</div>
</div>
        </div>
    </div>

 -->
 <div class="container-fluid">
    <div class="row flex-nowrap">
   
        
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
      
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="dashboard.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Admin Dashboard </span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Blogs</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="addblogs.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Add</span> </a>
                            </li>
                            <li>
                                <a href="viewblog.php" class="nav-link px-0"> <span class="d-none d-sm-inline">View</span> </a>
                            </li>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Gallery</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="addimage.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Add</span></a>
                            </li>
                            <li>
                                <a href="viewimg.php" class="nav-link px-0"> <span class="d-none d-sm-inline">View</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">News</span></a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="addnews.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Add</span></a>
                            </li>
                            <li>
                                <a href="newsview.php" class="nav-link px-0"> <span class="d-none d-sm-inline">View</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0" > <span class="d-none d-sm-inline">Add</span></a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">View</span></a>
                            </li>
                           
                        </ul>
                    </li>
                    <li>
                        <a href="enquiry.php" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Enquiry</span> </a>
                    </li>
                </ul>
                <hr>
                <div class=" pb-4">
                    <a href="../index.php" class="d-flex align-items-center text-white text-decoration-none " id="dropdownUser1">
                        
                        <span class="d-none d-sm-inline mx-1">Log Out</span>
                    </a>
                    <!-- <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
  
        <!-- <div class="col py-3">
            Content area...
        </div> -->
      
 
    
   
       