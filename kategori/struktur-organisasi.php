<?php 

//mengambil data dari tbl_organisasi

	//include "config/config.php";

	$sql = mysqli_query($con, "SELECT * FROM tbl_organisasi");
	$data = mysqli_fetch_array($sql);

 ?>
<h4>Peraturan Daerah</h4>
<embed type="application/pdf" src="assets/file/pdf/struktur/<?= $data['pdf'] ?>" style="width: 100%; height: 100vh;"></embed>