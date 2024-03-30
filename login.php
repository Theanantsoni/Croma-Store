<?php
	include "Admin/croma_sql.php";
?>




 <?php
	include "includes/header2.php";
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chroma Store</title>
	<style>
		div.main
		{
			width:500px;
			padding: 5px 5px 5px;
			background-color: #bbffb8a6;
			border: 15px solid lightgreen;
			box-shadow: 0 0 10px;
			border-radius: 2px;
			font-size: 13px;
		}
		
		#register 
		{
			font-size: 25px;
			background-color:rgb(120, 108, 205); 
			color:rgb(57, 255, 219);
			border: 3px solid #0F799E;
			Border-radius:25px;
			color:red;
			font-weight: normal;
			padding-top: 5px;
			padding-bottom: 5px;
			text-shadow:0px 1px 0px #13506D;
			margin: 4px 8px;
			background-color: #9fff73;
			cursor: pointer;
			width: 30%;
		}
		#register:hover {
				background: linear-gradient(#36caf0 5%, #73ffca 100%);
			}
		
	</style>
	<script src='https://www.google.com/recaptcha/api.js'></script>
		<script>

				function form()
				{
					//Email javascript ...

					var email = document.getElementById("uemail").value;
    				var emailPattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/; // Regular expression for email validation
					
					// Check if the email matches the pattern
					if(email == "")
					{
						document.getElementById("uemail").innerHTML="*Please Enter YourEmail Address*";
						return false;
					}
					if (emailPattern.test(email))   //if (email.match(emailPattern))
					{
						document.getElementById("useremail").innerHTML="";
					} 
					else 
					{
						document.getElementById("useremail").innerHTML="*Invalid email address. Please enter a valid email.*";
						return false; 
					}
					
					//password javascript ...

					var password = document.getElementById("password").value; 

					if(password == "")
					{
						document.getElementById("passwrd").innerHTML="*PASSWORD IS EMPTY *";
						return false;
					}

					if(password.length < 5 || password.length > 20)
					{
						document.getElementById("passwrd").innerHTML="<br>*Password Length Must Be Between 5 and 20";
						return false;
					}

					else
					{
						document.getElementById("passwrd").innerHTML="";
					} 
				}
			
			function submitUserForm() 
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
				} */
			}

		</script>
</head>
<body bgcolor="">
	<center>
			<div class="main">
		<form method="POST" style="color:black"  onsubmit="return form()">
				
			<div class="name">
				<h1 align="center" style="color:red;">Login</h1> <br>
			</div>

				<img src="../Croma Store/assests/images/user.png" width="70" height="70"></img> <br><br><br>
		
			<div class="user-label">
				<label style="color: #0f00f7; font-size:25px; margin-right: 30vh;" >Email ID : </label>
			</div>

			<div class="user-box">
				<input type="text" id="uemail" name="txtemail" size="30" placeholder="Enter Email" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space;  Border-radius:10px; Font-size:15px; width: 45%; height: 45px; padding-left: 5px; margin-top: -45px; margin-left: 25vh; position: revert-layer; box-shadow : 0 0 5px #00F5FF;border: 2px solid #00F5FF;color: #4f4f4f;font-size: 16px;"> <br>
				<span id="useremail" style="color: red;"></span>
			</div>

			<br>
			
			<div class="pass-label">
				<label style="color: #0f00f7; font-size:25px; margin-right: 30vh;">Password : </label>
			</div>

			<div class="pass-box">
				<input type="text" id="password" name="txtpwd" size="30" placeholder="Enter Password" style="background-color: white; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px; width: 45%; height: 45px; padding-left: 5px;margin-top: 8px;box-shadow : 0 0 5px #00F5FF; margin-top: -45px; margin-left: 25vh; border: 2px solid #00F5FF;color: #4f4f4f;font-size: 16px;"> <br>
				<span id="passwrd" style="color: red;"></span>
			</div>

			<br><br>

			<div class="forget-pass">
				<a href="" style="color: darkblue; font-size: 20px; margin-left: 25vh; Text-decoration:none;"> 
					Forget Password 
					<img src="../Croma Store/assests/img/forgot_password.avif" width="30" height="30">
				</a>
			</div>

			<br><br>
			
			<div class="rem-me" style="font-size: 20px; margin-right: 25vh;  margin-top: 10px;">
				<input type="checkbox" name="chkrem" style="position: revert-layer; height: 20px; width: 20px;">&nbsp Remember Me
			</div>

			<br>
			
			<div class="g-recaptcha" data-sitekey="6LcY1M8mAAAAAFITXd7NPTHA0WoVKwmxbaMl5ZFt" ></div>
	    	<div id="g-recaptcha-error"></div>
	    	<br>

			<input type="submit" name="btnlogin" value="Log in" id="register" onclick="return submitUserForm()">
			
		</form>
	</div>
	</center>
</body>
</html>


<?php
	include "includes/footer.php";
?>


<?php
	if(isset($_REQUEST['btnlogin']))
	{
		 $useremail=$_REQUEST['txtemail'];
		 $userpassword=$_REQUEST['txtpwd'];

		$res=mysqli_query($con, "select * from store where u_email='$useremail' and u_pwd='$userpassword'");
		$result=mysqli_fetch_array($res);

		if($result)
		{
			echo '<script type="text/javascript">
				window.location="index1.php"
				</script>';
		}
		else
		{
			echo "<script>alert('Your Email And Password Are Wrong !!');</script>";
			//echo "<center style='color:red; font-size: 25px; border: double 5px;'>";
			//echo "Your Email And Password Are Wrong !!";
			//echo "</center>";
		}
	}
?>