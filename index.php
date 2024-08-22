<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_id"]) == ""){
		header("location: landing_page.php");
    } else if (isset($_SESSION["ses_username"]) != "") {
		$data_id = $_SESSION["ses_id"];
		$data_nama = $_SESSION["ses_nama"];
		$data_jenis = $_SESSION["ses_jenis"];
		$data_level = $_SESSION["ses_level"];
    } else if (isset($_SESSION["ses_id"]) != "") {
		header("location: page.php");
    }

    //KONEKSI DB
    include "inc/koneksi.php";
?>

<?php 
	$sql = $koneksi->query("SELECT count(id_buku) as buku from tb_buku");
	while ($data= $sql->fetch_assoc()) {
		$morris_data = $data['buku'];
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DIGITAL LIBRARY</title>
	<link rel="icon" href="dist/img/baca.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/select2.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.css">
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

	<!-- Morris Chart -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	
	<style>
		.background-primary {
			background-color: rgb(44,103,137)!important;
		}
		@media (max-width: 767px) {
			.small-box .icon {
				display: block!important;
			}
		}
	</style>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="index.php" class="logo background-primary">
				<span class="logo-lg">
					<b>Digital Library</b>
				</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="background-primary navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
			</nav>
		</header>

		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="dist/img/avatar.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>
							<?php echo $data_nama; ?>
						</p>
						<span class="label label-danger">
							<?php echo $data_level; ?>
						</span>
					</div>
				</div>
				</br>
				<!-- /.search form -->
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>
					<!-- Level  -->
					<?php
					if ($data_level=="Administrator"){
					?>
					<li class="treeview">
						<a href="?page=admin">
							<i class="fa fa-dashboard"></i>
							<span>Dashboard</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>
					<li class="treeview">
						<a href="?page=MyApp/data_buku">
							<i class="fa fa-book"></i>
							<span>Kelola Buku</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>
					<li class="treeview">
						<a href="?page=MyApp/data_ktg">
							<i class="fa fa-users"></i>
							<span>Kelola Kategori</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>
					<li class="header">SETTING</li>
					<li class="treeview">
						<a href="?page=MyApp/data_pengguna">
							<i class="fa fa-user"></i>
							<span>Pengguna Sistem</span>
							<span class="pull-right-container">
							</span>
						</a>
					</li>
					<?php
					} 
					?>
					<li>
						<a href="logout_member.php" onclick="return confirm('Anda yakin keluar dari aplikasi ?')">
							<i class="fa fa-sign-out"></i>
							<span>Logout</span>
							<span class="pull-right-container"></span>
						</a>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<div class="content-wrapper">
			<section class="content">
			<?php 
				if(isset($_GET['page'])){
					$hal = $_GET['page'];
					switch ($hal) {
						//Klik Halaman Home Pengguna
						case 'admin':
							include "home/admin.php";
							break;
				
						//Pengguna
						case 'MyApp/data_pengguna':
							include "admin/pengguna/data_pengguna.php";
							break;
						case 'MyApp/add_pengguna':
							include "admin/pengguna/add_pengguna.php";
							break;
						case 'MyApp/edit_pengguna':
							include "admin/pengguna/edit_pengguna.php";
							break;
						case 'MyApp/del_pengguna':
							include "admin/pengguna/del_pengguna.php";
							break;
							
						//ktg
						case 'MyApp/data_ktg':
							include "admin/ktg/data_ktg.php";
							break;
						case 'MyApp/add_ktg':
							include "admin/ktg/add_ktg.php";
							break;
						case 'MyApp/edit_ktg':
							include "admin/ktg/edit_ktg.php";
							break;
						case 'MyApp/del_ktg':
							include "admin/ktg/del_ktg.php";
							break;

						//buku
						case 'MyApp/data_buku':
							include "admin/buku/data_buku.php";
							break;
						case 'MyApp/add_buku':
							include "admin/buku/add_buku.php";
							break;
						case 'MyApp/edit_buku':
							include "admin/buku/edit_buku.php";
							break;
						case 'MyApp/del_buku':
							include "admin/buku/del_buku.php";
							break;
						case 'reading':
							include "admin/buku/read_buku.php";
							break;
							
						//default
						default:
							echo "<center><br><br><br><br><br><br><br><br><br>
							<h1> Halaman tidak ditemukan !</h1></center>";
							break;
					}
				}else{
				// Auto Halaman Home Pengguna
					if($data_level=="Administrator"){
						include "home/admin.php";
					}
				}
			?>
			</section>
			<!-- /.content -->
		</div>

		<!-- /.content-wrapper -->

		<footer class="main-footer background-primary">
			<div class="pull-right hidden-xs">
			</div>
		</footer>
		<div class="control-sidebar-bg"></div>

		<!-- ./wrapper -->

		<!-- Morris Chart -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
		
		<!-- jQuery 2.2.3 -->
		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>

		<script src="plugins/select2/select2.full.min.js"></script>
		<!-- DataTables -->
		<script src="plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

		<!-- AdminLTE App -->
		<script src="dist/js/app.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="dist/js/demo.js"></script>
		<!-- page script -->

		<script>
			$(function() {
				$("#example1").DataTable();
				$('#example2').DataTable({
					"paging": true,
					"lengthChange": false,
					"searching": false,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
			});
		</script>

		<script>
			$(function() {
				//Initialize Select2 Elements
				$(".select2").select2();
			});
		</script>
</body>

</html>