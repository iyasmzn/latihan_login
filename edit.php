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

		<?php
		include 'koneksi.php';
		$ID     = $_GET['id'];
		$sql    = "select * from mahasiswa where id=$ID";
		$result = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Edit Data</h3>
				</div>
				<div class="panel-body">
					<form action="proses_edit.php" method="POST" class="form-horizontal">
						<input type="hidden" name="id" value="<?php echo $ID; ?>">
						<div class="form-group">
							<label class="col-sm-2 control-label">NIM</label>
							<div class="col-sm-8">
							  	<input type="text" class="form-control" name="nim" value="<?php echo $row['nim']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-8">
							  	<input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-sm-8">
							  	<div class="radio">
								  	<label>
								    	<input type="radio" name="jenis_kelamin" value="L" <?php echo ($row['jenis_kelamin']=='L')?'checked':''; ?>> LAKI - LAKI
								  	</label>
								</div>
								<div class="radio">
								  	<label>
								    	<input type="radio" name="jenis_kelamin" value="P" <?php echo ($row['jenis_kelamin']=='P')?'checked':''; ?>> PEREMPUAN
								  	</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Email</label>
							<div class="col-sm-8">
							  	<input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-8">
							  	<textarea class="form-control" name="alamat"><?php echo $row['alamat']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-8">
						      	<a href="index.php" class="btn btn-default">Batal</a>
						      	<button type="submit" class="btn btn-primary">Simpan</button>
						    </div>
						</div>
					</form>
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