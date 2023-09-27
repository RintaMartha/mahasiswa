<?php 

include("koneksi.php");
//cek tmbl udh di klik blm

if(isset($_POST['daftar'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $wa = $_POST['wa'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $sql = "INSERT INTO calon_mhs(id, nama, alamat, wa, email, jenis_kelamin, agama, sekolah_asal) VALUES('$id', '$nama', '$alamat', '$wa', '$email', '$jenis_kelamin', '$agama', '$sekolah_asal')";

    
    $query = mysqli_query($db, $sql);

    if( $query){
        header('Location: listmhs.php?status=sukses');
    }else{
        header('Location: index.php?status=gagal');
    }
}
  
  ?>