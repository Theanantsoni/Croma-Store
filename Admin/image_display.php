<?php
	include "croma_sql.php";
?>

<?php

	$result = mysqli_query($con, "SELECT * FROM media");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Images</title>
	<style>
		a {
    position: relative;
    display: inline-block;
    padding: 15px 30px;
    color: red;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 24px;
    overflow: hidden;
    transition: 0.1s;
}



a:hover {
    color: darkblue;
    background: #2196f3;
    box-shadow: 0 0 10px #2196f3, 0 0 40px #2196f3, 0 0 80px #2196f3;
    transition-delay: 0.11s;
}


a span {
    display: block;
}

p {
    position: relative;
    display: inline-block;
    padding: 15px 30px;
    color: red;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 24px;
    overflow: hidden;
    transition: 0.1s;
}



p:hover {
    color: red;
    background: #2196f3;
    box-shadow: 0 0 10px #d03030, 0 0 40px #ff0000, 0 0 80px #ce3f3f;
    transition-delay: 0.11s;
}


p span {
    display: block;
}

}
        #screenshot-btn {
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
	</style>
</head>
<body style="background-image: url('display_pic.jpg'); background-size: cover;">
	<center>
			<br><br>
		<a style="background-color: white; border: solid 3px blue; margin-right: 25vh; margin-right: 15vh; text-decoration: none; cursor: pointer; Border-radius:5px; Font-size:35px;">MANAGE PRODUCTS</a>

		<a id="screenshot-btn" style="background-color: white; border: solid 3px blue; margin-right: 8vh; text-decoration: none; cursor: pointer; Border-radius:5px; Font-size:35px;">CAPTURE SCREENSHOT</a>

		<a href="image_add.php" style="background-color: white; cursor: pointer; margin-left: 10vh; border: 3px solid red; Font-size:35px; Border-radius:5px;"><span></span><span></span><span></span><span></span>BACK</a> 	

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

		    

		<table border="10px" bordercolor="#0009bb" width="95%" cellspacing="15" align="center" style="background-color: lightgreen">

			<br><br><br>

			<thead>
			<tr>
				<!--<th>No.</th>-->
				<th style="color: darkblue; font-size: 30px;">Image</th>
				<th style="color: darkblue; font-size: 30px;">Name</th>
				<th style="color: darkblue; font-size: 30px;">Old Price</th>
				<th style="color: darkblue; font-size: 30px;">New Price</th>
				<th style="color: darkblue; font-size: 30px;" colspan="2">Action</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$sql = "SELECT * FROM media";

				$result = mysqli_query($con,$sql);

				while($data = mysqli_fetch_array($result))
				{
			?>
				<tr>
					<!--<td><?php echo $data['id']; ?></td>-->
					<td><center><img src="../assests/uploads/<?php echo $data['image']; ?>" style="height: 150px; margin-left: 15px; margin-right: 15px; border: 10px solid blue; margin-top: 15px; margin-bottom: 15px;"><center></td>
					<td style="color: red; font-size: 30px;"><center><?php echo $data['productname']; ?></center></td>
					<td style="color: red; font-size: 30px;"><center>$ <?php echo $data['old_price']; ?></center></td>
					<td style="color: red; font-size: 30px;"><center>$ <?php echo $data['new_price']; ?></center></td>
					
					<td><center><a href="image_update.php?editid=<?php echo $data['id']; ?>" onclick="return confirm('Are You Sure To Update ?')" style="text-decoration: none; color: yellow; background-color: blue; font-size: 20px; margin-left: 15px; margin-right: 15px;">Edit</center></td>
					<td><center><a href="image_delete.php?delid=<?php echo $data['id']; ?>" onclick="return confirm('Are You Sure To Delete ?')" style="text-decoration: none; color: yellow; font-size: 20px; background-color: red; margin-left: 15px; cursor: pointer; margin-right: 15px;">Delete</a></center></td>
					
				</tr>
			<?php 
				}
			?>

			</tbody>
		</table>

	</center>
</body>
</html>