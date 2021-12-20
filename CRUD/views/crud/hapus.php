<?php
require_once('koneksi.php');
try {
	$sql = "DELETE FROM penghasilan WHERE no=".$_GET['no'];
	$koneksi->query($sql);
} catch (Exception $e) {
	echo $e;
	die();
}
  echo "<script>
	alert('Data berhasil di hapus');
	window.location.href='index.php?page=crud/index';
	</script>";
?>