
<?php
include_once('controller/connection.php');

$error = '';

session_start();
if(isset($_SESSION['MA-users'])){
    $auth = $_SESSION['MA-users'];
   echo "<script>window.location='home.php';</script>";


 }
 else
 { 
if (isset($_POST['login'])) {

   $username = stripslashes($_REQUEST['user']);
   $username = mysqli_real_escape_string($conn,$username);
   $password = stripslashes($_REQUEST['password']);
   $password = mysqli_real_escape_string($conn,$password);


 $query = "SELECT * FROM `users` WHERE user='$username' and password= '$password' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);


if (empty($username) || empty($password)) {
  $error = '<b>Enter user and password*</b>';
} 
elseif (@$row['user'] ==! $username || $row['password'] ==! $password) {
  $error = '<b>Wrong user/Password*</b>';
}
elseif ($count == 1) {
   $_SESSION['MA-users'] = $username;

  echo "<script>window.location='home.php';</script>";


}
else
{
  $error = "User or Password Invalid";
}

}
}



















// session_start();
// if (isset($_SESSION['MA-users'])) {
//   $auth = $_SESSION['MA-users'];
//   echo "<script>window.location='home.php';</script>";
// }
// if (isset($_POST['login'])){
//    $username = stripslashes($_REQUEST['user']);
//    $username = mysqli_real_escape_string($conn,$username);
//    $password = stripslashes($_REQUEST['password']);
//    $password = mysqli_real_escape_string($conn,$password);

 // $query = "SELECT * FROM `users` WHERE user='$username' and password= '$password' ";
//    $result = mysqli_query($conn,$query) or die(mysql_error());
//    $row = mysqli_fetch_assoc($result);
//    $count = mysqli_num_rows($result);
// if (empty($username) || empty($password)) {
//   $error = '<b>Enter user and password*</b>';
// } 
// elseif ($row['user'] ==! $username || $row['password'] ==! $password) {
//   $error = '<b>Wrong user/password*</b>';
// }

//         elseif($count==1){
//        $_SESSION['MA-users'] = $username;
//        echo "<script>window.location='home.php';</script>";

//          }else{
// $error = '<b>query error*</b>';
//    }
//     }
?>
































<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MEDICA Website Administration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>MEDICA </b>Database</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to Website Panel</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="User" name="user" value="<?php if(isset($_POST['user'])){ echo $_POST['user']; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <!-- <input type="checkbox" id="remember">
              <label for="remember"> -->
                <?php echo $error; ?>
              <!-- </label> -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
