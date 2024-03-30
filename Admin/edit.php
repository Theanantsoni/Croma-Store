<?php
	include "croma_sql.php";

	if(isset($_GET['edit_id']))
	{
		$sql = "SELECT * FROM store WHERE u_id=" .$_GET['edit_id'];
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
	}

	if(isset($_POST['btn-update']))
	{
		$ufname = $_POST['txtfname'];
		$uemail = $_POST['txtemail'];
		$uaddress =  $_POST['txtadd'];
		$ucontact = $_POST['txtcnct'];
		$upwd = $_POST['txtpwd'];
		$urptpwd = $_POST['txtrptpwd'];
		$ugender = $_POST['usergender'];

		$update = "UPDATE store SET u_fname='$ufname', u_email='$uemail', u_address='$uaddress', u_contact='$ucontact', u_pwd='$upwd', u_rptpwd='$urptpwd', u_gender='$ugender' WHERE u_id=" .$_GET['edit_id'];

		$edit = mysqli_query($con,$update);

		if(isset($sql))
		{
			header("location: display.php");
		}
		else
		{
			echo "ERROR";
		}
	}
?>





<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: 'Poppins',sans-serif;
        }
        .container{
          max-width: 700px;
          width: 100%;
          background-color: #fff;
          padding: 25px 30px;
          border-radius: 5px;
          box-shadow: 0 5px 10px rgba(0,0,0,0.15);
        }
        .container .title{
          font-size: 25px;
          font-weight: 500;
          position: relative;
        }
        .container .title::before{
          content: "";
          position: absolute;
          left: 0;
          bottom: 0;
          height: 5px;
          width: 160px;
          border-radius: 5px;
          background: linear-gradient(45deg, #71b7e6, #33FF57);
        }
        .content form .user-details{
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          margin: 20px 0 12px 0;
        }
        form .user-details .input-box{
          margin-bottom: 15px;
          width: calc(100% / 2 - 20px);
        }
        form .input-box span.details{
          display: block;
          font-weight: 500;
          margin-bottom: 5px;
        }
        .user-details .input-box input{
          height: 45px;
          width: 100%;
          outline: none;
          font-size: 16px;
          border-radius: 5px;
          padding-left: 15px;
          border: 1px solid #ccc;
          border-bottom-width: 2px;
          transition: all 0.3s ease;
        }
        .user-details .input-box input:focus,
        .user-details .input-box input:valid{
          border-color: #9b59b6;
        }
         form .gender-details .gender-title{
          font-size: 20px;
          font-weight: 500;
         }
         form .category{
           display: flex;
           width: 80%;
           margin: 14px 0 ;
           justify-content: space-between;
         }
         form .category label{
           display: flex;
           align-items: center;
           cursor: pointer;
         }
         form .category label .dot{
          height: 18px;
          width: 18px;
          border-radius: 50%;
          margin-right: 10px;
          background: #d9d9d9;
          border: 5px solid transparent;
          transition: all 0.3s ease;
        }
         #dot-1:checked ~ .category label .one,
         #dot-2:checked ~ .category label .two,
         #dot-3:checked ~ .category label .three{
           background: #9b59b6;
           border-color: #d9d9d9;
         }
         form input[type="radio"]{
           display: none;
         }
         form .button{
           height: 45px;
           margin: 35px 0
         }
         form .button input{
           height: 100%;
           width: 100%;
           border-radius: 5px;
           border: none;
           color: #fff;
           font-size: 18px;
           font-weight: 500;
           letter-spacing: 1px;
           cursor: pointer;
           transition: all 0.3s ease;
           background: linear-gradient(135deg, #71b7e6, #9b59b6);
         }
         form .button input:hover{
          /* transform: scale(0.99); */
          background: linear-gradient(-135deg, #71b7e6, #9b59b6);
          }
         @media(max-width: 584px){
         .container{
          max-width: 100%;
        }
        form .user-details .input-box{
            margin-bottom: 15px;
            width: 100%;
          }
          form .category{
            width: 100%;
          }
          .content form .user-details{
            max-height: 300px;
            overflow-y: scroll;
          }
          .user-details::-webkit-scrollbar{
            width: 5px;
          }
          }
          @media(max-width: 459px){
          .container .content .category{
            flex-direction: column;
          }
        }

   </style>

            <script>
                function form()
                {
              //Full Name javascript Code ...
                  var fname = document.getElementById("userfname").value;

                  var pattern = /^[a-zA-Z]*$|^\d*$/;

                  if(fname == "")
                  {
                    document.getElementById("ufname").innerHTML="*Please Enter Your Full Name*";
                    return false;
                  }

                  if (!pattern.test(fname)) 
                  {
                      document.getElementById("ufname").innerHTML="Numbers Or Symbols Are Not Allowed*";
                      return false;
                  }

                  else
                  {
                    document.getElementById("ufname").innerHTML="";
                  }



              //Email Javascript Code ...
                  var email = document.getElementById("useremail").value;
                  var emailpattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$/; // Regular expression for email validation

                  if(email == "")
                  {
                    document.getElementById("uemail").innerHTML="*Please Enter Your Email Address*";
                    return false;
                  }

                  if(emailpattern.test(email))
                  {
                    document.getElementById("uemail").innerHTML="";
                  }  

                  else
                  {
                    document.getElementById("uemail").innerHTML="*Invalid Email Address. Please Enter Valid Email Address*";
                    return false;
                  }



              //Address Javascript Code ...
                  var address = document.getElementById("useraddress").value;

                  if(address == "")
                  {
                    document.getElementById("uaddress").innerHTML="*Please Enter Your Address*";
                    return false;
                  }



              //Phone Number Javascript Code ...
                  var contact = document.getElementById("usercontact").value;

                  if(contact == "")
                  {
                    document.getElementById("ucontact").innerHTML="*Please Enter Your Contact Number*";
                    return false;
                  }

                  if(isNaN(contact))
                  {
                    document.getElementById("ucontact").innerHTML="*Characters Are Not Allowed*";
                    return false;
                  }

                  if(contact.length>10 || contact.length<10)
                  {
                    document.getElementById("ucontact").innerHTML="*Enter Contact Number Must Be 10 Digits*";
                    return false;
                  }

                  

              //Password Javascript Code ...
                  var password = document.getElementById("userpassword").value;

                  if(password == "")
                  {
                    document.getElementById("userpwd").innerHTML="*Please Enter password*";
                    return false;
                  }

                  if(password.length < 5 || password.length > 20)
                  {
                    document.getElementById("userpwd").innerHTML="*Please Enter Password Length Must Be Between 5 And 20*";
                    return false;
                  }



              //RepeatPassword Javascript Code ...
                  var rptpassword = document.getElementById("userRepeatPassword").value;

                  if(rptpassword == "")
                  {
                    document.getElementById("urptpwd").innerHTML="*Please Enter Confirm Password*";
                    return false;
                  }

                  if(rptpassword.length < 5 || rptpassword.length > 20)
                  {
                    document.getElementById("urptpwd").innerHTML="Please Enter Confirm Password Length Must Be Between 5 And 20*";
                    return false;
                  }



              //Check Password And Confirm Password Are Same Or Not ...

                  if(password != rptpassword)
                  {
                    document.getElementById("urptpwd").innerHTML="*Password And Confirm Password Is Not Same*";
                    return false;
                  }


              //Gender Javascript Code ...
                  var gender = document.querySelector('input[name="usergender"]:checked');

                  if(gender)
                  {
                    document.getElementById("ugen").innerHTML="";
                  }
                  else
                  {
                    document.getElementById("ugen").innerHTML = "*Please Select Your Gender*";
                    return false;
                  }

                }
            </script>
  
<body style="background: linear-gradient(135deg, #FF5733, #33FF57, #5733FF); background-repeat: no-repeat;"> 
  <center style="padding-top: 5vh; padding-bottom: 17.5vh;">
      <div class="container">
    <div class="title" style="padding-right: 479.5px; color: red">Update Data</div>
    <div class="content">
      <form action="edit.php?edit_id=<?php echo $row['u_id']; ?>" method="POST" onsubmit="return form()">
        <div class="user-details">

          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="txtfname" id="userfname" placeholder="Enter your name" value="<?php echo $row['u_fname']; ?>">
            <span id="ufname" style="color: red;">
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="email"  name="txtemail" id="useremail" placeholder="Enter your email" value="<?php echo $row['u_email']; ?>">
            <span id="uemail" style="color: red;">
          </div>
          
          <div class="input-box">
            <span class="details">Address</span>
            <textarea cols="43" rows="2" name="txtadd" id="useraddress"><?php echo $row['u_address']; ?></textarea>
            <span id="uaddress" style="color: red;">
          </div>

          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="txtcnct" id="usercontact"placeholder="Enter your number" value="<?php echo $row['u_contact']; ?>">
            <span id="ucontact" style="color: red;">
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="txtpwd" id="userpassword" placeholder="Enter your password" value="<?php echo $row['u_pwd']; ?>">
            <span id="userpwd" style="color: red;">
          </div>

          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="txtrptpwd"  id="userRepeatPassword" placeholder="Confirm your password" value="<?php echo $row['u_rptpwd']; ?>">
            <span id="urptpwd" style="color: red;">          
          </div>

        </div>

        <div class="gender-details">
          <input type="radio" name="usergender" value="male" id="dot-1" <?php echo ($row['u_gender'] == "male")?"checked":"" ?>>
          <input type="radio" name="usergender" value="female" id="dot-2" <?php echo ($row['u_gender'] == "female")?"checked":"" ?>>
          <input type="radio" name="usergender" value="-" id="dot-3" <?php echo ($row['u_gender'] == "-")?"checked":"" ?>>

          <span class="gender-title" style="padding-right: 450px;">Gender</span><br>
          <span id="ugen" style="color:red"></span>

          <div class="category">

            <label for="dot-1" >
            <span class="dot one" <?php /*echo ($row['u_gender'] == "Male")?"checked":"" */?>></span>
            <span class="usergender">Male</span>
          </label>

          <label for="dot-2" >
            <span class="dot two"></span>
            <span class="usergender" >Female</span>
          </label>

          <label for="dot-3" >
            <span class="dot three"></span>
            <span class="usergender">Prefer not to say</span>
            </label>

          </div>
        </div>
        <center>
        <div class="button">
          <button type="submit" name="btn-update" onclick="update()" style="background-color: green; border: solid 1px; color:white; padding: 5px 20px; text-decoration: none; margin: 2px 1px; cursor: pointer; Border-radius:5px; Font-size:20px";>Update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <button type="reset" name="btn-reset" value="Reset" style="background-color: yellow; border: solid 1px; color:black; padding: 5px 20px; text-decoration: none;margin: 2px 1px; cursor: pointer; Border-radius:5px; Font-size:20px";>Reset</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          <a href="display.php"><button type="button" value="Cancel" style="background-color: red; border: solid 1px; color:white; padding: 5px 20px; text-decoration: none;margin: 2px 1px; cursor: pointer; Border-radius:5px; Font-size:20px";>Cancel</button></a>
        </div>
      </center>
      </form>

      <script>
      	function update()
      	{
      		var x;
      		if(confirm("Updated Data SuccessFully") == true)
      		{
      			x="update";
      		}
      	}
      </script>
    </div>
  </div>
</center>
</body>
</html>



