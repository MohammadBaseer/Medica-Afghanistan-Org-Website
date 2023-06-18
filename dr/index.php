<?php 
session_start();
$_SESSION['lan'] ='en';


include_once('../config/conn.php');

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>به وبب سایت میدیکا افغانستان خوش آمدین</title>
<link rel="shortcut icon" href="../assets/images/icon.png">
  
  <link rel="stylesheet" href="../assets/styles/vendors.css">
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

<select name="forma" onchange="location = this.value;" style="height: 4.4375rem; border: none; background-color: #FBFBFB; direction: inherit;">

<option value="../en/index.php">انگلیسی</option>
<option value="../dr/index.php" selected>دری</option>
<option value="../ps/index.php">پشتو</option>
</select>
</li>


            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>





<!-- ======================================================================= -->
<?php 
include_once "nav_head.php";
 ?> 

<!-- =======================================================================-->
  <div class="slider-intro">
    <div class="slider-clip">
      <ul class="slides owl-carousel">
        <li class="slide">
          <div class="slide-image fullscreener">
            <img src="../assets/images/temp/slider-intro-image.jpg" height="890" width="1800" alt="">
          </div><!-- /.slide-image -->

          <div class="slide-content">
            <div class="container">
              <div class="grid-x grid-margin-x">

                <div class="cell small-12 large-7">
                  <h2 class="slide-title">Send Childrens To School</h2><!-- /.slide-title -->

                  <div class="slide-entry">
                    <p>Integer sit amet augue iaculis, ultricies justo nec, commodo nisi. Class taciti sociosqu ad litora torquent per conubia nostra</p>
                  </div><!-- /.slide-entry -->
                </div><!-- /.cell large-7 -->

                <div class="cell small-12 large-5">
                  <div class="slide-aside">
                    <div class="slide-tag">Urgent Cause</div><!-- /.slide-tag -->

                    <div class="slide-progress">
                      <div class="slide-raised">
                        <span>Raised</span>

                        <strong>$56,354</strong>
                      </div><!-- /.slide-raised -->

                      <div class="slide-to-go">
                        <span>To Go</span>

                        <strong>$1,15,699</strong>
                      </div><!-- /.slide-to-go -->
                    </div><!-- /.slide-progress -->

                    <div class="slide-actions">
                      <a href="#">Donate Now</a>
                    </div><!-- /.slide-actions -->
                  </div><!-- /.slide-aside -->
                </div><!-- /.cell large-5 -->

              </div>
            </div><!-- /.container -->
          </div><!-- /.slide-content -->
        </li><!-- /.slide -->

        <li class="slide-alt">
          <div class="slide-image fullscreener">
            <img src="../assets/images/temp/slider-intro-image2.jpg" height="890" width="1800" alt="">
          </div><!-- /.slide-image -->

          <div class="slide-content">
            <div class="container">
              <div class="grid-x grid-margin-x">
                <div class="cell small-12">
                  <div class="slide-content-inner">
                    <h2 class="slide-title">We Can Change It Together Lets Do It Now!</h2><!-- /.slide-title -->

                    <p>Integer sit amet augue iaculis, ultricies justo nec, commodo nisi. Classtaciti sociosqu.</p>

                    <div class="slide-actions">
                      <a href="#" class="button button-white">Learn More</a>
                    </div><!-- /.slide-actions -->
                  </div><!-- /.slide-content-inner -->
                </div><!-- /.cell small-12 -->
              </div>
            </div><!-- /.grid -->
          </div><!-- /.slide-content -->
        </li><!-- /.slide-alt --><!-- /.slide-alt -->
      </ul><!-- /.slides -->
    </div><!-- /.slider-clip -->

    <div class="slider-actions"></div><!-- /.slider-actions -->
  </div><!-- /.slider-intro -->

  <section class="section-featured">
    <div class="container">
      <div class="grid-x grid-margin-x">
      <div class="cell small-12">
        <header class="section-head">
          <h2 class="section-title">MEDICA AFGHANISTAN – WOMEN SUPPORT ORGANISATION</h2>

          <div class="section-image">
            <img src="../assets/images/temp/ico-droplet.png" height="22" width="14" alt="">
          </div>

          <p>
            Medica Afghanistan is guided by integrity, transparency, accountability and a holistic approach.
          </p>
        </header>

<!-- ====================================================== -->



<div class="container">
        <div class="section-body">
          <header class="section-head" style="text-align: left;">
              <h3 class="section-title">Our Current Programs</h3>
            </header>



<section class="row">
<div class="container" >
<!-- <div class="row section-title text-center">
<h2>Our Current Programs</h2>
</div> -->
<div class="row" style="margin: 5px;">



<?php 


$sql2 = "SELECT * FROM en_home_page_pro order by en_webhome_pr_id desc limit 3";
$query2 = mysqli_query($conn, $sql2);
while ($row = mysqli_fetch_assoc($query2))


