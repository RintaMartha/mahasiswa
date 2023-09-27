<?php 
include("koneksi.php");

$id = $_GET['id'];
$sql = "DELETE FROM calon_mhs WHERE id='$id'";

if ( mysqli_query($db, $sql)){
    header("location: listmhs.php");
}else{
    echo "Error".$sql."<br>".mysqli_error($db);
}

mysqli_close($db);
?>