<!-- fungsi : form login -->
<!-- dibuat oleh : syams abrar -->
<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['username'])){ // Jika session username ada berarti dia sudah login
  header("location: index.php"); // Kita Redirect ke halaman index.php
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <div style="color: red;margin-bottom: 15px;">
    <?php
    // Cek apakah terdapat cookie dengan nama message
    if(isset($_COOKIE["message"])){ // Jika ada
      echo $_COOKIE["message"]; // Tampilkan pesannya
    }
    ?>
  </div>
<form action="cek.php" method="post">
	<div>
		<div>
			<input type="text" name="username" placeholder="username"><br><br>
			<input type="text" name="password" placeholder="password"><br><br>
			<input type="submit">
		</div>
	</div>
</form>
</body>
</html>