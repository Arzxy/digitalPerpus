<section class="content-header" style="display: flex; justify-content: space-between;  flex-wrap: wrap;">
	<div>
		<h1>
			Koleksi Buku
		</h1>
	</div>
	<div style="display: flex; align-items: center;">
		<select id="mahasiswa_agama" class="form-control">
			<?php
				$sql = $koneksi->query("SELECT * from tb_kategori");
				while ($data= $sql->fetch_assoc()) {
			?>
			<option value="<?php echo $data['id']; ?>"><?php echo $data['nama_kategori']; ?></option>
			<?php } ?>
		</select>
		<div style="display: flex; align-items: center; margin-left: 5px;">
			Search:&ensp;
			<form method="POST">
				<input type="text" name="cari" id="cari" class="form-control" placeholder="Cari nama buku!" size="40"/>
			</form>
		</div>
	</div>
</section>
<?php 
	if(isset($_POST['cari'])) {
		$search = $_POST['cari'];
		?>
	<section class="content">
		<div class="box box-primary"></div>
		<div class="row">
			<?php
				$cari = $koneksi->query("SELECT * from tb_buku where judul_buku like '%$search%'");
				while ($data = $cari->fetch_assoc()) {
				$file_buku = $data['file_buku'];
				$pdfname = "pdf/".$file_buku;
				$pdftext = file_get_contents($pdfname);
				$file = preg_match_all('/\/Page\W/', $pdftext, $dummy);
			?>
			<div class="col-xs-6 col-md-3 p-5" style="margin-bottom: 10px;">
				<div style="background-color: #fff; border-radius: 5px; box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);">
					<div>
						<img src="pdf_banner/<?php echo $data['file_banner']; ?>" style="border-radius: 5px 5px 0px 0px; width: 100%; height: 170px; object-fit: cover;" alt="">
					</div>
					<div style="padding: 10px;">
						<div>
							<b><?php echo $data['judul_buku']; ?></b>
							<br>
							<p><?php echo $file; ?> Halaman</p>
						</div>
						<div style="display: flex; justify-content: space-between;">
							<p><?php echo $data['tgl']; ?></p>
							<button onclick="location.href='?page=reading&kode=<?php echo $data['id_buku']; ?>'" style="background-color: rgb(44, 103, 137); border: none; color: #fff; border-radius: 5px; padding-left: 15px; padding-right: 15px;">Baca</button>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</section>
	<?php } else{ ?>
<section class="content">
	<div class="box box-primary"></div>
	<div class="row">
		<?php
			$sql = $koneksi->query("SELECT * from tb_buku");
			while ($data = $sql->fetch_assoc()) {
			$file_buku = $data['file_buku'];
			$pdfname = "pdf/".$file_buku;
			$pdftext = file_get_contents($pdfname);
			$file = preg_match_all('/\/Page\W/', $pdftext, $dummy);
		?>
		<div class="col-xs-6 col-md-3 p-5" style="margin-bottom: 10px;">
			<div style="background-color: #fff; border-radius: 5px; box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);">
				<div>
					<img src="pdf_banner/<?php echo $data['file_banner']; ?>" style="border-radius: 5px 5px 0px 0px; width: 100%; height: 170px; object-fit: cover;" alt="">
				</div>
				<div style="padding: 10px;">
					<div>
						<b><?php echo $data['judul_buku']; ?></b>
						<br>
						<p><?php echo $file; ?> Halaman</p>
					</div>
					<div style="display: flex; justify-content: space-between;">
						<p><?php echo $data['tgl']; ?></p>
						<button onclick="location.href='?page=reading&kode=<?php echo $data['id_buku']; ?>'" style="background-color: rgb(44, 103, 137); border: none; color: #fff; border-radius: 5px; padding-left: 15px; padding-right: 15px;">Baca</button>
					</div>
				</div>
			</div>
		</div>
		<?php } 
		}?>
</section>