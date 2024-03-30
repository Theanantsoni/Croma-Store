<?php
	include "croma_sql.php";

	if(isset($_GET['editid']))
	{
		$editid = $_GET['editid'];

		$sql = "SELECT * FROM media WHERE id= '".$editid."' ";
		$result=mysqli_query($con,$sql);
		$editdata = mysqli_fetch_array($result);
	}

		if(isset($_POST['btnsubmit']))
		{

			if($_FILES['fileimage']['name'] != "")
			{
				$filename = $_FILES['fileimage']['name'];

				$tempname = $_FILES['fileimage']['tmp_name'];

				move_uploaded_file($tempname, '../assests/uploads/' .$filename);

			/*$sql = "INSERT INTO your_table (image, exchange_name, old_price, new_price) 
                    VALUES ('$newFileName', '$newName', '$newOldPrice', '$newNewPrice')";*/
			}
			else
			{
				$filename = $_POST['oldimage'];
			}

			$filedesc = $_POST['filenewname'];
			$fileoldprice = $_POST['filenewoldprice'];
			$filenewprice = $_POST['filenewnewprice'];

			$sql = "UPDATE media SET image='".$filename."', productname='$filedesc', old_price='$fileoldprice', new_price='$filenewprice' WHERE id= '$editid' ";

			$result = mysqli_query($con,$sql);

			if($result)
			{
				echo "Data Updated Successfully";

				header('location: image_display.php');
			}
			else
			{
				echo "error";
			}
		} 

		if(isset($_POST['btnreset']))
		{
			header('location: image_display.php');
		}
?>




<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
				button {
  position: relative;
  background: red;
  color: darkblue;
  text-decoration: none;
  text-transform: uppercase;
  border: none;
  border-radius: 5px;
  letter-spacing: 0.1rem;
  font-size: 25px;
  padding: 1rem 3rem;
  transition: 0.2s;
  cursor: pointer;
}

button:hover {
  letter-spacing: 0.2rem;
  padding: 1.1rem 3.1rem;
  background: var(--clr);
  color: var(--clr);
  /* box-shadow: 0 0 35px var(--clr); */
  animation: box 3s infinite;
}

button::before {
  content: "";
  position: absolute;
  inset: 2px;
  background: lightgreen;
}

button span {
  position: relative;
  z-index: 1;
}
button i {
  position: absolute;
  inset: 0;
  display: block;
}

button i::before {
  content: "";
  position: absolute;
  width: 10px;
  height: 2px;
  left: 80%;
  top: -2px;
  border: 2px solid var(--clr);
  background: #272822;
  transition: 0.2s;
}

button:hover i::before {
  width: 15px;
  left: 20%;
  animation: move 3s infinite;
}

button i::after {
  content: "";
  position: absolute;
  width: 10px;
  height: 2px;
  left: 20%;
  bottom: -2px;
  border: 2px solid var(--clr);
  background: #272822;
  transition: 0.2s;
}

button:hover i::after {
  width: 15px;
  left: 80%;
  animation: move 3s infinite;
}

@keyframes move {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translateX(5px);
  }
  100% {
    transform: translateX(0);
  }
}

@keyframes box {
  0% {
    box-shadow: #27272c;
  }
  50% {
    box-shadow: 0 0 25px var(--clr);
  }
  100% {
    box-shadow: #27272c;
  }
}

input[type=file]::file-selector-button {
  margin-right: 20px;
  border: 5px solid blue;
  background: yellow;
  padding: 10px 20px;
  border-radius: 80px;
  color: darkblue;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: lightgreen;
}

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
    transition: 0.2s;
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
	</style>
