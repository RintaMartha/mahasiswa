<?php include("koneksi.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        body{
            background-color:#00FF00;
        }
        .pict{
            padding-top: 70px;
        }

        .table{
            padding-top:40px;
        }
    </style>
<center>
    <div class="pict">
    <img src="2.png" width="100" height="130">
        <img src="4.png" width="130" height="130">
        </div>

        <div class="daftar">
            <h2>MAHASISWA YANG SUDAH MENDAFTAR</h2>
            <h2>UNIVERSIRAS NEGERI YOGYAKARTA</h2>
            <h2>TAHUN 2023/2024</h2>

            <a href="daftar.php">[+] Tambah baru </a>
            
        </div>

        <div class="table">
        <table border="1">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>WA</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan <br>
                </th>

    </tr>
    
    </div>

    <?php

    
    $sql = "SELECT * FROM calon_mhs";
  $query = mysqli_query($db, $sql);

  while($mhs = mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$mhs['id']."</td>";
    echo"<td>".$mhs['nama']."</td>";
    echo"<td>".$mhs['alamat']."</td>";
    echo"<td>".$mhs['wa']."</td>";
    echo"<td>".$mhs['email']."</td>";
    echo"<td>".$mhs['jenis_kelamin']."</td>";
    echo"<td>".$mhs['agama']."</td>";
    echo"<td>".$mhs['sekolah_asal']."</td>";

    echo"<td>";
    echo "<a href='edit.php?id=".$mhs['id']."'>edit</a> |";
    echo "<a href='hapus.php?id=".$mhs['id']."'>hapus</a>";
    echo"</tr>";
  }

  ?>

</table>
    </center>

</body>
</html>