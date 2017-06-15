<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        Login
        </title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url() ;?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ;?>assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ;?>assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url() ;?>assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ;?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ;?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ;?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ;?>assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
    <!-- <img src="<?php echo base_url() ;?>assets/images/bg.jpg" alt="gambar" class="bg"/> -->

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Selamat Datang . . . . <br> Calon Karyawan Airmedia</h1>
                            <div class="description">
                            	<p>
	                            	Sebelum anda dapat melakukan TES anda harus Login terlebih dahulu dengan akun yang telah anda buat
                            	</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">


                           <!--  <div class="samping">    
                            <img src="<?php echo base_url() ;?>assets/img/800x400/01.jpg">
                            </div> -->
                            <!-- <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Sign up now</h3>
                                        <p>Fill in the form below to get instant access:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                <form method="post" action="" role="login">
                                    <img src="<?php echo base_url() ;?>assets/img/logo.png" alt="" class="img-responsive" />
                                    <div>
                                    <h3> Login User </h3>
                                    </div>
                                    <div>
                                    <?php echo form_open(base_url().'Login/')   ?>  
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
                                    <?php echo form_close()?> -->

                                    <!-- <a href="#">Reset password</a> or <a href="#">create account</a>  -->
                               <!--  </form> -->
                                    <!-- <form role="form" action="" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-first-name">First name</label>
                                            <input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Last name</label>
                                            <input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-about-yourself">About yourself</label>
                                            <textarea name="form-about-yourself" placeholder="About yourself..." 
                                                        class="form-about-yourself form-control" id="form-about-yourself"></textarea>
                                        </div>
                                        <button type="submit" class="btn">Sign me up!</button>
                                    </form> -->
                           <!--      </div>
                            </div> -->
                            
                        </div>
                    
                    
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="row">
                        <div class="col-sm-5">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login ke Website kami</h3>
                                        <p>Masukkan NO KTP dan Password untuk Login</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="" method="post" class="login-form">
                                        <div>
                                        <?php echo form_open(base_url().'Login/')   ?>  
                                        <?php echo validation_errors(); ?>  
                                        <span><b><?php echo $login_failed; ?></b></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-id_ktp">ID KTP</label>
                                            <input type="text" name="id_ktp" value="" required class="form-control" placeholder="Masukkan ID KTP" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="password" name="password" value="" required class="form-control" placeholder="Masukkan password" />
                                        </div>
                                        <input type="submit" name="submit_login" class="btn btn-primary btn-block" value="Login">  
                                        <!-- <button type="submit" name="submit_login" class="btn btn-primary btn-block" value=""> Login </button> -->
                                       <!--  <div class="form-group">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="text" name="id_ktp" placeholder="NO KTP..." class="form-id_ktp form-control" id="form-id_ktp">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                        </div>
                                        <button type="submit" name="submit-login" class="btn">Log in</button> -->
                                        <?php echo form_close()?>
                                    </form>
                                </div>
                            </div>
                        
                            <!-- <div class="social-login">
                                <h3>...or login with:</h3>
                                <div class="social-login-buttons">
                                    <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                        <i class="fa fa-facebook"></i> Facebook
                                    </a>
                                    <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                    <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                        <i class="fa fa-google-plus"></i> Google Plus
                                    </a>
                                </div>
                            </div> -->
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				<p>PT. Air Media Persada. 2017</p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="<?php echo base_url() ;?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url() ;?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ;?>assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>