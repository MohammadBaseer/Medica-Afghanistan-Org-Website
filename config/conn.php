<?php
$conn = mysqli_connect('localhost','root','','medica-db');

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
  }
  else
  {
	  $conn->query("SET NAMES 'utf8'");
	  $conn->query("SET CHARACTER SET utf8");
  }



 ?>