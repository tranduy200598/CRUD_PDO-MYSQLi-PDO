<?php
	include ("db/connect.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>điện thoại</title>
	<link rel="stylesheet" type="text/css" href="rel/style.css">
</head>
<body>
	
		<div id="menu">
			<a href="index.php">Home</a>
			
			<span>

				<a href="index.php?str=them">Add Product</a>
		
			</span>
			

		</div>
		<div id="content">
		<div id="center">

			<?php
				if (isset($_GET['str'])) //tao lien ket  trang
				{
				 	$str = $_GET['str'];
				 	switch ($str) 
				 	{
				 		case 'them': include("page/them.php");
				 			# code...
				 			break;
				 		
				 		
				 			break;
				 		case 'xoa': include("page/xoa.php");
				 			# code...
				 			break;
				 		case 'sua': include("page/sua.php");
				 			# code...
				 			break;
				 	}
				 } 
				 else include("page/danhsach.php");
			 ?>
		</div>
	</div>
	
</body>
</html>
<?php
	include ("db/disconnect.php");
 ?>