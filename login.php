<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body style="background-image: url(assets/images/abstack-background-cartoon-style-bigbamm-sunlight_68708-513.jpg);background-size: cover; ">
	
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>



      <table class="table table-borderless table-light"  style="margin-left: 35%; max-width: 30% ; margin-top: 00px; ">
        <form action="cek_login.php" method="POST" >
          <tr>
               <td ><img src="assets/images/LOGO1.png" alt="logomyto" width="200px"  style=" display: block;margin-left: auto;margin-right: auto;" ><br><h6>Log in dengan akunmu sekarang</br></h6></td>
          </tr>
          <tr>
              <th ><h3>Log In</h3></th>
          </tr>
          <tr>
              <td ><input type="text" class="form-control" placeholder="Enter Username" id="username" name="username"></td>
          </tr>
          <tr>
              <td > <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password"></td>
          </tr>
          <tr>
              <td ><a href="#">Lupa password? Click here</a></td>
          </tr>
          <tr>            
              <td><button type="submit" class="btn btn-primary" name="submit">Log In</button></td>          
          </tr>
          <tr>
              <td>Belum punya akun ?<a href="register.php">Buat akun</a></td>           
          </tr>
        </form>
      </table>
      
</body>
</html>