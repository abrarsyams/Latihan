	<!-- fungsi : mengolah file yang akan di upload -->
	<!-- dibuat oleh : SYams abrar -->
<?php 
if (isset($_POST["submit"])){
	$namaFile = basename($_FILES['fileToUpload']['name']);
	$namasementara = $_FILES['fileToUpload']['tmp_name'];
	$dir = "uploads/";
	$cek = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if ($cek !== false) {
		$fullPath = $dir.$namaFile;
		$terupload = move_uploaded_file($namasementara, $fullPath);
		$imageFileType = pathinfo($fullPath, PATHINFO_EXTENSION);

		if ($terupload) {
			# code...
			echo "Upload Berhasil </br>";
			echo "Link: <a href='".$dir.$namaFile."'>".$namaFile."</a>";

		}else{
			echo "Upload Gagal";
		}
			echo "File is an image" . $cek ["mime"] . ".";
			echo "<img src='$fullPath'>";
		}else{
			echo "File is not image";
		}

}

 ?>