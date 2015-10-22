


<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		
	
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
		<link rel="stylesheet" type="text/css" href="css/globalstyle.css" />
	
		<link rel="stylesheet" href="css/logform.css">
		
		<script type="text/javascript" src="js/jquery1.js"></script>
	
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

	<!-- // Load Javascipt -->
  
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="js/modernizr-1.7.min.js"></script>

		
		<script type="text/javascript" src="js/login.form.js"></script>
		
	</head>
	<body>

			<div class="container">
		
			<div id="wrapper">
		<div id="wrappertop"></div>

		<div id="wrappermiddle">
			<h2>Login</h2>
		<form id="loginForm" name="loginForm" action="login.php" method="post">
		<input type="hidden" id="hiddenvar" value=""/>
			<div id="username_input">
			<div> <span id="userlw" style="color:red; font-size:10px; display:none; padding-top: -5px;">* Enter a valid email</span></div>
				<div id="username_inputleft"></div>

				<div id="username_inputmiddle">
				
					<input type="text" name="userlogin" id="userlogin" class="url" value="" />
					<img id="url_user" src="images/image_login/mailicon.png" alt="">
					
				
				</div>
				<div id="username_inputright"></div>
			

			</div>

			<div id="password_input">
	<div><span id="passlw" style="color:red; font-size:10px; display:none; padding-top: -5px;">* Enter a valid password</span></div>
				<div id="password_inputleft"></div>
			
				<div id="password_inputmiddle">
				
				
					<input type="password" name="passlogin" id="passlogin" class="url" value=""/>
					<img id="url_password" src="images/image_login/passicon.png" alt="">
					
				</div>
				
				<div id="password_inputright"> </div>
				
			</div>
			
			<div id="sub">
				<button type="submit" id="submit2" value=""></button>
			</div>


			<div id="links_left">

			<a href="resetpassword.html">Forgot your Password?</a>

			</div>

			<div id="links_right"><a href="register.html">Not a Member Yet?</a></div>

		</div>

		<div id="wrapperbottom"></div>
		
	</div>
	</div>
	
		</form><!-- form -->
		
 

          
		</div>
		
		
		<!-- end of modal views-->				
				
</div>
	
	</body>
</html>