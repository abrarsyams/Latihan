<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	<input type="text" name="input"><br><br>
	Masukan password :
	<input type="submit" name="proses" value="Proses">
</form>
</body>
</html>
<?php 
	if(isset($_POST['proses'])){
		$teks =$_POST['input'];
		echo "hasil deskripsi : ".base64_decode($teks);
	}
 ?>