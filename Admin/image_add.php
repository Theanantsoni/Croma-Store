<?php
	include "croma_sql.php";

	if(isset($_POST['btnsubmit']))
	{
		$filename = $_FILES['fileimage']['name'];
		$filedesc = $_POST['filename'];
		$fileoldprice = $_POST['fileoldprice'];
		$filenewprice = $_POST['filenewprice'];

		$tempname = $_FILES['fileimage']['tmp_name'];

		move_uploaded_file($tempname, '../assests/uploads/' .$filename);

		$sql = "INSERT INTO media (image) VALUES ('".$filename."')";

		$sql = "INSERT INTO media VALUES (0,'$filename','$filedesc','$fileoldprice','$filenewprice')";
		$result = mysqli_query($con,$sql);

		if($result)
		{
			echo "insert";
			header('location: image_display.php');
		}
		else
		{
			echo "error";
		}
	}
?>



<!DOCTYPE html>
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
	</style>

  <script>
    function form()
    {
      var file = document.getElementById("productfile").value;

      if(file == "")
      {
        document.getElementById("filejs").innerHTML = "* Select Product File *";
        return false;
      }

      var name = document = document.getElementById("productname").value;

      if(name == "")
      {
        document.getElementById("namejs").innerHTML = "* Enter Product Name *";
        return false;
      }

      var oldprice = document = document.getElementById("productoldprice").value;

      if(oldprice == "")
      {
        document.getElementById("oldpricejs").innerHTML = "* Enter Product Old Price *";
        return false;
      }

      if(isNaN(oldprice))
      {
        document.getElementById("oldpricejs").innerHTML=" * ONLY NUMBERS ALLOWED*";
        return false; 
      }

      var newprice = document = document.getElementById("productnewprice").value;

      if(newprice == "")
      {
        document.getElementById("newpricejs").innerHTML = "* Enter Product New Price *";
        return false;
      }
      if(isNaN(newprice))
      {
        document.getElementById("newpricejs").innerHTML=" * ONLY NUMBERS ALLOWED*";
        return false; 
      }
    
    }

  </script>
  
</head>
<body style="background-image: url('add_pic.jpg'); background-size: cover;">  
  <center><br><br><br><br>
    <a style="color:red;background-color: white; border: solid 1px; color:red; padding: 5px 20px; text-decoration: none; margin: 2px 1px; cursor: pointer; Border-radius:5px; Font-size:50px">Update Product Data</a> 
    <br><br><br><br>

    <form method="POST" enctype="multipart/form-data" onsubmit="return form()">
        <label style="color:red; text-decoration: none; margin: 2px 1px; cursor: pointer; Font-size:30px">Upload File : </label>
        <input type="file" name="fileimage" style="color: blue; Font-size:25px;" id="productfile">

        <span id="filejs" style="color: red; font-size: 25px;" ></span>

        <br><br><br><br>

        <label style="color:red; text-decoration: none; margin: 2px 1px; cursor: pointer; Font-size:30px">Name : </label>
        <input type="text" name="filename" placeholder="Enter Product Name" style="background-color: yellow; border: groove 15px; padding: 10px 20px; border-color: #a082e2; margin: 4px 2px; cursor:space; border-radius: 5px; font-size: 15px;" id="productname">

         <span id="namejs" style="color: red; font-size: 25px;" ></span>

        <br><br>

        <label style="color:red; text-decoration: none; margin: 2px 1px; cursor: pointer; Font-size:30px">Old Price : </label>
        <input type="text" name="fileoldprice" placeholder="Enter Product Old Price" style="background-color: yellow; border: groove 15px; padding: 10px 20px; border-color: #a082e2; margin: 4px 2px; cursor:space; border-radius: 5px; font-size: 15px;" id="productoldprice">

        <span id="oldpricejs" style="color: red; font-size: 25px;" ></span>

        <br><br>

        <label style="color:red; text-decoration: none; margin: 2px 1px; cursor: pointer; Font-size:30px">New Price : </label>
        <input type="text" name="filenewprice" placeholder="Enter Product New Price" style="background-color: yellow; border: groove 15px; padding: 10px 20px; border-color: #a082e2; margin: 4px 2px; cursor:space; border-radius: 5px; font-size: 15px;" id="productnewprice">

        <span id="newpricejs" style="color: red; font-size: 25px;" ></span>

        <br><br><br><br>

      <button type="submit" name="btnsubmit" style="--clr:#FF44CC;"><span><b>Submit</b></span><i></i></button> 

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <button type="button" name="btnsubmit" style="--clr:#FF44CC;"><span><a href="main.php" style="text-decoration: none; color: darkblue;"><b>Home</b></a></span><i></i></button>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <button type="button" name="btnskip" style="--clr:#FF44CC;"><span><a href="image_display.php" style="text-decoration: none; color: darkblue;"><b>Skip</b></a></span><i></i></button>


    </form>
  </center>
</body>
</html>