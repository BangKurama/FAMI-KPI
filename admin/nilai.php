<?php
include 'header.php';
?>

<link rel="stylesheet" href="../asset/css/csstop.css" />
<div class="container">
	<div class="row">
		<ol class="breadcrumb"><h4>NILAI</h4></ol>
	</div>

	<div class="panel-container">
		<div class="boostrap-table">
			<a href="nilaiaksi.php?aksi=tambah" class="btn btn-success">TAMBAH DATA</a>
			<hr>
			<div class="table-responsive">
				<table class="table table-border">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Nama Alter/natif</th>
							<?php
							$query = mysqli_query($conn,"SELECT * FROM tbl_kriteria"); while ($b=mysqli_fetch_array($query)){
								echo "<th class='text-center'>$b[nama_kriteria]</th>";
							}
							?>

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

				            		<?php
				            		$nomor = $no++;
				            		$kode = $a['id_alternatif'];
				            		$nama = $a['nama_alternatif'];

				            		echo "<td class='text-center'>$nomor
				            		</td>
				            		<td class='text-center'>$nama
				            		</td>";

				            		$query1 = mysqli_query($conn,"SELECT a.nama_subkriteria as sub FROM tbl_subkriteria a, tbl_nilai b WHERE b.id_alternatif='".$kode."' AND a.id_subkriteria=b.id_subkriteria ORDER BY b.id_kriteria"); while ($result = mysqli_fetch_array($query1)){

				            			echo "<td class='text-center'>$result[sub]
				            		</td>";
				            		}

				            		?>

				            		<td class="text-center">
				            			<a href="nilaiaksi.php?id_alternatif=<?php echo $a['id_alternatif']; ?>&aksi=ubah" class="btn btn-success">UBAH</a>
				            			<a href="nilaiproses.php?id_alternatif=<?php echo $a['id_alternatif']; ?>&proses=proseshapus" class= "btn btn-danger">HAPUS</a>
				            		</td>
				            	</tr>
				            <?php }?>
					</tbody>
				</table>
			</div> 
		</div>
	</div>
</div>