{

?>

<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12  latest-post">
<img src="../admin/data_pic/<?php echo $row['pro_image'] ?>" alt="A galley of type and scrambled it to make a type." class="img-responsive">
<div class="lp-inner " style="height: 163px;">
<ul class="lp-meta list-unstyled">
<!-- <li class="lp-cat"><em>in</em> <a href="#">data</a>, <a href="#">ssd</a>, <a href="#">intel</a></li> -->
<li class="lp-date"><a href="program_details.php?pro_view=<?php echo $row['en_webhome_pr_id'];?>"><?php echo $row['record_date'];?></a></li>
</ul>


<h4 class="lp-title">
<a  href="program_details.php?pro_view=<?php echo $row['en_webhome_pr_id'];?>" style="font-weight: bold;"><?php echo $row['pro_title'];?></a>
</h4>



</div>
</div>



<?php } ?>

</div>

<div class="container" style="text-align: center;"><a href="program.php" class="button">MORE</a></div>
</div>
</section>


        </div>
        </div>


      </div>
    </div></div>
  </section>
 























  <section class="section-updates">
    <div class="container">
      <div class="grid-x grid-margin-x">
        <div class="cell small-12 large-6">
          <section class="section-news">
            <header class="section-head">
              <h3 class="section-title">News</h3><!-- /.section-title -->
            </header><!-- /.section-head -->

            <div class="section-body">
              <div class="slider-news">
                <div class="slider-clip">
                  <ul class="slides owl-carousel">
<!-- =========================================================================== -->
<?php 
$sql1 = "SELECT * FROM en_home_page_news  order by en_webhome_id desc limit 10";
$query1 = mysqli_query($conn, $sql1);
while ($row = mysqli_fetch_assoc($query1))

 {

?>
<li class="slide">
<div class="slide-image">
<img src="../admin/data_pic/<?php echo $row['news_image'] ?>" height="178" width="269" alt="">
<div class="slide-bar">


<span>
<i class="far fa-calendar-alt"></i> <?php echo $row['record_date'];?>
</span>
</div>
</div><!-- /.slide-image -->
<div class="slide-content">
<h5 style="font-weight: bold;">
<a href="news-details.php?news_view=<?php echo $row['en_webhome_id'];?>">
  <?php 

$news_title =$row['news_title'];

if(strlen($news_title) > 55)
{ 
  echo substr($news_title,0,55)."...";
}
else
{
  echo $news_title;
 
}

  ?>


</a>
</h5>
<p >
  <?php 

// $news_dec =$row['news_dec'];





// if(strlen($news_dec) > 400)
// { 
//   echo substr($news_dec,0,400)."...";
// }
// else
// {
//   echo $news_dec;
 
// }

echo substr($row['news_dec'], 0, 400);


?></p>
</div><!-- /.slide-content -->
</li><!-- /.slide -->
<?php } ?>
<!-- ========================================================================= -->

                  </ul><!-- /.slides -->



                </div><!-- /.slider-clip -->

                <div class="slider-actions"></div><!-- /.slider-actions -->
              </div><!-- /.slider-news -->
            </div><!-- /.section-body -->

            <div class="section-foot">
              <h4 class="section-foot-title">
                <span>Randome news</span>
              </h4><!-- /.section-foot-title -->

              <ul class="latest-news-items ">
