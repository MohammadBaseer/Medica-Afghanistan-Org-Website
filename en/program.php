<?php 
include_once('../config/conn.php');
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Program | Medica Afghanistan</title>
        <link rel="shortcut icon" href="../assets/images/icon.png">
    <link rel="stylesheet" href="../assets/styles/vendors.css">
    <link rel="stylesheet" href="../style.css">
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
<option value="../dr/program.php">Dari</option>
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
                    <div class="grid-x grid-margin-x">
                        <div class="cell small-12">
                            <h1 class="main-title main-title-alt">Current Programs</h1><!-- /.main-title main-title-alt -->

                            <ul class="breadcrumbs">
                                <li>
                                    <a href="#">Our Programs</a>
                                </li>

                                <li class="current">
                                    <a href="#">Current Programs</a>
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























<div class="container" style="padding: 5px;">
    <div class="row">
 

<h3><strong>Current Programs</strong></h3>
<br><br>
                <div class="col-md-8">

<?php 
$sql1 = "SELECT * FROM en_home_page_pro WHERE web_sec ='English' ";
$query1 = mysqli_query($conn, $sql1);
while ($row = mysqli_fetch_assoc($query1))

 {

?>




                    <article class="row loop-post">
<h4><strong><?php echo $row['pro_title'] ?></strong></h4>
<p style="border-bottom:solid 1px #949698; border-top: solid 1px #949698; padding: 2px;">
<a href="program_details.php?pro_view=<?php echo $row['en_webhome_pr_id'];?>" style="color: #949698;"><i class="fa fa-calendar">&nbsp;</i><?php echo $row['record_date'] ?></a>
</p>

<p style="text-align: justify; font-size:13px;">

<?php 

echo implode(' ', array_slice(explode(' ', $row['pro_dec']), 0, 50))." ...". "\n";

?>


<br><br><a href="program_details.php?pro_view=<?php echo $row['en_webhome_pr_id'];?>" class="button btn-sm">read more</a></p>
<hr>

                    </article>


<?php } ?>


                 <!--    <nav class="pagination blog-pagination">
                        <a href="#" class="page-numbers prev">previous</a>
                        <a href="#" class="page-numbers">1</a>
                        <a href="#" class="page-numbers">2</a>
                        <a href="#" class="page-numbers">3</a>
                        <a href="#" class="page-numbers next">next</a>
                    </nav> -->
                </div>



        <div class="col-lg-3 col-md-3 col-sm-3"></div>
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

