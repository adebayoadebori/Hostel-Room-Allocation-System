<?php
    session_start();
    include('../includes/dbconn.php');
    include('../includes/check-login.php');
    check_login();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- By CodeAstro - codeastro.com -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Student Dashboard</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <?php include '../includes/student-navigation.php'?>
            
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php include '../includes/student-sidebar.php'?>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== 
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                       
                        <div class="d-flex align-items-center">
                        </div>
                    </div>
                    
                </div>
            </div>
             ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="slideshow-container">
               
                <style>
                    
                    body {
                        font-family: Verdana, sans-serif;
                        margin: 0
                    }
                    .mySlides {
                        display: none
                    }
                    img {
                        vertical-align: middle;
                    }
                    .slideshow-container {
                        
                        position: relative;
                        margin: auto;
                        
                    }
                    /* Next & previous buttons */
                    .prev,
                    .next {
                        cursor: pointer;
                        position: absolute;
                        top: 50%;
                        width: auto;
                        padding: 16px;
                        margin-top: -22px;
                        color: white;
                        font-weight: bold;
                        font-size: 18px;
                        transition: 0.6s ease;
                        border-radius: 0 3px 3px 0;
                        user-select: none;
                        background-color: rgba(0, 0, 0, 0.4);
                    }
                    /* Position the "next button" to the right */
                    .next {
                        right: 0;
                        border-radius: 3px 0 0 3px;
                    }
                    /* On hover, add a black background color with a little bit see-through */
                    .prev:hover,
                    .next:hover {
                        background-color: rgba(0, 0, 0, 0.8);
                    }
                    /* Caption text */
                    .text {
                        color: #000;
                        font-size: 15px;
                    
                        position: 
                        
                        width: 100%;
                        text-align: center;
                    }
                    .fade {
                        -webkit-animation-name: fade;
                        -webkit-animation-duration: 5s;
                        animation-name: fade;
                        animation-duration: 5s;
                    }
                    @-webkit-keyframes fade {
                        from {
                        opacity: .8
                        }
                        to {
                        opacity: 1
                        }
                    }
                    @keyframes fade {
                        from {
                        opacity: .8
                        }
                        to {
                        opacity: 1
                        }
                    }
            
                
                </style>
            
                
                <div class="mySlides fade">
                    <img src="../assets/images/1.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="../assets/images/2.jpg" style="width:100%">
                </div>
                
                <div class="mySlides fade">
                    <img src="../assets/images/3.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="../assets/images/4.jpg" style="width:100%">
                </div>
                <div class="mySlides fade">
                    <img src="../assets/images/5.jpg" style="width:100%">
                </div>
                <!--
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                -->

                <script>
                    var slideIndex = 0;
                    carousel();

                    function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > x.length) {slideIndex = 1}
                    x[slideIndex-1].style.display = "block";
                    setTimeout(carousel, 2200); // Change image every 2 seconds
                    }
                </script>
  
                
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include '../includes/footer.php' ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>