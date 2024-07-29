<?php
include "inc/koneksi.php";
   
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Member | DIGITAL LIBRARY</title>
	<link rel="icon" href="dist/img/baca.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition login-page" style=" background-image: url('room-interior-design.jpg'); background-size : cover; max-width: 100%;">
	<div class="login-box">
		
		<!-- /.login-logo -->
		<div class="login-box-body" style="border-radius: 15px; box-shadow: 10px 10px 20px;">
		<div class="login-logo">
			<h3 style=" font-family: ; font-weight: 800;  ">
				<font color="">
					<b style="padding-top: -10px">DIGITAL LIBRARY</b>
				</font>
			</h3>
			</a>
		</div>
			<center>
				<img src="studying.png" width=160px />
			</center>
			<br>
			<p class="login-box-msg">Login Member</p>
			<form action="#" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="id_anggota" placeholder="Id Anggota" required>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password" placeholder="Password" required>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8">

					</div>
					<!-- /.col -->
					<div class="box-footer">
						<button type="submit" class="btn btn-primary btn-block btn-flat" name="btnLogin" title="Masuk Sistem">
							<b>Masuk</b>
						</button>
						<br>
						<a href="login.php" title="Halaman Adminintrator" class="btn btn-default btn-sm">
							<i class="glyphicon glyphicon-user"></i>
						</a>
					</div>
					<!-- /.col -->
				</div>
			</form>
			<!-- /.social-auth-links -->

		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery 2.2.3 -->
	<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<!-- sweet alert -->
</body>

</html>


<?php 
		if (isset($_POST['btnLogin'])) {  

		$id_anggota=mysqli_real_escape_string($koneksi,$_POST['id_anggota']);
		$password=mysqli_real_escape_string($koneksi,$_POST['password']);


		$sql_login = "SELECT * FROM tb_anggota WHERE BINARY id_anggota='$id_anggota' AND password='$password'";
		$query_login = mysqli_query($koneksi, $sql_login);
		$data_login = mysqli_fetch_array($query_login,MYSQLI_BOTH);
		$jumlah_login = mysqli_num_rows($query_login);
        

            if ($jumlah_login == 1 ){
              session_start();
              $_SESSION["ses_id"]=$data_login["id_anggota"];
              $_SESSION["ses_nama"]=$data_login["nama"];
			  $_SESSION["ses_jenis"]=$data_login["jenis_anggota"];
			  $_SESSION["ses_level"]=$data_login["level"];
                
              echo "<script>
                    Swal.fire({title: 'Login Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            window.location = 'page.php';
                        }
                    })</script>";
              }else{
              echo "<script>
                    Swal.fire({title: 'Login Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {
                            window.location = 'member.php';
                        }
                    })</script>";
                }
			  }
