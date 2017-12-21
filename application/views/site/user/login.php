<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>EMS | Sign In </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src ="../js/jquery-1.11.1.min.js"></script>
<!-- //js -->

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>

<!-- login -->
	<div class="w3_login" style="background: #a5d6a7; height: auto;">
		
		<div class="w3_login_module">
			<div class="module form-module">
				<div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				</div>
				<div class="form">
					<div style="text-align: center; font-weight: bold; color: blue; font-size: 14pt">
						Login to your account
					</div>
					
					<!-- <form action="form" id="form" method="post">
					  	<input type="text" name="id" placeholder="id" required=" " id="param_id">
					  	<input type="password" name="Password" placeholder="Password" required=" " id="param_password">
					  	<input type="submit" value="Login">
					</form> -->

					<form class="form" id="form" action="" method="post">
		           <fieldset>
		                <div class="formRow">
		                    <label for="param_id">Tên đăng nhập:</label>
		                    <div class="loginInput"><input type="text" name="id" id="param_id" /></div>
		                    <div class="clear"></div>
		                </div>
		                
		                <div class="formRow">
		                    <label for="param_password">Mật khẩu:</label>
		                    <div class="loginInput"><input type="password" name="password" id="param_password" /></div>
		                    <div class="clear"></div>
		                </div>
		                
		                <div class="loginControl">
		                	<?php echo form_error('login'); ?>
		                    <input type='hidden' name="submit" value='1'/>
		                    <input type="submit"  value="Đăng nhập" class="dredB logMeIn" />
		                    <div class="clear"></div>
		                </div>
		            </fieldset>
		        </form>
				</div>
				<!-- <div class="form">
					<h2>Create an account</h2>
					<form action="#" method="post">
					  	<input type="text" name="Username" placeholder="Username" required=" ">
					  	<input type="password" name="Password" placeholder="Password" required=" ">
					  	<input type="email" name="Email" placeholder="Email Address" required=" ">
					 	<input type="text" name="Phone" placeholder="Phone Number" required=" ">
					  	<input type="submit" value="Register">
					</form>
				</div> -->
				<div class="cta"><a href="#">Forgot your password?</a></div>
			</div>
		</div>
		<script>
			$('.toggle').click(function(){
			  // Switches the Icon
			  $(this).children('i').toggleClass('fa-pencil');
			  // Switches the forms  
			  $('.form').animate({
				height: "toggle",
				'padding-top': 'toggle',
				'padding-bottom': 'toggle',
				opacity: "toggle"
			  }, "slow");
			});
		</script>
	</div>
<!-- //login -->
		
</body>
</html>