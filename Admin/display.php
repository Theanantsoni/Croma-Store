<?php
	include "croma_sql.php";
?>

<?php

	$data = mysqli_query($con, "SELECT * FROM store");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- Icon Bootstrap Online link -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<style>
		.back{
    left: 90vh;
    top:50vh;
    text-decoration-style: ;
    }
    button{
    padding:20px 50px;
    border:none;
    background-color:sans-serif;
    font-weight:bold;
    font-size:25px;
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
    }
	</style>

</head>

<body style="background-image: url('bgedit.jpeg'); background-size: cover;">
	<center>
		<button class="back" style="border: groove 15px; border-color: skyblue yellow lightgreen;"> <a href="main.php" style="text-decoration: none; color: white;" class="bi bi-house"> HOME </a> </button>

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<button id="screenshot-btn" style="background-color: #007bff; border: groove 15px; border-color: skyblue yellow lightgreen ; color: #fff;  cursor: pointer;" class="bi bi-arrows-fullscreen"> CAPTURE SCREENSHOT</button>

		
    <!-- SCREENSHOT SCRIPT CODE START-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

    		<!-- Your JavaScript code for capturing and downloading the scrolling screenshot -->
		    <script>
		        document.getElementById("screenshot-btn").addEventListener("click", function() {
		            html2canvas(document.body, {
		                scrollY: -window.scrollY, // Capture entire page even if scrolled
		            }).then(function(canvas) {
		                var screenshot = canvas.toDataURL("image/jpg");

		                // Create a temporary link element for download
		                var downloadLink = document.createElement("a");
		                downloadLink.href = screenshot;
		                downloadLink.download = "scrolling_screenshot.jpg";
		                downloadLink.style.display = "none";
		                document.body.appendChild(downloadLink);

		                // Trigger the download
		                downloadLink.click();

		                // Clean up the link element
		                document.body.removeChild(downloadLink);
		            });
		        });
		    </script>

		    <!-- SCREENSHOT SCRIPT CODE END -->
		<div style="border: groove 10px; border-color:lightgreen lightgreen gold gold;  margin-top: 50px; margin-bottom: 20px; margin-left: 35px; margin-right: 36px; position: none; color: red; ">
			<h1 style="color: yellow; font-size: 10vh; margin-top: 2vh; margin-bottom: 2vh; text-shadow: 5px 4px blue;" class="bi bi-person-fill"> USER DATA <a class="bi bi-person-fill"></a></h1>
		</div>
		<table border="10px" bordercolor="#0009bb" width="95%" cellspacing="15" align="center" style="background-color: lightgreen">
		<tr >
			<th style="color: #124b1e; font-size: 20px;">Id</th>
			<th style="color: #124b1e; font-size: 20px;">First Name</th>
			<th style="color: #124b1e; font-size: 20px;">Email</th>
			<th style="color: #124b1e; font-size: 20px;">Address</th>
			<th style="color: #124b1e; font-size: 20px;">Contact</th>
			<th style="color: #124b1e; font-size: 20px;">Password</th>
			<th style="color: #124b1e; font-size: 20px;">Repeat Password</th>
			<th style="color: #124b1e; font-size: 20px;">Gender</th>
			<th style="color: #124b1e; font-size: 20px;" colspan="2">Action</th>
		</tr>

	<?php

		while($row = mysqli_fetch_array($data))
		{

	?>

		<tr>
			<td style="color: black; font-size: 20px;">	<?php echo $row['u_id'];		?>	</td>
			<td style="color: black; font-size: 20px;">	<?php echo $row['u_fname'];		?>	</td>
			<td style="color: black; font-size: 20px;">	<?php echo $row['u_email'];		?>	</td>
			<td style="color: black; font-size: 20px;">	<?php echo $row['u_address'];	?>	</td>
			<td style="color: black; font-size: 20px;">	<?php echo $row['u_contact'];	?>	</td>
			<td style="color: black; font-size: 20px;">	<?php echo $row['u_pwd'];		?>	</td>
			<td style="color: black; font-size: 20px;">	<?php echo $row['u_rptpwd'];	?>	</td>
			<td style="color: black; font-size: 20px;">	<?php echo $row['u_gender'];	?>	</td>

			<td>	<a href="edit.php?edit_id=<?php echo $row['u_id']; ?>" onclick="return confirm('Are You Sure To Update ?')" style="color: darkblue; text-decoration: none; font-size: 20px;" class="bi bi-pen-fill"> Update	</a>	</td>
			<td>	<a href="delete.php?del=<?php echo $row['u_id']; ?>" onclick="return confirm('Are You Sure To Delete ?')" style="color: red; text-decoration: none; font-size: 20px;" class="bi bi-trash">	Delete	</a>	</td>
		</tr>

	<?php

		}

	?>
		<table> 

	</center>

</body>


</html>
