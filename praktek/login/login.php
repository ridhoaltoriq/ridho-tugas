<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "ridhoal";

$conn = mysqli_connect($host,$user,$password);
mysqli_select_db($conn,$db);

if (isset($_POST['username'])) {
	$nama = $_POST['username'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM toriq WHERE user = '" . $nama . "' AND Password = '" . $pass . "'";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result) == 1) {
		header("location:../halaman1/index.php");
		exit();
	}else{
		echo"ada yg salah";
		exit();
		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>loginpage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="lapak">
		<h1>LOGIN</h1>
		<form method="POST" action="#">
				<input type="text" name="username" placeholder="username">
				<input type="password" name="password" placeholder="password">
			<input type="submit" name="submit" value="LOGIN" class="tombol">
		</form>
	</div>


</body>
</html>