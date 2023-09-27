<?php include("koneksi.php");

if( !isset($_GET['id'])){
    header('Location: listmhs.php');
}

$id = $_GET['id'];

$sql = "SELECT *FROM calon_mhs WHERE id='$id'";
$query = mysqli_query($db, $sql);
$mhs = mysqli_fetch_array($query);

if(mysqli_num_rows($query) <1){
    die("data tidak ditemukan...");
}

?>

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
            <h2>FORM EDIT DATA MAHASISWA</h2>
            <h2>UNIVERSITAS NEGERI YOGYAKARTA</h2>
            <h2>TAHUN 2023/2024</h2>
        </div>
  <hr>

  <form action="proses_edit.php" method="post">
  <div class="table">
  <table  border="1">
  <tr>
                            <td><strong>NO</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="text" name="id" value="<?php echo $mhs['id']; ?>"></td>
                        </tr>
                        <tr>
                            <td><strong>NAMA</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="text" name="nama" value="<?php echo $mhs['nama']; ?>"></td>
                        </tr>
                        <tr>
                            <td><strong>ALAMAT</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="text" name="alamat" value="<?php echo $mhs['alamat']; ?>"></td>
                        </tr>

                        <tr>
                            <td><strong>Wa</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="text" name="wa" value="<?php echo $mhs['wa']; ?>"></td>
                        </tr>

                        <tr>
                            <td><strong>Email</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="text" name="email" value="<?php echo $mhs['email']; ?>"></td>
                        </tr>
                        <tr>
                            <td><strong>Jenis Kelamin</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($mhs == 'laki-laki') ? "checked": ''; ?>>Laki - Laki
                            <input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($mhs== 'perempuan') ? "checked": ''; ?>>Perempuan
                        </td>
                            
                        </tr>
                        <tr>
                            <td><strong>AGAMA</strong></td>
                            <td>:<td>
                           
                                <select name="agama">
                                <option <?php echo ($mhs ['agama'] == 'islam') ? "selected": ''; ?>value="islam">islam</option>
                                <option <?php echo ($mhs ['agama'] == 'kristen') ? "selected": ""; ?>value="kristen">kristen</option>
                                <option <?php echo ($mhs ['agama'] == 'hindu') ? "selected": ""; ?>value="hindu">hindu</option>
                                <option <?php echo ($mhs ['agama'] == 'budha') ? "selected": ""; ?>value="budha">budha</option>
    </select>
    </td>
                        </tr>
                    
                        <tr>
                            <td><strong>SEKOLAH ASAL</strong></td>
                            <td><strong>:</strong></td>
                            <td><input type="text" name="sekolah_asal" value="<?php echo $mhs['sekolah_asal'] ?>"></td>
                        </tr>
                        


                    </table>
                    <br>
                    <a href="">
                        <input type="submit" name="simpan" value="simpan" />
                    </a>
                    <br>
                    </form>
  </div>

    </center>
</body>
</html>