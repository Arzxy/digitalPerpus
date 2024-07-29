<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_buku WHERE id_buku='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
		$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);

    }
?>

<div class="modal fade" id="tesModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
	  	<b><?php echo $data_cek['judul_buku'];?></b>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
        </button>
		<br><br>
        <object type="application/pdf" data="pdf/<?php echo $data_cek['file_buku'];?>" width="100%" height="500" style="height: 85vh;">No Support</object>
      </div>
    </div>
  </div>
</div>