<?php  
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>


<html>
<head>
	<title>Welcome to Inception!</title>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/register_style.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<!-- <script src="assets/js/register.js"></script> -->
	<link rel="stylesheet" type="text/css" href="assets/css/ultimate.css">
</head>
<body>

	

	<div class="container">

		<div class="forms-container">

			<div class="signin-signup">
				
			
			
			
				<form action="register.php" method="POST" class="sign-in-form">
				<h2 class="title">Sign in</h2>	
				<div class="input-field">
					<i class="fas fa-user"></i>
					<input type="email" name="log_email" placeholder="Email Address" value="<?php 
					if(isset($_SESSION['log_email'])) {
						echo $_SESSION['log_email'];
					} 
					?>" required>
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
					<input type="password" name="log_password" placeholder="Password">
					</div>

					<?php if(in_array("Email or password was incorrect<br>", $error_array)) echo  "Email or password was incorrect<br>"; ?>

					<input type="submit" name="login_button" value="Login" class="btn solid">
					 <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
					

				</form>

			

			

				<form action="register.php" method="POST" class="sign-up-form">
					<h2 class="title">Sign up</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
					<input type="text" name="reg_fname" placeholder="First Name" value="<?php 
					if(isset($_SESSION['reg_fname'])) {
						echo $_SESSION['reg_fname'];
					} 
					?>" required>
					</div>
					<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
					
					

					<div class="input-field">
              <i class="fas fa-user"></i>
					<input type="text" name="reg_lname" placeholder="Last Name" value="<?php 
					if(isset($_SESSION['reg_lname'])) {
						echo $_SESSION['reg_lname'];
					} 
					?>" required>
					</div>
					<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>

				<div class="input-field">
              			<i class="fas fa-envelope"></i>
					<input type="email" name="reg_email" placeholder="Email" value="<?php 
					if(isset($_SESSION['reg_email'])) {
						echo $_SESSION['reg_email'];
					} 
					?>" required>
					</div>
					<div class="input-field">
              <i class="fas fa-envelope"></i>
					<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php 
					if(isset($_SESSION['reg_email2'])) {
						echo $_SESSION['reg_email2'];
					} 
					?>" required>
					</div>
					<?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
					else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
					else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>

					
				 <div class="input-field">
              <i class="fas fa-lock"></i>
					<input type="password" name="reg_password" placeholder="Password" required>
					</div>
					<div class="input-field">
              <i class="fas fa-lock"></i>
					<input type="password" name="reg_password2" placeholder="Confirm Password" required>
					</div>
					<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
					else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
					else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>


					<input type="submit" name="register_button" value="Register" class="btn">
					<br>
					<p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>

					<?php if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)) echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; ?>
					<!-- <a href="#" id="signin" class="signin">Already have an account? Sign in here!</a> -->
				</form>
			</div>

		</div>
	<div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Inception</h3>
            <p>
              Live in your Inception, Play in ours!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="assets/images/backgrounds/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Join the Community</h3>
            <p>
              Trust us now, Thank us later.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="assets/images/backgrounds/register.svg" class="image" alt="" />
        </div>
      </div>

	</div>
<script src="assets/js/register_script.js"></script>

</body>
</html>