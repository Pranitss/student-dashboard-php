
<!doctype html>
<html lang="en">

<head>
	<title>Forgot Password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

	<style>
		.alert {
			padding: 10px;
			background-color: #ff5d5d;
			color: white;
			margin-bottom: 2rem;
		}

		.closebtn {
			margin-left: 15px;
			color: white;
			font-weight: bold;
			float: right;
			font-size: 20px;
			line-height: 20px;
			cursor: pointer;
			transition: 0.3s;
		}

		.closebtn:hover {
			color: black;
		}
	</style>
</head>

<body>
<form action="forgotPasswordAction.php" method="POST">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrap d-md-flex">
						<div class="d-none d-md-block text-wrap p-4 p-lg-5 img" style="background-image: url(images/abc.jpg);">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="row justify-content-center py-md-5">
								<div class="col-lg-9">
									<div class="social-wrap">
										<span id="error1"> 

										</span>
										<h3 class="mt-0 pb-4 text-center" id="title4">Forgot Password</h3>
									</div>
									
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="email">Email</label>
													<input type="email" name="email" class="form-control" placeholder="Plese Enter Your linked Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<br>
													<button type="submit" name="reset_password" class="btn btn-primary submit p-3">Reset Password</button>
												</div>
											</div>
										</div>
									
									<div class="w-100">
										<p class="mt-4">Back to <a href="login.php">Sign In</a></p>
										<a href="admin_register/admin_panel.php">Admin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</form>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
