<?php
	$sql = $koneksi->query("SELECT count(id_buku) as buku from tb_buku");
	while ($data= $sql->fetch_assoc()) {
	
		$buku=$data['buku'];
	}
?>

<?php
	$sql = $koneksi->query("SELECT count(id_anggota) as agt from tb_anggota");
	while ($data= $sql->fetch_assoc()) {
	
		$agt=$data['agt'];
	}
?>


<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
		<small>Anggota</small>
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">

		<div class="col-lg-6 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h2>
						<b>
							<?= $buku; ?>
						</b>
					</h2>

					<p>Koleksi Buku</p>
				</div>
				<div class="icon">
					<i class="ion-ios-book"></i>
				</div>
				<a href="#" class="small-box-footer">Info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>

		<div class="col-lg-6 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<h2>
						<b>
							<?= $agt; ?>
						</b>
					</h2>
					<p>Anggota Aktif</p>
				</div>
				<div class="icon">
					<i class="ion-person-stalker"></i>
				</div>
				<a href="#" class="small-box-footer">Info
					<i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>