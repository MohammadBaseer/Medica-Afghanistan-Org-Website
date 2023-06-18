<?php 
include_once('../config/conn.php');
 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EVAW Report | Medica Afghanistan</title>
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
									<option value="../en/evaw-reports.php">English</option>
<option value="../dr/evaw-reports.php">Dari</option>
<option value="../ps/evaw-reports.php">Pashto</option>
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
							<h1 class="main-title main-title-alt">EVAW Report</h1><!-- /.main-title main-title-alt -->

							<ul class="breadcrumbs">
								<li>
									<a href="#">Advocact</a>
								</li>

								<li class="current">
									<a href="#">EVAW Report</a>
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
		<div class="col-lg-9 col-md-9 col-sm-9">

<h4><b>EVAW Reports</b></h4>
<br>

<ol>

<?php 
$sql1 = "SELECT * FROM en_web_records WHERE page_section = 'en_evaw_report'";
$query1 = mysqli_query($conn, $sql1);
while ($row = mysqli_fetch_assoc($query1))
 {

?>
    
<il style="display: list-item; font-weight: bold;margin-bottom: 13px;">
    <a


<?php if (empty($row['files'])) {
    echo "style='color: black;'";
} 
else
{
?>
 
  href="../admin/data_files/files/<?php echo $row['files']; }?>"><?php echo $row['title']; ?></a></il>






<?php } ?>

    
</ol>

<br>

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

