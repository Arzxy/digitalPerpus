<?php
	$sql = $koneksi->query("SELECT count(id_buku) as buku from tb_buku");
	while ($data= $sql->fetch_assoc()) {
		$buku=$data['buku'];
	}

	$sql = $koneksi->query("SELECT count(id_anggota) as agt from tb_anggota");
	while ($data= $sql->fetch_assoc()) {
		$agt=$data['agt'];
	}

	$sql = $koneksi->query("SELECT count(id_pengguna) as admin from tb_pengguna");
	while ($data= $sql->fetch_assoc()) {
		$pustakawan=$data['admin'];
	}
?>



<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard Pustakawan
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">

		<div class="col-lg-6 ">
			<!-- small box -->
			<div class="small-box bg-primary" style="border-radius: 5px;">
				<div class="inner" style="height: 200px;">
					<div class="icon">
						<i class="ion-ios-book"></i>
					</div>
				</div>
				<div class="small-box-footer" style="color: #000; background-color: #fff; text-align: left; padding: 10px; border-radius: 0 0 5px 5px;">
					<div>
						<b>Jumlah Buku</b>
						<br>
						<p><?= $buku; ?> Buku</p>
					</div>
					<div style="display: flex; justify-content: flex-end;">
						<button  onclick="location.href='?page=MyApp/data_buku'" style="background-color: rgb(44, 103, 137); border: none; color: #fff;
						border-radius: 5px; padding: 10px 20px;">
							Detail
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 ">
			<!-- small box -->
			<div class="small-box bg-green" style="border-radius: 5px;">
				<div class="inner" style="height: 200px;">
					<div class="icon">
						<i class="ion-person-stalker"></i>
					</div>
				</div>
				<div class="small-box-footer" style="color: #000; background-color: #fff; text-align: left; padding: 10px; border-radius: 0 0 5px 5px;">
					<div>
						<b>Jumlah Pustakawan</b>
						<br>
						<p><?= $pustakawan; ?> Orang</p>
					</div>
					<div style="display: flex; justify-content: flex-end;">
						<button  onclick="location.href='?page=MyApp/data_pengguna'" style="background-color: rgb(44, 103, 137); border: none; color: #fff;
						border-radius: 5px; padding:10px 20px;">
							Detail
						</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>