
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin login</title>

<link href="<?= base_url()?>adassets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url()?>adassets/css/datepicker3.css" rel="stylesheet">
<link href="<?= base_url()?>adassets/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="<?= base_url()?> adassets/js/html5shiv.js"></script>
<script src="<?= base_url()?> adassets/js/respond.min.js"></script>
<![endif]-->

</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="" method="post">
						<fieldset>
                            <?php echo $error; ?>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input type="submit" class="btn btn-primary" value="Login">
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	



	<script src="<?= base_url()?>adassets/js/jquery-1.11.1.min.js"></script>
	<script src="<?= base_url()?>adassets/js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>adassets/js/chart.min.js"></script>
	<script src="<?= base_url()?>adassets/js/chart-data.js"></script>
	<script src="<?= base_url()?>adassets/js/easypiechart.js"></script>
	<script src="<?= base_url()?>adassets/js/easypiechart-data.js"></script>
	<script src="<?= base_url()?>adassets/js/bootstrap-datepicker.js"></script>

</body>

</html>
