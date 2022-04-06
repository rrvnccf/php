<?php 
	include 'koneksi.php';
	$nik = $_POST['nik'];


	$query=mysqli_query($kon,"select * from mahasiswa where nik=".$nik."");
	 
	if ($query) {
		$hasil = mysqli_fetch_row($query);
		// var_dump($query);
		$result = array();
		
		$obj['nik'] = $hasil[0];
		$obj['nama'] = $hasil[1];
		$obj['jurusan'] = $hasil[2];
		
		$result = $obj;

		echo json_encode($result);
	}
?>