<?php
include 'header.php';
if (isset($_GET['aksi'])) {
	if ($_GET['aksi']=='tambah') { ?>

<link rel="stylesheet" href="../asset/css/csstop.css" />
		<div class="container">
	<div class="row">
		<ol class="breadcrumb"><h4>SUBKRITERIA/ TAMBAH DATA</h4></ol>
	</div>

	<div class="panel panel-container">
		<div class="boostrap-table">
		
		<form action="subkriteriaproses.php?proses=prosestambah" method="post" enctype="multipart/form-data">

			<input type="hidden" name="id_kriteria" class="form-control
				" value="<?php echo $_GET['id_kriteria'] ?>">

			<div class="form-group">
				<label>Nama Subkriteria</label>
				<input type="text" name="nama_subkriteria" class="form-control
				" placeholder="nama subkriteria">
			</div>

			<div class="form-group">
				<label>Nilai Subkriteria</label>
				<input type="number" name="nilai_subkriteria" class="form-control
				" placeholder="0">
			</div>

			<div class="modal-footer">
				<a href="subkriteria.php?id_kriteria=<?php echo $_GET['id_kriteria'] ?>" class="btn btn-success">KEMBALI</a>
				<input type="submit" class="btn btn-success" value="SIMPAN">
			</div>
		</form>
		</div>
	</div>
</div>

	<?php }else if($_GET['aksi']=='ubah'){ ?>

		<div class="container">
	<div class="row">
		<ol class="breadcrumb"><h4>SUBKRITERIA/ UBAH DATA</h4></ol>
	</div>

	<div class="panel panel-container">
		<div class="boostrap-table">

			<?php
			$data = mysqli_query($conn, "SELECT * FROM tbl_subkriteria WHERE id_subkriteria='$_GET[id_subkriteria]'");
				           while ($a=mysqli_fetch_array($data)) {
			?>
		
		<form action="subkriteriaproses.php?proses=prosesubah" method="post" enctype="multipart/form-data">

			<input type="hidden" name="id_subkriteria" value="<?php echo $a['id_subkriteria']; ?>">

			<input type="hidden" name="id_kriteria" class="form-control
				" value="<?php echo $_GET['id_kriteria'] ?>">

			<div class="form-group">
				<label>Nama Subkriteria</label>
				<input type="text" name="nama_subkriteria" class="form-control
				" placeholder="nama kriteria" value="<?php echo $a['nama_subkriteria']; ?>">
			</div>

			<div class="form-group">
				<label>Nilai Subkriteria</label>
				<input type="number" name="nilai_subkriteria" class="form-control
				" placeholder="0" value="<?php echo $a['nilai_subkriteria']; ?>">
			</div>
			
			<div class="modal-footer">
				<a href="subkriteria.php?id_kriteria=<?php echo $_GET['id_kriteria'] ?>" class="btn btn-success">KEMBALI</a>
				<input type="submit" class="btn btn-success" value="UBAH">
			</div>
		</form>
		<?php } ?>
		</div>
	</div>
</div>

	<?php } } ?>