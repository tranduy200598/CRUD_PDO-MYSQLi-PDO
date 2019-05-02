<?php
	$sql = "select * from dienthoai";
	$result = $conn->query($sql); //thuc thi cau lenh

	//do du lieu ra bang
	echo "
	
	<table border='1' style='border: none; '>
		<tr>
			<td style='padding-left:430px; color:#0da829; font-weight: bold; background-color: #e9ceb0;' colspan ='7'; border: none;>PRODUCT</td>
		</tr>
		<tr >
		
			<td style='text-align: center; color:#fff; font-weight: bold; background-color: #e9ceb0;'>ID</td>
			<td style='text-align: center; color:#fff; font-weight: bold; background-color: #e9ceb0;'>Image</td>
			<td style='text-align: center; color:#fff; font-weight: bold; background-color: #e9ceb0;'>Name</td>
			<td style='text-align: center; color:#fff; font-weight: bold; background-color: #e9ceb0;'>Trademark</td>
			<td style='text-align: center; color:#fff; font-weight: bold; background-color: #e9ceb0;'>PriceVND</td>
			
			<td style='text-align: center; color:#fff;background-color: #e9ceb0;'> XXX </td>
		</tr>
	";	

	foreach($result as $value)
	{
		
		 echo "
		<tr>
				
			<td style='text-align: center; font-weight:bold;'>$value[id]</td>
			<td ><img style=' margin-left:310px;' width = '30%' height = '45%' src='img/$value[urlanh]'></td>
			<td style='text-align: center; font-weight:bold;'>$value[ten]</td>
			<td style='text-align: center; font-weight:bold;'>$value[hieu]</td> 
			<td style='text-align: center; font-weight:bold;'>$value[gia]</td>
			
			<td style='text-align: center; font-weight:bold;'><a href='index.php?str=xoa&id=$value[id]'>Delete</a></td>
			<td style='text-align: center; font-weight:bold;'><a href='index.php?str=sua&id=$value[id]'>Edit</a></td>
		</tr>

		";
	}
	echo "</table>";
 ?> 