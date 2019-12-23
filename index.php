<?php
session_start();

if ( isset($_SESSION['nim']) ) {

include 'header.php';
?>
<body>
<?php
include 'menu.php';
?>
<div class="container">
  	<div class="row">
		<div class="col-sm-offset-2 col-sm-8">
		

			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="tambah.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data</a>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>NIM</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Email</th>
							<th>Alamat</th>
							<th></th>
						</tr>
						<?php
						include 'koneksi.php';
						$nomor  = 1;
						$sql    = "select * from mahasiswa";
						$result = mysqli_query($connect,$sql);
						if (mysqli_num_rows($result)>0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo "
								<tr>
									<td>".$nomor++."</td>
									<td>".$row['nim']."</td>
									<td>".$row['nama']."</td>
									<td>".$row['jenis_kelamin']."</td>
									<td>".$row['email']."</td>
									<td>".$row['alamat']."</td>
									<td>
										<a class='btn btn-info btn-xs' href='edit.php?id=".$row['id']."'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Edit</a>
										<a class='btn btn-danger btn-xs' href='delete.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Hapus</a>
									</td>
								</tr>
								";
							}
						}
						?>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>
</body>
<?php
include 'footer.php';

} else {
	header('location:login.php');
}
?>