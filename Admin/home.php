<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<style>
		div.main
		{
			width:350px;
			padding: 25px 55px 5px;
			background-color: #bbffb8a6;
			border: 15px solid white;
			box-shadow: 0 0 10px;
			border-radius: 2px;
			font-size: 13px;
		}
		
		#register 
		{
			font-size: 20px;
			background-color:rgb(120, 108, 205); 
			color:rgb(57, 255, 219);
			border: 3px solid #0F799E;
			Border-radius:50px;
			color:red;
			font-weight: bold;
			padding-top: -30px;
			padding-bottom: 7px;
			text-shadow:0px 1px 0px #13506D;
			margin: 4px 8px;
			background-color: #9fff73;
			cursor: pointer;
			width: 35%;
		}
		#register:hover {
				background: linear-gradient(#36caf0 5%, #73ffca 100%);
			}

	</style>
	<script src='https://www.google.com/recaptcha/api.js'></script>
		<script>

				function form()
				{
					var username = document.getElementById("user").value;
					var password = document.getElementById("password").value; 

					if(username == "")
					{
						document.getElementById("userr").innerHTML="* USERNAME IS EMPTY*";
						return false;
					} 

					if(!isNaN(username))
					{
						document.getElementById("userr").innerHTML=" * ONLY CHARACTER ALLOWED*";
						return false;	
					}

					else
					{
						document.getElementById("userr").innerHTML="";
					}

					if(password == "")
					{
						document.getElementById("passwrd").innerHTML="*PASSWORD IS EMPTY *";
						return false;
					}

					if(password.length < 5 || password.length > 20)
					{
						document.getElementById("passwrd").innerHTML="Password Length Must Be Between 5 and 20";
						return false;
					}

					else
					{
						document.getElementById("passwrd").innerHTML="";
					} 

					var response = grecaptcha.getResponse();
   		 		
   		 			{
	    				if(response.length == 0) 
	    				{
	        				document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red; font-size:30px;">Please complete the reCAPTCHA challenge!</span>'; 
	        				return false;
	    				}
	    				return true;
					}
				}
 				
				/*function verifyCaptcha() 
				{
    				document.getElementById('g-recaptcha-error').innerHTML = '';
				} 
				}
			
			/*function submitUserForm() 
			{
   		 		var response = grecaptcha.getResponse();
   		 		
   		 		{
    				if(response.length == 0) 
    				{
        				document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red; font-size:30px;">Please complete the reCAPTCHA challenge!</span>'; 
        				return false;
    				}
    				return true;
				}
 				
				/*function verifyCaptcha() 
				{
    				document.getElementById('g-recaptcha-error').innerHTML = '';
				} 
			}*/

		</script>
</head>
<body style="background: linear-gradient(45deg, #ff5733, #5733ff , #33ff57, #ff3357, #33ff57);">
	<center style="margin-top: 35px;">
			<div class="main">
		<form method="POST" style="color:black" onsubmit="return form()">
				
			<div class="name" style="margin-top: -30px;">
				<h5 align="center" style="color:red; font-size:35px;">Log in</h5>
			</div>

				<img src="user.png" width="70" height="70" style="margin-top: -30px;"></img> <br>
		
			<div class="user-label">
				<label style="color: #0f00f7; font-size:25px;">Username : </label>
			</div>

			<div class="user-box">
				<input type="text" id="user" name="txtname" size="30" placeholder="Enter Username" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space;  Border-radius:10px; Font-size:15px; width: 95%; height: 25px; padding-left: 5px;margin-top: 8px;box-shadow : 0 0 5px #00F5FF;border: 2px solid #00F5FF;color: #4f4f4f;font-size: 16px;">
				<span id="userr" style="color:red; font-size:20px;"></span>
			</div>

			<br><br>
			
			<div class="pass-label">
				<label style="color: #0f00f7; font-size:25px;">Password : </label>
			</div>

			<div class="pass-box">
				<input type="text" id="password" name="txtpwd" size="30" placeholder="Enter Password" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px; width: 95%; height: 25px; padding-left: 5px;margin-top: 8px;box-shadow : 0 0 5px #00F5FF;border: 2px solid #00F5FF;color: #4f4f4f;font-size: 16px;">
				<span id="passwrd" style="color:red; font-size:20px;"></span>
			</div>

			<br><br>

			<div class="forget-pass">
				<a href="" style="color: darkblue; font-size: 20px; padding-left: 210px; Text-decoration:none;"> 
					Forget Password 
				</a>
			</div>

			<br><br>
			
			<div class="rem-me" style="font-size: 20px; margin-right: 25vh;">
				<input type="checkbox" name="" style="position: revert-layer;">Remember Me
			</div>

			<br>
			
			<div class="g-recaptcha" data-sitekey="6LcY1M8mAAAAAFITXd7NPTHA0WoVKwmxbaMl5ZFt" ></div>
	    	<div id="g-recaptcha-error"></div>
	    	<br>

	    	<button type="submit" name="btnlogin" value="Log in" id="register">Submit</button>
			
			
		</form>
	</div>
	</center>
</body>
</html>


<?php
	if(isset($_POST['btnlogin']))
	{
		$uname=$_POST['txtname'];
		$upwd=$_POST['txtpwd'];

		if($uname=="Anant" and $upwd==2040707)
		{
			echo '<script type="text/javascript">
					window.location="main.php"</script>';
		}
		else
		{
			//echo "<center>";
			//echo "<font size=30 color='red'>";
			//echo "Your Id & Password Is Wrong...!!";
			//echo "</font>";
			//echo "</center>";
			echo "<script>alert('Username And Password Are Wrong !!');</script>";
		}
	}
?>

