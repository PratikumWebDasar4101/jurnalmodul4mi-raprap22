<?php 

session_start();
if (isset($_POST["kirim"])) {
	$nama = $_FILES['pic']['name'];
	$tmp = $_FILES['pic']['tmp_name'];
	$dir = "gambar/";
	$tempat = $dir.$nama;
	
	$uppic = move_uploaded_file($tmp, $dir.$nama);
	if ($uppic) {
		$hobi = $_POST['hobi'];
		$_SESSION['hobi'] = $hobi;
		$_SESSION['pic'] = $dir. $nama;
		header('location: halakhir.php');
	}
}

 ?>