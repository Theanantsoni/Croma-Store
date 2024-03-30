<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		button{
		padding:30px 70px;
		margin-top:30px;
		border:none;
		
		background-color:sans-serif;
		font-weight:bold;
		font-size:16px;
		color:red;
		border-radius:50px;
		cursor:pointer;
		animation:animate 2s linear infinite;
		}
		@keyframes animate{
			0%{
				background-color:yellow;
			}
			
			20%{
				background-color:green;
			}
			
			40%{
				background-color:blue;
			}
			
			60%{
				background-color:orange;
			}
			
			80%{
				background-color:purple;
			}
			
			100%{
				background-color:pink;
			}
			
			110%{
				background-color:gray;
			}
			
			120%{
				background-color:red;
			}
			
			140%{
				background-color:cyan;
			}
			
			160%{
				background-color:magenta;
			}
			
			180%{
				background-color:olive;
			}
			
			200%{
				background-color:maroon;
			}
			220%{
				background-color:lightgreen;
			}
			240%{
				background-color: #d42ff7;
			}
			260%{
				background-color: #2ff747;
			}
			280%{
				background-color: #822ff7;
			}
			300%{
				background-color: #2f6df7;
			}
		}
	</style>
</head>
<body style="background-image: url('main_pic.jpg'); background-size: cover;">
	<center>
	<form action="" method="POST">
			
			
			<a style="color: red; font-size: 10vh; text-shadow: 3px 2px yellow;">ADMIN PANEL</a><br><br><br><br>

			<img src="adminpic.jpeg" style="height: 100px; border: solid red 5px; border-radius: 50px; width: 100px;"><br><br>

			<a style="font-size: 5vh; color: red;">Anant Soni</a>

			<br>

			<button style="border: 5px solid red; border-radius: 5px; font-size: 30px; padding-top: 15px; padding-bottom: 15px; margin-top: 50px; margin-bottom: 30px; background-color: red;"><a href="display.php" style="color: yellow; text-decoration: none;">MANAGE USER DATA</a></button>

			<br>

			<button style="border: 5px solid red; border-radius: 5px; font-size: 30px; padding-top: 15px; padding-bottom: 15px; margin-top: 30px; margin-bottom: 30px;"><a href="image_add.php" style="color: yellow; text-decoration: none;">MANAGE PRODUCTS</a></button>

			<br>

			<button type="submit" style="border: 5px solid red; border-radius: 5px; font-size: 30px; padding-top: 15px; padding-bottom: 15px; margin-top: 30px;"><a href="home.php" style="color: yellow; text-decoration: none;">Log Out</button>
		
	</form>
	</center>
</body>
</html>