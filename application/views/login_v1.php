<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Login</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ;?>assets/css/styles.css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body background="<?php echo base_url() ;?> assets/images/bg.jpg">
	<section class="container login-form">
		<section>
			<form method="post" action="" role="login">
				<img src="<?php echo base_url() ;?>assets/img/logo.png" alt="" class="img-responsive" />
				<div>
				<h3> Login User </h3>
				</div>
				<div>
				<?php echo form_open(base_url().'Login/')	?>	
				<?php echo validation_errors(); ?>	
				<span><b><?php echo $login_failed; ?></b></span>
				</div>
				<div class="form-group">
					<input type="text" name="id_ktp" value="" required class="form-control" placeholder="Masukkan ID KTP" />
					<span class="glyphicon glyphicon-user"></span>
				</div>
				
				<div class="form-group">
					<input type="password" name="password" value="" required class="form-control" placeholder="Masukkan password" />
					<span class="glyphicon glyphicon-lock"></span>
				</div>
				
				<input type="submit" name="submit_login" class="btn btn-primary btn-block" value="Login">
				<?php echo form_close()?>

				<!-- <a href="#">Reset password</a> or <a href="#">create account</a>  -->
			</form>
		</section>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="<?php echo base_url() ;?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>