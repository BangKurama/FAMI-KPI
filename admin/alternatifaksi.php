<?php
include 'header.php';
if (isset($_GET['aksi'])) {
	if ($_GET['aksi']=='tambah') { ?>
<link rel="stylesheet" href="../asset/css/csstop.css" />
		<div class="container">
	<div class="row">
		<ol class="breadcrumb"><h4>ALTERNATIF/ TAMBAH DATA</h4></ol>
	</div>

	<div class="panel panel-container">
		<div class="boostrap-table">
		
		<form action="alternatifproses.php?proses=prosestambah" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label>Nama Alternatif</label>
				<input type="text" name="nama_alternatif" class="form-control
				" placeholder="nama alternatif">
			</div>
			
			<div class="modal-footer">
				<a href="alternatif.php" class="btn btn-success">KEMBALI</a>
				<input type="submit" class="btn btn-success" value="SIMPAN">
			</div>
		</form>
		</div>
	</div>
</div>

	<?php }else if($_GET['aksi']=='ubah'){ ?>

		<div class="container">
	<div class="row">
		<ol class="breadcrumb"><h4>ALTERNATIF/ UBAH DATA</h4></ol>
	</div>

	<div class="panel panel-container">
		<div class="boostrap-table">

			<?php
			$data = mysqli_query($conn, "SELECT * FROM tbl_alternatif WHERE id_alternatif='$_GET[id_alternatif]'");
				           while ($a=mysqli_fetch_array($data)) {
			?>
		
		<form action="alternatifproses.php?proses=prosesubah" method="post" enctype="multipart/form-data">

			<input type="hidden" name="id_alternatif" value="<?php echo $a['id_alternatif']; ?>">

			<div class="form-group">
				<label>Nama Alternatif</label>
				<input type="text" name="nama_alternatif" class="form-control
				" placeholder="nama alternatif" value="<?php echo $a['nama_alternatif']; ?>">
			</div>
			
			<div class="modal-footer">
				<a href="alternatif.php" class="btn btn-success">KEMBALI</a>
				<input type="submit" class="btn btn-success" value="UBAH">
			</div>
		</form>
		<?php } ?>
		</div>
	</div>
</div>

	<?php } } ?>