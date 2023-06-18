<?php 
session_start();
// $_SESSION['lan'] ='eng';
 // $_SESSION['lan'] ='dr';

 if(isset($_SESSION['lan'])){
if ($_SESSION['lan'] == 'dr') {

 	header('Location: dr/index.php'); exit;

}
elseif ($_SESSION['lan'] == 'en'){
 	// echo "english";

 	header('Location: en/index.php'); exit;

}
else
{
 	header('Location: ps/index.php'); exit;
}
 }
else
{
	header('Location: en/index.php'); exit;
}




?>