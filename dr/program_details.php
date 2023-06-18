<?php 
include_once('../config/conn.php');
if (isset($_GET['pro_view']))
{
  $id = $_GET['pro_view']; 
$sql = "SELECT * FROM en_home_page_pro WHERE en_webhome_pr_id='$id'";
   $result = mysqli_query($conn, $sql);
   $row =  mysqli_fetch_assoc($result);
   
}

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  پروگرام های فعلی ما | میدیکا افغانستان</title>
        <link rel="shortcut icon" href="../assets/images/icon.png">
    <link rel="stylesheet" href="../assets/styles/fa.vendors.css">
    <link rel="stylesheet" href="../fa.style.css">
<link rel="stylesheet" href="../assets/bootstrap3/css/bootstrap.min.css" type="text/css">



<style>
    a:hover {
    color: #fa6f1c;
    #27262c
}
a{
    color: #27262c;
}
</style>

</head>
<body>



<div class="wrapper">
    <div class="bar">
        <div class="container">
            <div class="grid-x grid-margin-x">
                <div class="cell small-12">

<?php include_once'uphead.php'; ?>

                    <div class="bar-socials">
<?php include_once'head_social.php'; ?>
                        <ul>
                            <li>
                                <select name="forma" onchange="location = this.value;" style="height: 4.4375rem; border: none; background-color: #FBFBFB;">
                                    <option value="../en/program.php">English</option>
<option value="../dr/program.php" selected>Dari</option>
<option value="../ps/program.php">Pashto</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>





<?php 
include_once "nav_head.php";
 ?> 
<!-- ======================================================================= -->
    













    <div class="main">
        <div class="main-head">
            <div class="main-head-image fullscreener">
                <img src="../assets/images/temp/main-image-2.jpg" height="318" width="1800" alt="">
            </div><!-- /.main-head-image fullscreener -->

            <div class="main-head-content">
                <div class="grid-container">
                    <div class="grid-x grid-margin-x" style="direction: rtl;">
                        <div class="cell small-12">
                            <h1 class="main-title main-title-alt">پروگرام های فعلی ما</h1><!-- /.main-title main-title-alt -->

                            <ul class="breadcrumbs">
                                <li>
                                    <a href="#">پروگرام های فعلی ما</a>
                                </li>

                                <li class="current">
                                    <a href="#">پروگرام های فعلی ما</a>
                                </li><!-- /.current -->
                            </ul><!-- /.breadcrumbs -->
                        </div><!-- /.cell small-12 -->
                    </div>
                </div><!-- /.cell -->
            </div><!-- /.main-head-content -->
        </div><!-- /.main-head -->
    </div>

<!-- ==============================================
=================================================== -->





















<div class="container">


<div class="container" style="padding: 5px;" dir="rtl">
    <div class="row">
 

<h3 dir="rtl"><strong>پروگرام های فعلی ما</strong></h3>
<br>
        <div class="col-lg-9 col-md-9 col-sm-9" style="float: right;">



        <h4><strong><?php echo $row['pro_title']; ?></strong></h4>
<p style="border-bottom:solid 1px #949698; border-top: solid 1px #949698; padding: 2px;">
<a style="color: #949698;"><i class="fa fa-calendar">&nbsp;</i><?php echo $row['record_date']; ?></a>
</p>
<img src="../admin/data_pic/<?php echo $row['pro_image'] ?>" alt="" class="img-responsive">
<br><br>
<?php echo $row['pro_dec']; ?><br>

<br>

        </div>





        <div class="col-lg-3 col-md-3 col-sm-3" style="float: left;"></div>
    </div>



</div>


</div>
















<!-- ==============================================
=================================================== -->
    <?php include_once"footer.php"; ?>
</div><!-- /.footer-bar -->
<!-- /.footer -->
<!-- /.wrapper -->
    <!-- <script src="../assets/javascripts/vendor.js"></script> -->
    <script src="../assets/javascripts/jquery.min.js"></script>
    <script src="../assets/javascripts/fastclick.min.js"></script>
    <script src="../assets/javascripts/foundation.min.js"></script>
    <script src="../assets/javascripts/modernizr.min.js"></script>
    <script src="../assets/javascripts/owl.carousel.min.js"></script>
    <script src="../assets/javascripts/jquery.fullscreener.min.js"></script>
    <script src="../assets/javascripts/core.min.js"></script>
    <script src="../assets/javascripts/number.min.js"></script>
    <script src="../assets/javascripts/app.min.js"></script>
    <script src="../assets/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>

