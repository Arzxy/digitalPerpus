<?php
$tanggal = date("Y-m-d");

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_buku WHERE id_buku='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<section class="content-header">
	<h1>
		Master Data
		<small>Data Buku</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="index.php">
				<i class="fa fa-home"></i>
				<b>Digital Library</b>
			</a>
		</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah buku</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove">
							<i class="fa fa-remove"></i>
						</button>
					</div>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form action="" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<label>Id Buku</label>
							<input type='text' class="form-control" name="id_buku" value="<?php echo $data_cek['id_buku']; ?>"
							 readonly/>
						</div>

						<div class="form-group">
							<label>Judul Buku</label>
							<input type='text' class="form-control" name="judul_buku" value="<?php echo $data_cek['judul_buku']; ?>" maxlength="900"
							/>
						</div>

						<div class="form-group">
							<label>Penerbit</label>
							<input class="form-control" name="penerbit" value="<?php echo $data_cek['penerbit']; ?>" maxlength="20"
							/>
						</div>

						<div class="form-group">
							<label>File Buku Lama</label>
							<input class="form-control" value="<?php echo $data_cek['file_buku']; ?>" readonly/>
						</div>

						<div class="form-group">
							<label for="file_buku" style="color: #000">Upload Buku Baru</label>
							<input type="file" name="file_buku" id="file_buku">
							<p class="help-block">
								<font color="red">Format file .Pdf"</font>
							</p>
						</div>

						<div class="form-group">
							<label for="file_banner" style="color: #000">Upload Banner Baru</label>
							<input type="file" name="file_banner" id="file_banner">
							<p class="help-block">
								<font color="red">"Format file .Png/.Jpg/.Jpeg"</font>
							</p>
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="?page=MyApp/data_buku" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>

<?php

$sumber = @$_FILES['file_buku']['tmp_name'];
$target = 'pdf/';
$nama_file = @$_FILES['file_buku']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_file);

$sumberr = @$_FILES['file_banner']['tmp_name'];
$targett = 'pdf_banner/';
$nama_filee = @$_FILES['file_banner']['name'];
$pindahh = move_uploaded_file($sumberr, $targett.$nama_filee);

$check_file = !empty($sumber) ? $nama_file : $data_cek['file_buku'];
$check_filee = !empty($sumberr) ? $nama_filee : $data_cek['file_banner'];

if (isset ($_POST['Ubah'])){
	if(!empty($sumber)) {
		$pdf = $data_cek['file_buku'];
		if (file_exists("pdf/$pdf")){
			unlink("pdf/$pdf");
		}
	}
	if(!empty($sumberr)) {
		$banner = $data_cek['file_banner'];
		if (file_exists("pdf_banner/$banner")){
			unlink("pdf_banner/$banner");
		}
	}

	$sql_ubah = "UPDATE tb_buku SET
		judul_buku='".$_POST['judul_buku']."',
		penerbit='".$_POST['penerbit']."',
		tgl='".$tanggal."',
		file_buku='".$check_file."',
		file_banner='".$check_filee."'
		WHERE id_buku='".$_POST['id_buku']."'";
	$query_ubah = mysqli_query($koneksi, $sql_ubah);

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_buku';
            }
        })</script>";
	}else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=MyApp/data_buku';
            }
        })</script>";
		
    }
}

