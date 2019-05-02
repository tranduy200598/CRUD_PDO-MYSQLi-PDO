<form method='POST' enctype ='multipart/form-data'>
	<table  border='1'>

		<tr>
			<td colspan ='2'>Sửa Thông Tin</td>
			
		</tr>
		<tr>
			<td>Tên</td>
			<td><input type='text' name = 'ten' ></td>
		</tr>
		<tr>
			<td>Hiệu</td>
			<td><input type='text' name = 'hieu' ></td>
		</tr>
		<tr>
			<td>Giá</td>
			<td><input type='text' name = 'gia' ></td>
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
<?php
	if(isset($_POST['sub']))
	{
		$ten =$_POST['ten'];
		$hieu = $_POST['hieu'];
		$gia = $_POST['gia'];
		$urlanh = $_FILES['urlanh']['name'];
		$tmp_name = $_FILES['urlanh']['tmp_name']; 
		$sql = "insert into dienthoai (ten,hieu,gia,urlanh) value('$ten','$hieu','$gia','$urlanh')";
		if($conn->query($sql)) 
		{
			move_uploaded_file($tmp_name,"img/$urlanh");
			echo "Them thanh cong";
		}
		echo "<a href='index.php'>";
	}
 ?>