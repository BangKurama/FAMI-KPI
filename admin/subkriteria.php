<?php
include 'header.php';
?>

<link rel="stylesheet" href="../asset/css/csstop.css" />
<div class="container">
	<div class="row">
		<?php
		$data = mysqli_query($conn,"SELECT * FROM tbl_kriteria WHERE id_kriteria = '$_GET[id_kriteria]'");
		$a = mysqli_fetch_array($data);
		?>
		<ol class="breadcrumb"><h4>SUBKRITERIA<a href="kriteria.php"><?php echo $a['nama_kriteria'] ?></a></h4></ol>
	</div>

	<div class="panel-container">
		<div class="boostrap-table">
			<a href="subkriteriaaksi.php?aksi=tambah&id_kriteria= <?php echo $_GET['id_kriteria'] ?>" class="btn btn-success">TAMBAH DATA</a>
			<hr>
			<div class="table-responsive">
				<table class="table table-border">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Nama subkriteria</th>
							<th class="text-center">Nilai</th>
							<th class="text-center">Opsi</th>
						</tr>
					</thead>

					<tbody>
						<?php
				           $data = mysqli_query($conn, "SELECT * FROM tbl_kriteria a, tbl_subkriteria b WHERE a.id_kriteria=b.id_kriteria AND b.id_kriteria='$_GET[id_kriteria]' order by b.id_subkriteria");
				           $no=1;
				           while ($a=mysqli_fetch_array($data)) {
				            	?>
				            	<tr>
				            		<td class="text-center"><?php echo $no++ ?>
				            		</td>
				            		<td class="text-center"><?php echo $a['nama_subkriteria']; ?>
				            		</td>
				            		<td class="text-center"><?php echo $a['nilai_subkriteria']; ?>
				            		</td>

				            		<td class="text-center">
				            			<a href="subkriteriaaksi.php?id_kriteria=<?php echo $a['id_kriteria']; ?>&id_subkriteria=<?php echo $a['id_subkriteria']; ?>&aksi=ubah" class="btn btn-success">UBAH</a>
				            			<a href="subkriteriaproses.php?id_kriteria=<?php echo $a['id_kriteria']; ?>&id_subkriteria=<?php echo $a['id_subkriteria']; ?>&proses=proseshapus" class= "btn btn-danger">HAPUS</a>
				            		</td>
				            	</tr>
				            <?php }?>
					</tbody>
				</table>
			</div> 
		</div>
	</div>
</div>