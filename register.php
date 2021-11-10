<?php
require_once 'includes/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body  style="background-image: url(assets/images/abstack-background-cartoon-style-bigbamm-sunlight_68708-513.jpg);background-size: cover; ">

        <table class="table table-borderless table-light"  style="margin-left: 35%; max-width: 30%; margin-top: 90px; ">
            <form action="register.php" method="POST" >
              <tr>
                   <td ><img src="assets/images/LOGO1.png" alt="logomyto" width="200px"  style=" display: block;margin-left: auto;margin-right: auto;" ><br><h6>Daftarkan dirimu sekarang</h6></td>
              </tr>
              <tr>
                  <th ><h3>Sign Up</h3></th>
              </tr>
              <tr>
                 <td><input type="text " class="form-control" placeholder="Username" id="usern" name="username"></td>
              </tr>
              <tr>
                 <td><input type="text " class="form-control" placeholder="Nama Lengkap" id="name" name="name"></td>
              </tr>
              <tr>
              <td ><input type="email" class="form-control" placeholder="E-mail" id="email" name="email" ></td>
              </tr>
              <tr>
                  <td > <input type="password" class="form-control" placeholder="Password" id="pwd" name="password"></td>
              </tr>
              <tr>
                  <td> <input type="password" class="form-control" placeholder="Konfirmasi Password" id="cpass" name="cpass"></td></td>
              </tr>
              <tr>            
                <td><button type="submit" class="btn btn-primary" name="submit">Daftar</button></td>
               
            </tr>
              <tr>
                  <td>Sudah punya akun ?<a href="login.php">Log In</a></td>
                </tr>
              </form>
       
</body>
</html>