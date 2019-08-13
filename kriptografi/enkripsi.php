<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1></h1>
<form action="" method="POST">
	<input type="text" name="input"><br><br>
	Masukan password :
	<input type="submit" name="proses" value="Proses">
	</form>
</body>
</html>
<?php
if(isset($_POST['proses'])){
	$input = $_POST['input'];
	echo "password asli : ".$input."<br>";
	echo "password md5 :".md5($input)."<br>";
	echo "password hash :".password_hash($input, PASSWORD_DEFAULT)."<br>";
	echo "password crypt :".crypt($input, "@#!@as")."<br>";
	echo "password sha1 :".sha1($input)."<br>";
	echo "password hash :".hash("sha256",$input)."<br>";
	echo "password encode :".base64_encode($input)."<br>";
	echo "password decode :".base64_decode($input)."<br>";
}
?>