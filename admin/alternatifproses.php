<?php
include 'header.php';
if (isset($_GET['proses'])) {
	if ($_GET['proses']=='prosestambah') {
		$nama_alternatif=$_POST['nama_alternatif'];
		mysqli_query($conn, "INSERT into tbl_alternatif (nama_alternatif,nilai_saw,ranking)values('$nama_alternatif','0','0')");
		header("location:alternatif.php");

	}elseif($_GET['proses']=='prosesubah'){
		$id_alternatif=$_POST['id_alternatif'];
		$nama_alternatif=$_POST['nama_alternatif'];

		mysqli_query($conn,"UPDATE tbl_alternatif SET nama_alternatif='$nama_alternatif' WHERE id_alternatif='$id_alternatif'");
		header("location:alternatif.php");

	}elseif($_GET['proses']=='proseshapus'){
		$id_alternatif=$_GET['id_alternatif'];
		mysqli_query($conn,"DELETE FROM tbl_alternatif WHERE id_alternatif='$id_alternatif'");
		header("location:alternatif.php");
	}
}
?>
<link rel="stylesheet" href="../asset/css/csstop.css" />