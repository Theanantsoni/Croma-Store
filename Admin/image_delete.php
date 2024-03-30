<?php
	include "croma_sql.php";

	if(isset($_GET['delid']))
	{
		$delid = $_GET['delid'];

		$sql = "DELETE FROM media where id='".$delid."'";
		$result = mysqli_query($con,$sql);

		if($result)
		{
			echo "deleteddd";
			header("location: image_display.php");
		}
		else
		{
			echo "error";
		}
	}
?>