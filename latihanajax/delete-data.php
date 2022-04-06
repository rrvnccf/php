<?php

include ('koneksi.php');

if(isset ($_POST['nik'])){

    $nik= $_POST['nik'] ;
    $query= "DELETE from mahasiswa WHERE nik=$nik" ;
    $exec= mysqli_query ($kon, $query) ;

    if ($exec) {
        echo json_encode(array('status'=>'success','nik'=>$nik));
    }
    else{
        echo json_encode(array('status'=>'failed'));
    }

}


?>