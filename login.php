<?php
include 'header.php';
?>
<body>
<div class="container">
  	<div class="row">
		<div class="col-sm-offset-2 col-sm-8">

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login</h3>
				</div>
				<div class="panel-body">
					<form action="proses_login.php" method="POST" class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label">NIM</label>
							<div class="col-sm-8">
							  	<input type="text" class="form-control" name="nim">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Password</label>
							<div class="col-sm-8">
							  	<input type="password" class="form-control" name="password">
							</div>
						</div>
						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-8">
						      	<button type="submit" class="btn btn-primary">Login</button>
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
?>