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
					<h3 class="panel-title">Tambah Data</h3>
				</div>
				<div class="panel-body">
					<form action="proses_tambah.php" method="POST" class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label">NIM</label>
							<div class="col-sm-8">
							  	<input type="text" class="form-control" name="nim">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-8">
							  	<input type="text" class="form-control" name="nama">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-sm-8">
							  	<div class="radio">
								  	<label>
								    	<input type="radio" name="jenis_kelamin" value="L"> LAKI - LAKI
								  	</label>
								</div>
								<div class="radio">
								  	<label>
								    	<input type="radio" name="jenis_kelamin" value="P"> PEREMPUAN
								  	</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Email</label>
							<div class="col-sm-8">
							  	<input type="email" class="form-control" name="email">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-8">
							  	<textarea class="form-control" name="alamat"></textarea>
							</div>
						</div>
						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-8">
						      	<a href="index.php" class="btn btn-default">Batal</a>
						      	<button type="submit" class="btn btn-primary">Submit</button>
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