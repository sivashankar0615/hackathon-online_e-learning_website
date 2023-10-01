<?php include('server.php') ?>
<?php include('errors.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<title>Login SignUp</title>
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
  <script>
  $(document).ready(function(){
    $("form").submit(function(){
      alert("Great Job !");
    });
  });
  </script>
</head>
<body>
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" id="log" onclick="login()" style="color: #fff;">Log In</button>
				<button type="button" class="toggle-btn" id="reg" onclick="register()">Register</button>
			</div>
			<div class="social-icons">
				<img src="images/icon/fb2.png">
				<img src="images/icon/insta2.png">
				<img src="images/icon/tt2.png">
			</div>
			
			<!-- Login Form -->
			<form id="login" class="input-group" action="login.php" method="post">
			<?php include('errors.php'); ?>
				<div class="inp">
					<img src="images/icon/user.png"><input type="text" id="email" class="input-field" placeholder="Username or Phone Number" name="username" style="width: 88%; border:none;" required="required" value="<?php echo $username; ?>">
				</div>
				<div class="inp">
					<img src="images/icon/password.png"><input type="password" id="password" class="input-field" placeholder="Password" name="password" style="width: 88%; border: none;" required="required">
				</div>
				<input type="checkbox" class="check-box">Remember Password
				<button type="submit" class="submit-btn" name="login_user">Log In</button>
				
			</form>


			<div class="other" id="other">
				<div class="instead">
					<h3>or</h3>
				</div>
				<button class="connect" onclick="google()">
					<img src="images/icon/google.png"><span>Sign in with Google</span>
				</button>
			</div>
			
			<!-- Registration Form -->
			<form id="register" class="input-group" method="post" action="login.php">
			<?php include('errors.php'); ?>
				<input type="text" class="input-field" placeholder="Full Name" name="username" required="required" value="<?php echo $username; ?>">
				<input type="email" class="input-field" placeholder="Email Address" name="email" required="required" value="<?php echo $email; ?>">
				<input type="password" class="input-field" placeholder="Create Password" name="password_1" required="required">
				<input type="password" class="input-field" placeholder="Confirm Password" name="password_2" required="required">
				<input type="checkbox" class="check-box" id="chkAgree" onclick="goFurther()">I agree to the Terms & Conditions
				<button type="submit" id="btnSubmit" class="submit-btn reg-btn" name="reg_user">Register</button>
			</form>
		</div>
		<!-- <script type="text/javascript" src="script.js"></script> -->
</body>
</html>