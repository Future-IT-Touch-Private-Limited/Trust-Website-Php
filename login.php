<?php require 'conn.php';
$sql = mysqli_query($conn,"SELECT *  FROM `footer` ORDER BY `id` DESC ");
$row = mysqli_fetch_assoc($sql);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Admin - Login </title>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
				<!-- Datatables CSS -->
		<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.min.css">
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">  </head>
    		
<div class="main-wrapper login-body">
<div class="login-wrapper">
				<div class="container">
				
					<img class="img-fluid logo-dark mb-2" src="../images/<?php echo $row['logo']; ?>" alt="Logo">
					<div class="loginbox">
						
						
						<div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<form action="administer/action.php?act=login" method="POST">

									<div class="form-group">

										<label class="form-control-label">Email Address</label>
										<input type="email" name="email" class="form-control">
									</div>
									<div class="form-group">
										<label class="form-control-label">Password</label>
										<div class="pass-group">
											<input type="password" name="password" class="form-control pass-input">
											<span class="fas fa-eye toggle-password"></span>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-6">
												<!-- <div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="cb1">
													<label class="custom-control-label" for="cb1">Remember me</label>
												</div> -->
											</div>
											<div class="col-6 text-right">
												<a class="forgot-link" href="forgot-password">Forgot Password ?</a>
											</div>
										</div>
									</div>
									<button class="btn btn-lg btn-block btn-primary" type="submit">Login</button>
									<!-- <div class="login-or">
										<span class="or-line"></span>
										<span class="span-or">or</span>
									</div> -->
									<!-- Social Login -->
									<!-- <div class="social-login mb-3">
										<span>Login with</span>
										<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
									</div> -->
									<!-- /Social Login -->
									<!-- <div class="text-center dont-have">Don't have an account yet? <a href="register">Register</a></div> -->
								</form>
								<p class="my-4"><?php echo $_SESSION['msg'] ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Main Wrapper -->
</div>
<!-- jQuery -->
		<script src="assets/js/jquery-3.5.1.min.js"></script>	
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>		
		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>	
		<!-- Slimscroll JS -->
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<!-- Map JS -->
				<!-- Form Validation JS -->
        <script src="assets/js/form-validation.js"></script>
		<!-- Mask JS -->
		<script src="assets/js/jquery.maskedinput.min.js"></script>
        <script src="assets/js/mask.js"></script>
		<!-- Datatables JS -->
		<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatables/datatables.min.js"></script>
		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		<!-- Datepicker Core JS -->
		<script src="assets/plugins/moment/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<!-- Full Calendar JS -->
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
        <script src="assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>
		<!-- Chart JS -->
				<!-- Custom JS -->
		<script src="assets/js/script.js"></script>  </body>
</html>

<?php unset($_SESSION['msg']); ?>