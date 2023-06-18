<?php 
// navbar active button 
$page = "other";
$sub_page ="record";
// end

include_once('controller/connection.php');

 session_start();

if(isset($_SESSION['MA-users'])){
$username = $_SESSION['MA-users'];
$ses_sql = mysqli_query($conn, "SELECT * FROM users WHERE user = '$username'");
$auth = mysqli_fetch_assoc($ses_sql);
$login_session = $auth['user'];
// echo "<pre>";
// print_r($auth);
// echo "</pre>";
}
else {

echo "<script>window.location='index.php';</script>";
}
// ======================================

?>


<!DOCTYPE html>
<html>
<head>


  <!--  -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MA Administration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- icons -->
  <link rel="stylesheet" href="plugins/feather-font-master/src/css/iconfont.css">
   <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <!-- summernote -->

  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>


</head>


<!-- =================== -->
<body class="hold-transition sidebar-mini layout-fixed" >

<?php 
$edit =$_GET['edit'];

$sql = mysqli_query($conn,"SELECT * FROM en_web_records WHERE record_id  = $edit");
$row1 = mysqli_fetch_assoc($sql);
// ======================================



 if (isset($_POST['update']))
 {
$title   = $_POST ['title'];
$page_section = $_POST['page_section'];
$files = $_FILES ['file']['name'];
$mfile = $_POST['attachment'];


if(empty($title))
{
?>

   <script>
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    });
      Toast.fire({
        type: 'error',
        title: 'title empty.'
      })
    });
</script>

<?php
}
else
{

$target_file = time().'_'.basename($_FILES["file"]["name"]);
$fileupload ="data_files/files/".$target_file;
// ======================


if (!empty($_FILES["file"]['name'])) {

if (file_exists("data_files/files/".$mfile)) {
    @unlink("data_files/files/".$mfile);



mysqli_query($conn, "UPDATE en_web_records SET 
  title = '$title',
  page_section = '$page_section',
  files   = '$target_file'
   WHERE record_id  = '$edit' ");

move_uploaded_file($_FILES["file"]["tmp_name"], $fileupload);

?>

   <script>
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    });
      Toast.fire({
        type: 'success',
        title: 'Update successfully.'
      })
    });
</script>

<?php
echo "<script>window.location='en_page_records.php';</script>";

}

}
else
{
// $file = $mfile;



if (mysqli_query($conn, "UPDATE en_web_records SET 
  title = '$title',
  page_section = '$page_section',
  files = '$mfile'
   WHERE record_id  ='$edit' ")) {


?>

   <script>
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 4000
    });
      Toast.fire({
        type: 'success',
        title: 'Update successfully.'
      })
    });

</script>

<?php
echo "<script>window.location='en_page_records.php';</script>";

}
else
{
  // $err = "field";
  echo("Error description: " . mysqli_error($conn));
}

}

}
}




 ?>

<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a href="controller/logout.php" class="nav-link"><i class="fas fa-th-users"></i>LogOut</a></li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <!--  <a href="index.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Medica Afghasnitan</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" width="34px" height="34px">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $auth['name']; ?></a>
        </div>
      </div>

 <?php 
  include_once 'navbar.php';
  ?>
      </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">English Section</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Page Section Records</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<!--     <section class="content">
      
      </section>
 -->
          <section class="col-lg-12 connectedSortable" style="min-height: 0px;">
<div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
              Edit Page Section Records
            </h3>
          </div>
          <div class="card-body">
            <h4>Edit Page Section Records</h4>
            
            <div class="tab-content" id="custom-content-below-tabContent">
              <br>
              <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">



<!-- ============================================================== -->

<form method="POST" enctype="multipart/form-data">

<div class="modal-body">
<div class="form-group">
<label>Title</label>



<!-- ==================================================== -->
<input type="hidden" class="form-control"  name="attachment" value="<?php echo $row1['files']; ?>">
<!-- ==================================================== -->
<input type="text" class="form-control" required name="title" value="<?php echo $row1['title']; ?>">
<!-- ==================================================== -->
</div>


<div class="form-group">
<label>Select Page Section</label>
<select class="form-control" name="page_section">
<optgroup label="Psychosocial Counseling">
<option value="en_pshp_activities" <?php if ($row1['page_section'] == 'en_pshp_activities') {echo "selected";} ?>>Activities</option>
</optgroup>


<optgroup label="Legal Services">
<option value="en_position_paper" <?php if ($row1['page_section'] == 'en_position_paper') {echo "selected";} ?>>Position Paper</option>
<option value="en_legal_memo" <?php if ($row1['page_section'] == 'en_legal_memo') {echo "selected";} ?>>Legal Memo</option>
<option value="en_lap_activities" <?php if ($row1['page_section'] == 'en_lap_activities') {echo "selected";} ?>>Activities</option>
</optgroup>

<optgroup label="Advocacy">
<option value="en_press_release" <?php if ($row1['page_section'] == 'en_press_release') {echo "selected";} ?> >Press Release</option>
<option value="en_evaw_report" <?php if ($row1['page_section'] == 'en_evaw_report') {echo "selected";} ?> >EVAW Reports</option>
<option value="en_petitions" <?php if ($row1['page_section'] == 'en_petitions') {echo "selected";} ?> >Petitions</option>
<option value="en_statment" <?php if ($row1['page_section'] == 'en_statment') {echo "selected";} ?> >Statements</option>
<option value="en_other_doc" <?php if ($row1['page_section'] == 'en_other_doc') {echo "selected";} ?> >Other Documents</option>
</optgroup>

<optgroup label="News & Events">
<option value="en_newsletters" <?php if ($row1['page_section'] == 'en_newsletters') {echo "selected";} ?>>Newsletters</option>
</optgroup>

<optgroup label="Capacity Building">
<option value="en_trainings" <?php if ($row1['page_section'] == 'en_trainings') {echo "selected";} ?>>Trainings</option>
<option value="en_letracy" <?php if ($row1['page_section'] == 'en_letracy') {echo "selected";} ?>>Letracy Program</option>
</optgroup>

<optgroup label="Publications">
<option value="en_annual_reports" <?php if ($row1['page_section'] == 'en_annual_reports') {echo "selected";} ?>>Annual Reports</option>
<option value="en_researches" <?php if ($row1['page_section'] == 'en_researches') {echo "selected";} ?>>Researches and Manuals</option>
<option value="en_booklet" <?php if ($row1['page_section'] == 'en_booklet') {echo "selected";} ?>>Booklet and Magazines</option>
<option value="en_poetry" <?php if ($row1['page_section'] == 'en_poetry') {echo "selected";} ?>>Poetry and Literature</option>
<option value="en_interviews" <?php if ($row1['page_section'] == 'en_interviews') {echo "selected";} ?>>Interviews</option>
</optgroup>
  </select>



</div>

<div class="form-group">
<label for="exampleInputFile">file</label>
<div class="input-group">
<div class="custom-file">
<!-- ==================================================== -->
<input type="file" name="file" class="form-control-file">
<!-- ==================================================== -->
</div>

</div>


</div>




</div>
<div class="modal-footer justify-content-between">
<button type="button" class="btn btn-default" onclick="goBack()">back</button>
<!-- ==================================================== -->
<button type="submit" class="btn btn-primary" name="update">Update</button>
<!-- ==================================================== -->
</div>
</form>



            </div>
            <!-- /.card-body -->
          </div>
              </div>

            </div>
          </div>
          <!-- /.card -->
        </div>
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://medicaafghanistan.org">MEDICA AFGHANISTAN</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>IT</b> Depatment
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>



<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script>

function goBack() {
  window.history.back();
}
</script>
</body>
</html>
