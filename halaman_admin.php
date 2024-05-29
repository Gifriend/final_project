<!DOCTYPE html>
<html>
<head>
 <title>Halaman admin</title>
 <link rel="stylesheet" href="page_style.css">
</head>
<body>
 <?php
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
 }

 ?>
 <h1>Ini Halaman Admin</h1>

 <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
 <a href="logout.php">LOGOUT</a>
 <?php
include "koneksi.php";
$qry = $koneksi->query("SELECT * FROM users");
?>


 <div class="container">
    <h3>Tambah Data</h3>
    <form method="post" enctype="multipart/form-data">
        <div class="forms">
            <label for="">name</label>
            <input type="text" name="name">
        </div>
        <div class="forms">
            <label for="">Profile</label>
            <input type="file" name="images" id="image">
        </div>
        <div id="preview" class="preview"></div>

        <div class="buttons">
            <button class="btn_tambah" type="submit" name="submit">Tambah</button>
            <a href="index.php" class="btn_kembali">Kembali</a>
        </div>
    </form>
</div>

 <br/>
 <br/>

</body>
</html>