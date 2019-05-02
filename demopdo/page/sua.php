<?php
	$id = $_GET['id'];
	$sql = "select *from dienthoai where id = $id";
	$query = $conn->query($sql);
	$rs = $query->fetch(PDO::FETCH_ASSOC);
	echo 
	"
	<form method='POST' enctype ='multipart/form-data'>
	<table  border='1'>

		<tr>
			<td colspan ='2'>Sửa Thông Tin</td>
			
		</tr>
		<tr>
			<td>Tên</td>
			<td><input type='text' name = 'ten' value='$rs[ten]'></td>
		</tr>
		<tr>
			<td>Hiệu</td>
			<td><input type='text' name = 'hieu' value='$rs[hieu]'></td>
		</tr>
		<tr>
			<td>Giá</td>
			<td><input type='text' name = 'gia' value='$rs[gia]'></td>
		</tr>
		<tr>
			<td>Ảnh</td>
			<td><input type='file' name ='urlanh' ></td>
		</tr>
		<tr>
			<td colspan='2'><input type='submit' name = 'sub' value='Update'></td>
			
		</tr>
	</table>
	</form>

	"; 
	if(isset($_POST['sub']))
	{
		$ten =$_POST['ten'];
		$hieu = $_POST['hieu'];
		$gia = $_POST['gia'];
		$urlanh = $_FILES['urlanh']['name'];
		$tmp_name = $_FILES['urlanh']['tmp_name'];
		if($urlanh!=null)
		{
			$sql ="update dienthoai set ten = '$ten', hieu = '$hieu', gia = '$gia', urlanh = '$urlanh' where id = $id";
			if($conn->exec($sql)) move_uploaded_file($tmp_name,"img/".$urlanh);

		}
		else
		{
			$sql ="update dienthoai set ten = '$ten', hieu = '$hieu', gia = '$gia' where id = $id";
			$conn->exec($sql);
		}
		header("location: index.php");

	}
 ?>