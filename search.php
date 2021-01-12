<?php
	$model_number= filter_input(INPUT_POST, 'model_number');
	$car_name= filter_input(INPUT_POST, 'car_name');
	mysql_connect('localhost', 'root', '');
	mysql_select_db('demo');
	$sql="SELECT * FROM policy";
	$records= mysql_query($sql);
?>

<html>
	<head>
		<title>search data</title>
	</head>
	<body>
		<table width="800" border="2" cellpadding="2" cellspacing="2">
			<tr>
			<th>Policy Id </th>
			<th>Policy Name </th>
			<th>Policy Company </th>
			<th>Price </th>
			<tr>
			
			<?php
				while($policy=mysql_fetch_assoc($records)){
					echo "<tr>";
					echo "<td>".$policy[P_ID]."</td>";
					echo "<td>".$policy[P_Name]."</td>";
					echo "<td>".$policy[P_Company]."</td>";
					echo "<td>".$policy[Price]."</td>";
					echo "</tr>";
				}
			?>
		</table>
		<p align="right"><a href= "front.html" style="text-decoration:none">Home</a></p>
	</body>
</html>