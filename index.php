<?php
session_start();
$_SESSION['userPage'] = "<h5>Welcome User</h5>";
$_SESSION['AdminPage'] = "<h5>Welcome Admin</h5>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Navbar Dropdown Login and Signup Form with Social Buttons</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="index.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
</script>
</head> 
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a href="#" class="navbar-brand">Lara<b>Mohammed </b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav ml-auto action-buttons">
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle mr-4">Login</a>
                <div class="dropdown-menu action-form">
					<form action="results.php" method="post">
						<p class="hint-text">Sign in with your social media account</p>
						<div class="form-group social-btn clearfix">
							<a href="#" class="btn btn-secondary facebook-btn float-left"><i class="fa fa-facebook"></i> Facebook</a>
							<a href="#" class="btn btn-secondary twitter-btn float-right"><i class="fa fa-twitter"></i> Twitter</a>
						</div>
						<div class="or-seperator"><b>or</b></div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" name="user" required="required">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="pass" required="required">
						</div>
						<input type="submit" class="btn btn-primary btn-block" value="submit" name="submit">
						<div class="text-center mt-2">
							<a href="#">Forgot Your password?</a>
						</div>
					</form>
                </div>
			</div>
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle sign-up-btn">Sign up</a>
                <div class="dropdown-menu action-form">
					<form action="results.php" method="post">
						<p class="hint-text">Fill in this form to create your account!</p>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" required="required" name="newname">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" required="required"  name="newpass">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Confirm Password" required="required">
                        </div>
                        <div class="form-group">
							<input type="text" class="form-control" placeholder="Phone Number" required="required">
						</div>
						<div class="form-group">
							<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
						</div>
						<input name="register" type="submit" class="btn btn-primary btn-block" value="Sign up">
					</form>
				</div>
			</div>
        </div>
	</div>
</nav>

<div class="container-sm">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="https://d2v1hpltdjq1rf.cloudfront.net/static/account/assets/images/ic-login.png" class="img-fluid" alt="">
					</div>
					<div class="carousel-item">
						<img src="https://farmsoc.com/wp-content/uploads/2020/04/mobile-login-concept-illustration_114360-135.jpg" alt="">
					</div>
					<div class="carousel-item">
						<img src="https://www.backlsh.in/tracking/images/register-cover.jpg" class="img-fluid" alt="">
					</div>						
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
					<span><i class="fa fa-angle-left"></i></span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" data-slide="next">
					<span><i class="fa fa-angle-right"></i></span>
				</a>
			</div>
		</div>
	</div>
</div>


<footer class="page-footer font-small teal pt-4 navbar navbar-expand-lg navbar-light bg-light">
  <div class="navbar-brand">2020©<b>Copyright:</b>Lara<b>Mohammed</b>
  </div>
</footer>
</body>
</html>
