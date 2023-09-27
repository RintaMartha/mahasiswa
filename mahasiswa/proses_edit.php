<?php 

include("koneksi.php");
//cek tmbl udh di klik blm

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $wa = $_POST['wa'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    $sql = "UPDATE calon_mhs SET nama='$nama', alamat='$alamat', wa='$wa', email='$email', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id='$id'";
    $query = mysqli_query($db, $sql);

    if( $query){
        header('Location: listmhs.php?status=sukses');
    }else{
        header('Location: index.php?status=gagal');
    }
}
  
  ?>