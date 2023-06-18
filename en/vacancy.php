<?php 
include_once('../config/conn.php');
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Work With us | Medica Afghanistan</title>
		<link rel="shortcut icon" href="../assets/images/icon.png">
	<link rel="stylesheet" href="../assets/styles/vendors.css">
	<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="../assets/bootstrap3/css/bootstrap.min.css" type="text/css">

<link rel="stylesheet" type="text/css" href="../assets/cssone/Announce_form.css">
<link rel="stylesheet" type="text/css" href="../assets/cssone/bootsraptforform.css">

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
									<option value="../en/vacancy.php">English</option>
<option value="../dr/vacancy.php">Dari</option>
<option value="../ps/vacancy.php">Pashto</option>
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
							<h1 class="main-title main-title-alt">Work With Us</h1><!-- /.main-title main-title-alt -->

							<ul class="breadcrumbs">
								<li>
									<a href="#">About us</a>
								</li>

								<li class="current">
									<a href="#">Work With Us</a>
								</li><!-- /.current -->
							</ul><!-- /.breadcrumbs -->
						</div><!-- /.cell small-12 -->
					</div>
				</div><!-- /.cell -->
			</div><!-- /.main-head-content -->
		</div><!-- /.main-head -->
	</div>

<!-- ================================================================================================= -->
<div class="container" style="padding: 5px;">
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-9">
<br>



<div class="container" data-aos="fade-down" >
<div class="row align-items-center" style="padding: 0px 30px;">
<div  style="border-bottom: solid #0187ff 1px; width: 100%;"><h2>Opportunities/Vacancy</h2></div>
<!-- start php here  -->
<?php 

$date = date("Y-m-d");


$sql = "SELECT *, (SELECT COUNT(vacancy_view_counter.id) FROM `vacancy_view_counter` WHERE vacancy_view_counter.vac_id = job_t.job_id) As viewers FROM `job_t` WHERE remark = 'publish' AND open_date <= '$date' AND close_date >='$date'";

// $sql = "SELECT * FROM job_t ";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result))
{
// echo "<pre>";
// print_r($row);
// echo "</pre>";
?>
<div class="col-md-12">
<br>
<div class="col-md-8 col-sm-12"> 
<ul class="searchList">                    
<!-- job start -->
<li>
<div class="row">
<div class="col-md-8 col-sm-8">
<div class="jobimg"><img src="http://sharjeelanjum.com/demos/career-portal/upload/8925276226155a8e08e4a6b284e336f6.png"></div>
<div class="jobinfo">
<h3><a href="apply.php?job_id=<?php echo $row['job_id'];?>"><?php echo $row['job_title']; ?></a></h3>
<!--<div class="companyName"><a href="#.">Datebase Management Company</a></div>-->
<div class="companyName"> </div>
<div class="location">Salary: <strong><?php echo $row['salary']; ?></strong></div>

</div>
<div class="clearfix"></div>
</div>
<div class="col-md-4 col-sm-4">

<div class="listbtn"><a href="apply.php?job_id=<?php echo $row['job_id'];?>">View Detail</a></div>
</div>
</div>
<p><?php echo $row['experience']; ?></p>

<!-- <p>Views: <?php //echo $row['viewers']; ?> </p> -->
<div class="greybox">
<div class="infobox"><i class="fa-solid fa-globe" aria-hidden="true"></i> <span><?php echo $row['location']; ?></span>
</div>
<div class="infobox"><i class="feather icon-file-text" aria-hidden="true"></i> <span><?php echo $row['experience']; ?></span>
</div>
<div class="infobox"><i class="feather icon-calendar" aria-hidden="true"></i> <span>            
<?php echo $row['close_date']; ?></span>            
</div>
<div class="infobox"><i class="feather icon-aperture" aria-hidden="true"></i> <span><?php echo $row['employment_type']; ?></span>
</div>            
<div class="clearfix"></div>
</div>

</li>
</ul>

<div class="clearfix"></div>
</div>


</div>
<?php 
} ?>
<!-- end php here -->

</div>
</div>




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

