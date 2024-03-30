<?php
	include "croma_sql.php";

	//echo "hello";

	if(isset($_GET['del']))
	{
		$delete = "DELETE FROM store WHERE u_id=$_GET[del]";

		mysqli_query($con,$delete);

		header("location: display.php");
	}
?>