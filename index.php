<?php
if (isset($_GET['aksi'])){
	if ($_GET['aksi']=='login') {
		session_start();
		include 'asset/conn/config.php';
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = ("SELECT * FROM tbl_akun WHERE username='$username' and password='$password'");
		$query = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($query);
		$cek = mysqli_num_rows($query);
		if ($cek>0) {
			if ($data ['level']=='Admin') {
		$_SESSION['username']= $username;
		$_SESSION['level']= 'Admin';
		header("location: admin/index.php");
		}else{
		header("location: index.php?pesan=gagal");
		   }
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>FAMI KPI</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="icon" type="image/x-icon" href="famicon.png">
  <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="asset/plugins/iCheck/square/blue.css">
 
  <!-- Tag link lainnya dan skrip diletakkan di sini -->
  <!-- class="hold-transition login-page" -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "poppins", sans-serif;
}
  body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: url(asset/img/kpi.jpg) no-repeat;
  background-size: cover;
  background-position: center;
}
.wrapper {
  width: 420px;
  height: 570px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(20px);
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  color: #fff;
  border-radius: 10px;
  padding: 0.01px 40px;
}

.wrapper .input-box {
  position: relative;
  width: 100%;
  height: 50px;
  background: transparent;
  margin: 20px 0;
}

.input-box input {
  width: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, 0.2);
  border-radius: 40px;
  font-size: 13px;
  color: #fff;
  padding: 10px 35px 10px 10px;
}

.input-box input ::placeholder {
  color: #fff;
}

.input-box i {
  position: absolute;
  right: 20px;
  top: 40%;
  transform: translateY(-50%);
  font-size: 20px;
}

.wrapper .btn {
  width: 100%;
  height: 35px;
  background: #fff;
  border: none;
  outline: none;
  border-radius: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
}

.wrapper .register-link {
  font-size: 14.5px;
  text-align: center;
  margin: 20px 0 15px;
}

.register-link p a {
  color: #fff;
  text-decoration: none;
  font-weight: 600;
}

.register-link p a:hover {
  text-decoration: underline;
}

</style>
<body>
<div class="wrapper">
<div class="login-logo">
	<img src="famicon.png" width="270px">
  </div>
 
		<form action="index.php?aksi=login" method="post" enctype="multipart/form-data">

    <p class="login-box-msg">Login to start your session</p>
		<div class="input-box">
	<div class="input-box">
	  <input type="text" placeholder="Username" name="username">
	  <i class="bx bxs-user"></i>
	</div>
	<div class="input-box">
	  <input type="password" placeholder="Password" name="password">
	  <i class="bx bxs-lock-alt"></i>
	</div>
	  
  <button type="submit" class="btn">Login</button>
	
	  </div>
	 
     </form>
	</div>

</body>
</html>
