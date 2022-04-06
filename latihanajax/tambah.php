<?php
//Include file koneksi ke database
include "koneksi.php";
//menerima nilai dari kiriman form 
$cmd=$_POST["cmd"];
$nik=$_POST["nik"];
$nama=$_POST["nama"];
$jurusan=$_POST["jurusan"];

if ($cmd=='tambah') {
	//Query input menginput data kedalam tabel mahasiswa
	$sql="insert into mahasiswa (nik,nama,jurusan) values('$nik','$nama','$jurusan')";
}
elseif ($cmd=='edit') {
	$sql = "UPDATE mahasiswa SET nik='$nik',nama='$nama',jurusan='$jurusan' WHERE nik=$nik";
}


//Mengeksekusi/menjalankan query diatas
$hasil=mysqli_query($kon,$sql);

if ($hasil) {
	echo json_encode(array('status'=>'success','nik'=>$nik));
}
else{
	echo json_encode(array('status'=>'failed'));
}

?>