<?php 
$sql3 = "SELECT * FROM en_home_page_news ORDER BY RAND()LIMIT 2";
$query = mysqli_query($conn, $sql3);
while ($row1 = mysqli_fetch_assoc($query))
 {
?>
                <li class="latest-news-item">
                  <div class="latest-news-item-image">
                    <a href="#">
                      <img src="../admin/data_pic/<?php echo $row1['news_image'] ?>" height="66" width="80" alt="">
                    </a>
                  </div><!-- /.latest-news-item-image -->

                  <div class="latest-news-item-content">
                    <h4>
                      <a href="news-details.php?news_view=<?php echo $row1['en_webhome_id'];?>">
                      <?php 

$news_title =$row1['news_title'];

if(strlen($news_title) > 55)
{ 
  echo substr($news_title,0,55)."...";
}
else
{
  echo $news_title;
 
}

  ?>
                    </a>
                    </h4>

                    <p><?php echo $row1['record_date'];?></p>
                  </div><!-- /.latest-news-item-content -->
                </li>
<?php } ?>

              </ul><!-- /.latest-news-items medium-block-grid-2 small-block-grid-1 -->
            </div><!-- /.section-foot -->
          </section><!-- /.section-news -->
        </div><!-- /.cell large-6 -->

        <div class="cell small-12 large-6">
          <section class="section-upcoming-event">
            <header class="section-head">
              <h3 class="section-title">Upcoming Event</h3><!-- /.section-title -->

              <div class="section-head-actions">
                <a href="#" class="button button-facebook">
                  <i class="fab fa-facebook-f"></i> Facebook Page
                </a>
              </div><!-- /.section-head-actions -->
            </header><!-- /.section-head -->

            <div class="section-body">
              <div class="event-alt" itemscope="" itemtype="https://schema.org/Event">
                <div class="event-image">
                  <a href="#">
                    <img src="../assets/images/temp/upcoming-event.jpg" height="293" width="528" alt="" itemprop="image">
                  </a>
                </div><!-- /.event-image -->

                <h4 class="event-title">
                  <a href="#" itemprop="name">Event Title here</a>
                </h4><!-- /.event-title -->

                <div class="event-meta">
                  <!-- <span>
                    <i class="far fa-user-circle"></i> Admin
                  </span> -->

                  <span>
                    <i class="far fa-calendar-alt"></i> May 7, 2018 at 2:00 PM
                  </span>

                  <span>
                    <i class="fas fa-map-marker-alt"></i> Kabul, AF.
                  </span>
                </div><!-- /.event-meta -->

                <div class="event-entry" itemprop="description">
                  <p>Donec varius ultrices purus. Nullam sit amet sapien tortor. Aenean tincidunt inte rdum felis, vel placerat purus porta nec.</p>
                </div><!-- /.event-entry -->
              </div><!-- /.event-alt -->
            </div><!-- /.section-body -->
          </section><!-- /.section-upcoming-event -->
        </div><!-- /.cell large-6 -->
      </div>
    </div><!-- /.grid -->
  </section><!-- /.section-updates -->































  <section class="section-testimonials">
    <header class="section-head">
      <div class="container">
        <div class="grid-x grid-margin-x">
          <div class="cell small-12">
            <h2 class="section-title">What Kids are Saying About Us</h2><!-- /.section-title -->

            <div class="section-image">
              <img src="../assets/images/temp/ico-droplet.png" height="22" width="14" alt="">
            </div><!-- /.section-image -->

            <p>
              Our prime purpose in this life is to help people. <br>And if you can't help them at least don't hurt them.
            </p>
          </div><!-- /.cell small-12 -->
        </div>
      </div><!-- /.grid -->
    </header><!-- /.section-head -->

    <div class="section-body">
      <div class="slider-testimonials">
        <div class="container">
          <div class="grid-x grid-margin-x">
            <div class="slider-clip cell small-12">
              <ul class="slides owl-carousel">
                <li class="slide">
                  <div class="slide-entry">
                    <p>
                      Phasellus vitae diam pulvinar, tempus diam et, aliquam tellus. Quisque mattis odio eu placerat luctus. <br>
                      Vivamus magna elit, ultrices non lacinia vel, tempor vitae tellus. Fusce sit amet sem sit <br>
                      amet risus fringilla dapibus sed sit amet odio.
                    </p>
                  </div><!-- /.slide-entry -->

                  <div class="slide-foot">
                    <p>Victor Tihai, WPlook Studio</p>
                  </div><!-- /.slide-foot -->
                </li><!-- /.slide -->

                <li class="slide">
                  <div class="slide-entry">
                    <p>
                      Phasellus vitae diam pulvinar, tempus diam et, aliquam tellus. Quisque mattis odio eu placerat luctus. <br>
                      Vivamus magna elit, ultrices non lacinia vel, tempor vitae tellus. Fusce sit amet sem sit <br>
                      amet risus fringilla dapibus sed sit amet odio.
                    </p>
                  </div><!-- /.slide-entry -->

                  <div class="slide-foot">
                    <p>Diana Tihai, WPlook Studio</p>
                  </div><!-- /.slide-foot -->
                </li><!-- /.slide -->

                <li class="slide">
                  <div class="slide-entry">
                    <p>
                      Phasellus vitae diam pulvinar, tempus diam et, aliquam tellus. Quisque mattis odio eu placerat luctus. <br>
                      Vivamus magna elit, ultrices non lacinia vel, tempor vitae tellus. Fusce sit amet sem sit <br>
                      amet risus fringilla dapibus sed sit amet odio.
                    </p>
                  </div><!-- /.slide-entry -->

                  <div class="slide-foot">
                    <p>Johnathan Doe, WPlook Studio</p>
                  </div><!-- /.slide-foot -->
                </li><!-- /.slide -->
              </ul><!-- /.slides -->
            </div><!-- /.slider-clip -->
          </div>
        </div><!-- /.grid -->
      </div><!-- /.slider-testimonials -->
    </div><!-- /.section-body -->
  </section><!-- /.section-testimonials -->

<div class="callout">
  <div class="container">
    <div class="grid-x grid-margin-x">
      <div class="cell small-12 large-5">
        <h2 class="callout-title">Change Their World. Change Yours. This changes everything.</h2><!-- /.callout-title -->
      </div><!-- /.cell large-6 -->

      <div class="cell small-12 large-7">
        <div class="callout-actions">
          <a href="#" class="button">Become Volunteer</a>

          <span class="callout-separator">
            <span>Or</span>
          </span>

          <a href="#" class="button">Donate For Cause</a>
        </div><!-- /.callout-actions -->
      </div><!-- /.cell large-6 -->
    </div>
  </div><!-- /.row -->
</div><!-- /.callout -->


  <?php include_once"footer.php"; ?>

</div><!-- /.footer-bar -->
<!-- /.footer -->
<!-- /.wrapper -->
  <!-- <script src="assets/javascripts/vendor.js"></script> -->
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

