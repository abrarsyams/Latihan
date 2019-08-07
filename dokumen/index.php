<!-- Fungsi : Form Upload -->
<!-- Dibuat oleh : Syams ABrar -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php 
	session_start();
	if ($_SESSION['status']!="login") {
		header("location:login.php?pesan=belum_login");
	}
 ?>
 <a href="logout.php"> Logout</a>
</body>
</html>