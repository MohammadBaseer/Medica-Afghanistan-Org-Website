<?php 
session_start();



if($_GET['la']){
	$_SESSION['la'] = $_GET['la'];
	header('Location:'.$_SERVER['PHP_SELF']);
	exit();
}

switch($_SESSION['la']){
 	case "eng":
		require('lang/eng.php');		
	break;
	case "fre":
		require('lang/fre.php');		
	break;
	case "ger":
		require('lang/ger.php');		
	break;	
	default: 
		require('lang/eng.php');		
	}
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $lang['index-title'];?></title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="langSelect">
		<a href="index.php?la=eng"><img src="flags/eng.png"></a> 
		<a href="index1.php?la=fre"><img src="flags/fra.png"></a> 
		<a href="index2.php?la=ger"><img src="flags/ger.png"></a>
	</div>	
	<div id="cont">
		<p><?=$lang['index-welcome'];?></p>
		<p><?=$lang['index-text-1'];?></p>
		<p><a href="http://www.phphelptutorials.com/tp-how-to-create-a-launguage-changer-with-php"><?=$lang['demo'];?></a></p>
	</div>
</div>
</body>
</html>