</head>
<body style="background-image: url('edit_pic.jpg'); background-size: cover;">
	<center>
			<br><br><br><br>
		<a style="background-color: white; border: solid 3px blue; padding: 5px 20px; text-decoration: none; margin: 2px 1px; cursor: pointer; Border-radius:5px; Font-size:50px;">Edit Products Details</a>

			<form method="POST" enctype="multipart/form-data">

			<div class="form-control">
				<div>
					<br><br><br><br>
					<label style="color:red; text-decoration: none; margin: 2px 1px; cursor: pointer; Font-size:30px">Old Image : </label>
					<img src="../assests/uploads/<?php echo $editdata['image']; ?>" style="height: 200px; border: 10px solid yellow;">
					<br><br><br><br>
					
					<label style="color:red; text-decoration: none; padding-left: 195px; margin: 2px 1px; cursor: pointer; Font-size:30px">Exchange Image : </label>

					<input type="hidden" name="oldimage" value="<?php echo $editdata['image']; ?>" style="height: 100px; color: blue; Font-size:25px;">

					<input type="file" name="fileimage" value="<?php echo $editdata['image']; ?>" style="height: 100px; color: blue; Font-size:25px;">

				</div>

				</div>

					<label style="color:red; text-decoration: none; margin: 2px 1px; cursor: pointer; Font-size:30px">Exchange Name : </label>
					<input type="text" name="filenewname" value="<?php echo $editdata['productname']; ?>" style="background-color: yellow; border: groove 15px; padding: 10px 20px; border-color: #a082e2; margin: 4px 2px; cursor:space; border-radius: 5px; font-size: 15px;">

				</div>

				<br><br><br>

				<div>

					<label style="color:red; text-decoration: none; margin: 2px 1px; cursor: pointer; Font-size:30px">Exchange Old Price : </label>
					<input type="text" name="filenewoldprice" value="<?php echo $editdata['old_price']; ?>" style="background-color: yellow; border: groove 15px; padding: 10px 20px; border-color: #a082e2; margin: 4px 2px; cursor:space; border-radius: 5px; font-size: 15px;">

				</div>

				<br><br><br>

				<div>

					<label style="color:red; text-decoration: none; margin: 2px 1px; cursor: pointer; Font-size:30px">Exchange New Price : </label>
					<input type="text" name="filenewnewprice" value="<?php echo $editdata['new_price']; ?>" style="background-color: yellow; border: groove 15px; padding: 10px 20px; border-color: #a082e2; margin: 4px 2px; cursor:space; border-radius: 5px; font-size: 15px;">

				</div>

				<br><br><br>

				<div>

					<button type="submit" name="btnsubmit" style="--clr:#FF44CC;"><span>Submit</span><i></i></button> 
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

					<button type="reset" name="btnref" style="--clr:#FF44CC;"><span>RESET</span><i></i></button> 

					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

					<button type="submit" name="btnreset" style="--clr:#FF44CC;"><span>BACK</span><i></i></button> 

				</div>

			</div>
			</form>
		</center>
</body>
</html>



<?php
	/*include "croma_sql.php";

	if(isset($_GET['editid']))
	{
		$editid = $_GET['editid'];

		$sql = "SELECT * FROM media WHERE id= '".$editid."' ";
		$result=mysqli_query($con,$sql);
		$editdata = mysqli_fetch_array($result);
	}

		if(isset($_POST['btnsubmit']))
		{

			if($_FILES['fileimage']['name'] != "")
			{
				$filename = $_FILES['fileimage']['name'];

				$tempname = $_FILES['fileimage']['tmp_name'];

				move_uploaded_file($tempname, '../assests/uploads/' .$filename);
			}
			else
			{
				$filename = $_POST['oldimage'];
				$filedesc = $_POST['filename'];
				$fileoldprice = $_POST['fileoldprice'];
				$filenewprice = $_POST['filenewprice'];
			}

			$sql = "INSERT INTO your_table (image, exchange_name, old_price, new_price) 
                    VALUES ('$newFileName', '$newName', '$newOldPrice', '$newNewPrice')";
			$result = mysqli_query($con,$sql);

			if($result)
			{
				echo "Data Updated Successfully";
				header('location: image_display.php');
			}
			else
			{
				echo "error";
			}
		} */
?>