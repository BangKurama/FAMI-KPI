<?php
include 'header.php';
if (isset($_GET['aksi'])) {
	if ($_GET['aksi']=='tambah') { ?>

<link rel="stylesheet" href="../asset/css/csstop.css" />
		<div class="container">
	<div class="row">
		<ol class="breadcrumb"><h4>KRITERIA/ TAMBAH DATA</h4></ol>
	</div>

	<div class="panel panel-container">
		<div class="boostrap-table">
		
		<form action="kriteriaproses.php?proses=prosestambah" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label>Nama kriteria</label>
				<input type="text" name="nama_kriteria" class="form-control
				" placeholder="nama kriteria">
			</div>

			<div class="form-group">
				<label>Bobot kriteria</label>
				<input type="number" name="bobot_kriteria" class="form-control
				" placeholder="0">
			</div>
			
			<div class="form-group">
				<label>Tipe kriteria</label>
				<select name="tipe_kriteria" class="form-control
				">
					<option>Benefit</option>
					<option>Cost</option>
				</select>
			</div>

			<div class="modal-footer">
				<a href="kriteria.php" class="btn btn-success">KEMBALI</a>
				<input type="submit" class="btn btn-success" value="SIMPAN">
			</div>
		</form>
		</div>
	</div>
</div>

	<?php }else if($_GET['aksi']=='ubah'){ ?>

		<div class="container">
	<div class="row">
		<ol class="breadcrumb"><h4>KRITERIA/ UBAH DATA</h4></ol>
	</div>

	<div class="panel panel-container">
		<div class="boostrap-table">

			<?php
			$data = mysqli_query($conn, "SELECT * FROM tbl_kriteria WHERE id_kriteria='$_GET[id_kriteria]'");
				           while ($a=mysqli_fetch_array($data)) {
			?>
		
		<form action="kriteriaproses.php?proses=prosesubah" method="post" enctype="multipart/form-data">

			<input type="hidden" name="id_kriteria" value="<?php echo $a['id_kriteria']; ?>">

			<div class="form-group">
				<label>Nama kriteria</label>
				<input type="text" name="nama_kriteria" class="form-control
				" placeholder="nama kriteria" value="<?php echo $a['nama_kriteria']; ?>">
			</div>

			<div class="form-group">
				<label>Bobot kriteria</label>
				<input type="number" name="bobot_kriteria" class="form-control
				" placeholder="0" value="<?php echo $a['bobot_kriteria']; ?>">
			</div>
			
			<div class="form-group">
				<label>Tipe kriteria</label>
				<select name="tipe_kriteria" class="form-control
				">
				<option selected><?php echo $a['tipe_kriteria']; ?></option>
					<option>Benefit</option>
					<option>Cost</option>
				</select>
				
			</div>
			
			<div class="modal-footer">
				<a href="kriteria.php" class="btn btn-success">KEMBALI</a>
				<input type="submit" class="btn btn-success" value="UBAH">
			</div>
		</form>
		<?php } ?>
		</div>
	</div>
</div>

	<?php } } ?>