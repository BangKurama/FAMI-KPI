<?php
include 'header.php';
?>

<link rel="stylesheet" href="../asset/css/csstop.css" />
<div class="container">
	<div class="row">
		<ol class="breadcrumb"><h4>ALTERNATIF</h4></ol>
	</div>

	<div class="panel-container">
		<div class="boostrap-table">
			<a href="alternatifaksi.php?aksi=tambah" class="btn btn-success">TAMBAH DATA</a>
			<hr>
			<div class="table-responsive">
				<table class="table table-border">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Nama Alternatif</th>
							<th class="text-center">Opsi</th>
						</tr>
					</thead>

					<tbody>
						<?php
				           $data = mysqli_query($conn, "SELECT * FROM tbl_alternatif order by id_alternatif");
				           $no=1;
				           while ($a=mysqli_fetch_array($data)) {
				            	?>
				            	<tr>
				            		<td class="text-center"><?php echo $no++ ?>
				            		</td>
				            		<td class="text-center"><?php echo $a['nama_alternatif']; ?>
				            		</td>
				            		
				            		<td class="text-center">
				            			<a href="alternatifaksi.php?id_alternatif=<?php echo $a['id_alternatif']; ?>&aksi=ubah" class="btn btn-success">UBAH</a>
				            			<a href="alternatifproses.php?id_alternatif=<?php echo $a['id_alternatif']; ?>&proses=proseshapus" class= "btn btn-danger">HAPUS</a>
				            		</td>
				            	</tr>
				            <?php }?>
					</tbody>
				</table>
			</div> 
		</div>
	</div>
</div>
<?php
?>

