<?php
	$id = $_GET['id'];	
	$sql = "delete from dienthoai where id = $id";
	if($conn->query($sql)) header("location: index.php");
		else echo "Loi";
  ?>