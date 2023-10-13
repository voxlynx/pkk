<?php
include 'config.php';
if(isset($_POST['submit'])){
	$u=$_POST['user'];
	$p=$_POST['pass'];
	$slc="SELECT * FROM cs WHERE user='$u' AND password='$p'";
	$res=mysqli_query($conn,$slc);
	if(mysqli_num_rows($res)>0){
		header('Location:cs.php');
	}else{
		echo "<script>alert('Data user tidak ditemukan')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post" action="" autocomplete="off">
		<input type="text" name="user" placeholder="User"><br><br>
		<input type="password" name="pass" placeholder="Password"><br><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>