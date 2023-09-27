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

        <div class="font">
            <h2>PENDAFTARAN MAHASISWA BARU</h2>
            <h2>UNIVERSITAS NEGERI YOGYAKARTA</h2>
            <h2>TAHUN 2023/2024</h2>
        </div>
  <hr>

  <div class="table">
    <form action="proses_pendaftran.php" method="post">
  <table  border="1">
  <tr>
                            <td><strong>NO</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="text" name="id"></td>
                        </tr>

                        <tr>
                            <td><strong>NAMA</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td><strong>ALAMAT</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="text" name="alamat"></td>
                        </tr>

                        <tr>
                            <td><strong>Wa</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="text" name="wa"></td>
                        </tr>

                        <tr>
                            <td><strong>Email</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <td><strong>Jenis Kelamin</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="radio" name="jenis_kel" value="laki-laki">Laki - Laki
                            <input type="radio" name="jenis_kel" value="perempuan">Perempuan
                        </td>
                            
                        </tr>
                        <tr>
                            <td><strong>AGAMA</strong></td>
                            <td>:<td>
                           
                                <select name="agama">
                                <option value="islam">islam</option>
                                <option value="kristen">kristen</option>
                                <option value="hindu">hindu</option>
                                <option value="budha">budha</option>
    </select>
    </td>
                        </tr>
                    
                        <tr>
                            <td><strong>SEKOLAH ASAL</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="text" name="asal_sekolah"></td>
                        </tr>
                        


                    </table>
                    <br>
                    <a href="list_mhs.php">
                        <input type="submit" name="daftar" value="daftar" />
                    </a>
                    <br>
                    </form>

  </div>

 
    </center>

   
</body>
</html>