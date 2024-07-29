<?php
if(isset($_GET['kode'])){
    $sql_cek = "select * from tb_buku where id_buku='".$_GET['kode']."'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>

<?php
    $pdf = $data_cek['file_buku'];
    if (file_exists("pdf/$pdf")){
        unlink("pdf/$pdf");
    }
	
    $banner = $data_cek['file_banner'];
    if (file_exists("pdf_banner/$banner")){
        unlink("pdf_banner/$banner");
    }

    $sql_hapus = "DELETE FROM tb_buku WHERE id_buku='".$_GET['kode']."'";
    $query_hapus = mysqli_query($koneksi, $sql_hapus);
    if ($query_hapus) {
        echo "<script>
        Swal.fire({title: 'Hapus buku Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'index.php?page=MyApp/data_buku'
        ;}})</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Hapus buku Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'index.php?page=MyApp/data_buku'
        ;}})</script>";
    }
