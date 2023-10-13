<?php
include 'config.php';
$slc="SELECT * FROM fdback ORDER BY id";
$res=mysqli_query($conn,$slc);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table width="80%" border="1">
		<tr>
			<th>Nama</th>
			<th>Lokasi</th>
			<th>Isi</th>
		</tr>
		<?php
		while($dt = mysqli_fetch_array($res)){
			echo "<tr>";
			echo "<td>".$dt['firstname']." ".$dt['lastname']."</td>";
			echo "<td>".$dt['location']."</td>";
			echo "<td>".base64_decode($dt['isi'])."</td>";
		}
		?>
	</table>

</body>
</html>