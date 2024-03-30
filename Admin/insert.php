<?php
	include "croma_sql.php";

          if(isset($_POST['btnregister']))
          {
            $fname=$_POST['txtfname'];
            $email=$_POST['txtemail'];
            $address=$_POST['txtadd'];
            $contact=$_POST['txtcnct'];   
            $pwd=$_POST['txtpwd'];
            $rptpwd=$_POST['txtrptpwd'];
            $gender=$_POST['usergender'];

            $select="SELECT u_id FROM store WHERE u_email='$email'";

            $result = mysqli_query($con,$select);
            $count = mysqli_num_rows($result);

            
            if($count > 0)
            {
              echo "<body bgcolor='yellow'>";
              echo "<center style='padding-top:50px;'>";
                echo "<font style='color:red;background-color: white; border: solid 1px; color:red; padding: 5px 20px; text-decoration: none;margin: 2px 1px; cursor: pointer; Border-radius:5px; Font-size:50px'>";
                  echo "ERROR : Email-Id Is Already Registered...";
              echo "</font>";

              echo "<br><br><br><br><br>";

              echo "<font style='color:red;background-color: white; border: solid 1px; color:red; padding: 5px 20px; text-decoration: none;margin: 2px 1px; cursor: pointer; Border-radius:5px; Font-size:50px'>";
                  echo "Please Input A New Email-Id...";
              echo "</font>";


              echo "<br><br><br><br><br>";
              echo "<a href='../register.php'>
                      <button style='color:red;background-color: #e7e7e7; border: solid 1px; color:red; padding: 5px 20px; text-decoration: none;margin: 2px 1px; cursor: pointer; Border-radius:5px; Font-size:50px'>Back</button></a>";
              echo "</center>";
            }
            else
            {
              $sql = "INSERT INTO store VALUES (0,'$fname','$email','$address','$contact','$pwd','$rptpwd','$gender')";

              $data=mysqli_query($con,$sql);
              header("Location: ../login.php");
            }

            /*if(mysqli_query($con,$sql))
            {
              echo "Records Added Successfully";
              //header("location: login.php");
            }
            else
            {
              echo "ERROR : Could Not Able To Execute";
            } */

            /* $data=mysqli_query($con,$sql);
            header("Location:display.php"); */
          }
?>