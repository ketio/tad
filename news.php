<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
	</head>
	
	<body>
		<div id="content_wrapper">

		<!-- header -->
		<?php 
			include_once "header.php"; 
			
			$newsNo=$_GET["newsNo"];
			
			include_once "news/".$newsNo.".php";
		
		?>
		
	</body>
</html>