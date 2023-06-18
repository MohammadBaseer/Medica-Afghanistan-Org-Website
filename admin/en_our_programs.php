

<?php 
// navbar active button 
$page = "home";
$sub_page ="program";
// end
include_once('controller/connection.php');
//start sperte fiels
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


 ?>

<!DOCTYPE html>
<html>
<head>
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
    <script src="plugins/ckeditor1/ckeditor.js"></script>


</head>
<?php 
 $err ='';
if (isset($_POST['insert'])) {

$date = date('d M yy');
$pro_title   = $_POST ['pro_title'];
$pro_des = $_POST ['pro_des'];
$pro_pic = $_FILES ['pro_pic']['name'];
$auth_id = $auth['id'];



if (empty($pro_title) || empty($pro_des) || empty($pro_pic)) {
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
        title: 'empty*.'
      })
    });

</script>

<?php
}
else
{



$pro_pic = time().'_'.mt_rand().basename($_FILES["pro_pic"]["name"]);
$pro_pic = $pro_pic;
$image_url="data_pic/".$pro_pic ;
move_uploaded_file($_FILES['pro_pic']['tmp_name'],$image_url);


$sql = "INSERT INTO `en_home_page_pro` (`user_id`, `pro_title`, `pro_image`, `pro_dec`, `record_date` ) VALUES ('$auth_id', '$pro_title', '$pro_pic', '$pro_des', '$date');";

if($result = mysqli_query($conn,$sql))

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
        type: 'success',
        title: 'Recorde inserted successfully.'
      })
    });

</script>

<?php
}
else{
$rr = "Field";
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
}
 ?>
<!-- =================== -->


<!-- =================== -->
<body class="hold-transition sidebar-mini layout-fixed" >
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
              <li class="breadcrumb-item active">Our Current Programs</li>
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
              Our Current Programs
            </h3>
          </div>
          <div class="card-body">
            <h4>Our Current Programs</h4>


  <!--           <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link" href="en-news.php" >News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active">Our Current Programs</a>
              </li>

            </ul> -->
            <div class="tab-content" id="custom-content-below-tabContent">
              <br>
              <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                          <div class="card">
            <div class="card-header">
              <!-- <h3 class="card-title"></h3> -->
              <button type="button" class="btn bg-gradient-success btn-flat" data-toggle="modal" data-target="#modal-insert">Insert New Record</button>
              <!-- --========-- --><!-- moded for insert -->
        <div class="modal fade" id="modal-insert">
        <div class="modal-dialog modal-lg">
          <!-- moded for insert -->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Insert Record</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" enctype="multipart/form-data">
            <div class="modal-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title" name="pro_title">
                  </div>
                 <div class="form-group">
                        <label>Description</label>
                        <textarea id="editor1" class="form-control" rows="4" placeholder="Enter description ..." name="pro_des"></textarea>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control-file" name="pro_pic">
                      </div>
                    
                    </div>
                  </div>
                  <!-- ================ -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="insert">Insert</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- --===========-- -->




            </div>
            <!-- /.card-header -->
            <div class="card-body">




              <table id="myTable" class="table table-bordered table-hover" style="font-size: 14px;">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Descriptions</th>
                  <th>Web Section</th>
                  <th>Insert by</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>



                  <!-- ============== -->
<?php 
$sql1 = "SELECT * FROM en_home_page_pro JOIN users WHERE en_home_page_pro.user_id = users.id ORDER BY en_webhome_pr_id DESC";

$query1 = mysqli_query($conn, $sql1);
while($row1 = mysqli_fetch_assoc($query1))
  {
?>
                <tr >
                  <td style="text-align: center;"><img src="data_pic/<?php echo $row1['pro_image']; ?>" class="img-circle elevation-2" alt="image" width="34px" height="34px"></td>
                  <td><?php echo $row1['pro_title']; ?></td>
                  <td><?php echo implode(' ', array_slice(explode(' ', $row1['pro_dec']), 0, 15))."...". "\n";; ?></td>
                  <td><?php echo $row1['web_sec']; ?></td>
                  <td><?php echo $row1['name']; ?></td>
                  <td><?php echo $row1['record_date']; ?></td>
                  

<td style="text-align: center;"><!-- &nbsp;&nbsp; -->
                <a type="button" href="en_edit_our_programs.php?edit=<?php echo $row1['en_webhome_pr_id']; ?>"> 
                        <i class="feather icon-edit" aria-hidden="true" style="color: #0bd83a;" title="Edit"></i>
                </a><!-- &nbsp;&nbsp; -->
                <a id="reject" href="#" onclick="return confirm('Are you sure..?');" data-toggle="tooltip" title="" data-original-title="Reject">
                        <i class="feather icon-trash" aria-hidden="true" style="color: red;" title="Delete"></i>
                </a><!-- &nbsp;&nbsp; -->

              </td>

                </tr>
<?php } ?>
                <!-- ============= -->

               </tbody>



<!-- === -->



<!-- 



 -->
     


































                <tfoot>
                <tr>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Descriptions</th>
                  <th>Web Section</th>
                  <th>Insert by</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
              </div>












































              <!-- ============================= -->

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
    <?php 
// echo $pro_title;
// echo "<br>";
// echo $pro_des;
// echo "<br>";
// echo $pro_pic;
// echo "<br>";
// echo $pro_id;
// echo "<br>";
     ?>
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

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );

CKEDITOR.replace( 'editor1' );
CKEDITOR.replace( 'editor2' );

// 
$(document).ready(function(){
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
})
</script>

</body>

</html>
