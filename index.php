<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


 <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>

 <div class="container">
  <h2>Silahkan masuk</h2>
  <form action="cek_login.php" method="post">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required="required">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required="required">

    <button type="submit" value="LOGIN">Login</button>
  </form>
</div>


</body>
</html>