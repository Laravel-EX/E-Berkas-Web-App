<?php 
  $id=$_REQUEST['id'];
  if (isset($id)) {
    $aksi = 'edit';
    $sql = mysqli_query($db, "SELECT * FROM kategori WHERE id_cat='$id' ");
    $ambil = mysqli_fetch_array($sql);
  } 
  else {
    $aksi = 'tambah';
  }
?>
<!-- DataTables Example -->
<div class="card mb-3">
	<div class="card-header text-capitalize">
	  <i class="fas fa-table"></i>
	  Form <?php echo $aksi; ?> Kategori
	</div>
	<div class="card-body">
		<form action="?page=kategori/proses.php" method="post">
			<input type="hidden" name="aksi" value="<?php echo $aksi; ?>">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
			  <div class="form-row">
			    <div class="col-md-5">
			      <div class="form-label-group">
			        <input type="text" name="kategori" id="firstName" class="form-control" placeholder="Kategori" required="required" value="<?php echo $ambil['nama_cat']; ?>">
			        <label for="firstName">Kategori</label>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="box-footer">
				<input type="submit" name="tombol" class="btn btn-danger" value="Simpan">
        <button type="reset" class="btn btn-primary"  onclick=self.history.back()>Kembali</button>
			</div>
		</form>
	</div>
</div>