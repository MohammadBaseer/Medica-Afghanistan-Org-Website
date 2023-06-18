<?php 
include_once('../config/conn.php');


if (isset($_GET['job_id'])) {
    $job_id = $_GET['job_id'];
      //$sql = "SELECT * FROM employees WHERE id='$empwiew'";
      $sql = "SELECT * From job_t WHERE job_id='$job_id' AND remark= 'publish' ";
      $result = mysqli_query($conn, $sql);
      if ($row =  mysqli_fetch_assoc($result))
      {
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";
      } 
    else 
    {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      }
    // ===================
    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    // $visitor_ip = "222.222.222.222";
    
    $query = "SELECT * FROM vacancy_view_counter WHERE ip_address ='$visitor_ip' ";
    $result = mysqli_query($conn , $query);
    $rw =  mysqli_fetch_assoc($result);
    $total_vistor = mysqli_num_rows($result);
    // ============================
    
    
    // ===========================
    if ($total_vistor == 0 AND $rw['vac_id'] != $job_id )
    if ($total_vistor)
     {
      // echo "if".$total_vistor;
    $query = "INSERT INTO vacancy_view_counter (ip_address, vac_id) VALUES ('$visitor_ip', '$job_id') ";
    $result = mysqli_query($conn , $query);
    }
    elseif ($rw['vac_id'] == $total_vistor ) {
     // echo "elseif".$total_vistor;
    $query = "INSERT INTO vacancy_view_counter (ip_address, vac_id) VALUES ('$visitor_ip', '$job_id') ";
    $result = mysqli_query($conn , $query);
    }
    // =================== 

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> کار با ما | میدیکا افغانستان </title>
        <link rel="shortcut icon" href="../assets/images/icon.png">
    <link rel="stylesheet" href="../assets/styles/fa.vendors.css">
    <link rel="stylesheet" href="../fa.style.css">
<link rel="stylesheet" href="../assets/bootstrap3/css/bootstrap.min.css" type="text/css">

<link rel="stylesheet" type="text/css" href="../assets/cssone/Announce_form.css">
<link rel="stylesheet" type="text/css" href="../assets/cssone/bootsraptforform.css">
<link rel="stylesheet" type="text/css" href="../assets/cssone/form.css">


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
<option value="../dr/vacancy.php" selected>Dari</option>
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
                    <div class="grid-x grid-margin-x" style="direction: rtl;">
                        <div class="cell small-12">
                            <h1 class="main-title main-title-alt">کار با ما</h1><!-- /.main-title main-title-alt -->

                            <ul class="breadcrumbs">
                                <li>
                                    <a href="#">در باره ما</a>
                                </li>

                                <li class="current">
                                    <a href="#">کار با ما</a>
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
 

<br>
        <div class="col-lg-9 col-md-9 col-sm-9" style="float: right;">





        <div class="container" data-aos="fade-down">
        <div class="row align-items-center" style="padding: 0px 30px;">

<!-- start php here  -->
          
<div class="col-md-8" style="direction: ltr;"> 
              <div  style="border-bottom: solid #0187ff 1px; width: 100%;"><h2>Apply For <?php echo $row['job_title']; ?></h2></div>

      <br>    
          <!--Job Detail-->
          
          <div class="boxwraper">
            <div class="titlebar">
              <div class="row">
                <div class="col-sm-6">Job Detail</div>
           <div class="col-sm-6 text-right"><a href="javascript:;" onclick="window.history.back(-1);">Back</a></div>
                              </div>
            </div>
            
            <!--Job Detail-->
            
            <div class="row"> 
              
              <!--Requirements-->
              
              <div class="col-md-12">
                <ul class="reqlist">
                  <li>
                    <div class="col-sm-6">Job Title:</div>
                    <div class="col-sm-6"><?php echo $row['job_title']; ?></div>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="col-sm-6">Job Location:</div>
                    <div class="col-sm-6"><?php echo $row['location']; ?></div>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="col-sm-6">Nationality:</div>
                    <div class="col-sm-6"><?php echo $row['nationality']; ?></div>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="col-sm-6">Category:</div>
                    <div class="col-sm-6"><?php echo $row['category']; ?></div>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="col-sm-6">Employment Type:</div>
                    <div class="col-sm-6"><?php echo $row['employment_type']; ?></div>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="col-sm-6">Salary:</div>
                    <div class="col-sm-6"><?php echo $row['salary']; ?></div>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="col-sm-6">Vacancy Number:</div>
                    <div class="col-sm-6"><?php echo $row['vacancy']; ?></div>
                    <div class="clear"></div>
                  </li>
                                    <li>
                    <div class="col-sm-6">No. of Jobs:</div>
                    <div class="col-sm-6"><?php echo $row['no_of_jobs']; ?></div>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="col-sm-6">Year of Experience:</div>
                    <div class="col-sm-6"><?php echo $row['experience'];?></div>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="col-sm-6">Education:</div>
                    <div class="col-sm-6"><?php echo $row['education']; ?></div>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="col-sm-6">Gender:</div>
                    <div class="col-sm-6"><?php echo $row['gender']; ?></div>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="col-sm-6">Open Date:</div>
                    <div class="col-sm-6"><?php echo $row['open_date']; ?></div>
                    <div class="clear"></div>
                  </li>
                  <li>
                    <div class="col-sm-6">Cloes Date:</div>
                    <div class="col-sm-6"><?php echo $row['close_date']; ?></div>
                    <div class="clear"></div>
                  </li>
                </ul>
              </div>
              
              <div class="clear"></div>
            </div>
            
            <!--Job Description-->
            
            <div class="jobdescription">
              <div class="row">
                <div class="col-md-12">
                  <div class="subtitlebar">About Organization</div>
                  <p>
                  </p><h2 class="normal-details"><?php echo $row['about_org']; ?></h2>
                  <p></p>
                </div>
                <div class="col-md-12">
                  <div class="subtitlebar">Job Description</div>
                  <p>
                  </p><h2 class="normal-details"><?php echo $row['job_description']; ?></h2>
                  <p></p>
                </div>
                <div class="col-md-12">
                  <div class="subtitlebar">Job Requirement</div>
                  <p>
                  </p><h2 class="normal-details"><?php echo $row['job_requirement']; ?></h2>
                  <p></p>
                </div>
                <div class="col-md-12">
                  <div class="subtitlebar">Education</div>
                  <p>
                  </p><h2 class="normal-details"><?php echo $row['education_details']; ?></h2>
                  <p></p>
                </div>
                <div class="col-md-12">
                  <div class="subtitlebar">Skill</div>
                  <p>
                  </p><h2 class="normal-details"><?php echo $row['skill']; ?></h2>
                  <p></p>
                </div>
                <div class="col-md-12">
                  <div class="subtitlebar">Languages</div>
                  <p>
                  </p><h2 class="normal-details"><?php echo $row['languages']; ?></h2>
                  <p></p>
                </div>
                <div class="col-md-12">
                  <div class="subtitlebar">Submission Guidelines</div>
                  <p>
                  </p><h2 class="normal-details"><?php echo $row['submission_guideline']; ?></h2>
                  <p></p>
                </div>
                <div class="col-md-12">
                  <div class="subtitlebar">Submission Email</div>
                  <p>
                  </p><h2 class="normal-details"><?php echo $row['submission_email']; ?></h2>
                  <p></p>
                </div>
                              </div>
              <!-- <div class="actionBox footeraction">
                <h4>To Apply for this job click below</h4>
                <a href="cv_submission.php?apply=<?php //echo $row['job_id'];?>" class="applyjob"><span>Apply Now</span></a> </div>
              <div class="clear">&nbsp;</div>
               -->
            </div>
          </div>
        </div>

          <!-- end php here -->

        </div>
      </div>







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

