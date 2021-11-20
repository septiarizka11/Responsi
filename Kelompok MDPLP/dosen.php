<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Dashboard input data</title>
</head>
<style>
    body{
    background: #ffffff;
}
</style>
<body>
    <div class="sidebar">  
        <header>Menu</header>
        <ul>
        <li><a href="dosen.php"><i class="fas fa-mouse"></i>Dosen</a></li>
            <li><a href="datadosen.php"><i class="fas fa-mouse"></i>Data Dosen</a></li>
            <li><a href="inputdataMhs.php"><i class="far fa-calendar-check"></i>Mahasiswa</a></li>
            <li><a href="datamahasiswa.php"><i class="far fa-calendar-check"></i></i>Data Mahasiswa</a></li>
            <li><a href="matakuliah.php"><i class="fas fa-database"></i>Mata Kuliah</a></li>
            <li><a href=""><i class="fas fa-database"></i>Jadwal</a></li>
            <li><a href=""><i class="fas fa-database"></i>Administrasi</a></li>
        </ul>
    </div>
    <div class="form">
        <div class="judul">
            <h2>Input Data Dosen</h2>
        </div>
        <form action="" method="post" autocomplete="off">
        <table class="form-main">
            <tr>
                <th>Nama Lengkap</th>
                <th>:</th>
                <th><input type="text" name="nama_dosen"></th>
            </tr>
            <tr>
                <th>NIDN</th>
                <th>:</th>
                <th><input type="text" name="nidn_dosen"></th>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                <th><input type="radio" name="jenis_kelamin" value="Laki - Laki">Laki - Laki</th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</th>
            </tr>
            <tr>
                <th>No Hp</th>
                <th>:</th>
                <th><input type="text" name="no_hp"></th>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <th><input type="text" name="alamat"></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th><input type="submit" name="submit"></th>
            </tr>
        </table>
        </form>

    <?php
    include "koneksi.php";

    if(isset($_POST['submit'])){
        mysqli_query($koneksi, "insert into tabel_dosen set
        nama_dosen ='$_POST[nama_dosen]',
        nidn_dosen ='$_POST[nidn_dosen]',
        jenis_kelamin ='$_POST[jenis_kelamin]',
        no_hp ='$_POST[no_hp]',
        alamat ='$_POST[alamat]'");


        echo "<script language='javascript'>alert('data berhasil disimpan');window.location='dosen.php'</script>";
    }
    ?>
    </div>
</body>
</html>