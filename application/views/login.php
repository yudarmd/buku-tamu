<?php
	$status = $this->session->userdata("status");
	if (isset($status) == "login") {
		redirect('beranda');
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Doodle I Fast build Admin dashboard for any platform</title>
		<meta name="description" content="Doodle is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Doodle Admin, Doodleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="./assets/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="./assets/dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="./assets/dist/img/logo.png" alt="brand"/>
						<span class="brand-text">Tamuku</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Belum Punya Akun?</span>
					<a class="inline-block btn btn-primary btn-rounded btn-outline" href="signup.html">Buat Akun</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Masuk Ke Tamuku</h3>
											<h6 class="text-center nonecase-font txt-grey">Masukkan Username Dan Password Anda</h6>
										</div>	
										<div class="form-wrap">
											<form action="login/aksi_login" method="post">
												<div class="form-group">
													<label class="control-label mb-10" for="username">Nama Pengguna</label>
													<input type="text" class="form-control" required="" id="username" name="username" placeholder="Masukkan Nama Pengguna">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="password">Kata Sandi</label>
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" id="password" name="password" placeholder="Masukkan Kata Sandi">
												</div>
												
												<div class="form-group text-center">
													<button type="submit" name="submit" class="btn btn-primary btn-rounded">Masuk</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="./assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="./assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="./assets/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="./assets/dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="./assets/dist/js/init.js"></script>
	</body>
</html>
