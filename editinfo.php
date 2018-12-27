<DOCTYPE !html>

<html>
<head> 
<title>
</title>
</head>
<body background = "images\red-and-white_wallpapers_33799_2560x1600.jpg">

<h2 class = "welcomeheading"> <em> Fill in the new details to edit your profile. </em> </h2>
<link rel="stylesheet" type="text/css" href="/html/style.css">
<style>

.compheading {
	font-family : verdana ;
	max-width : 200px ;
	float : right ;
		
}


.signupdiv {
		position: relative;
	    font-family : verdana ;
       margin-top: -400px;

	}

.table {
    color: #017572;
    border-spacing: 10px;

}

.welcomeheading {
	font-family : verdana ; 
-moz-animation-duration: 4s;
    -webkit-animation-duration: 4s;
            -moz-animation-name: slidein;
            -webkit-animation-name: slidein;
}

 @-moz-keyframes slidein {
            from {
               margin-left:100%;
               width:300%
            }
            to {
               margin-left:0%;
               width:100%;
            }
         }
         @-webkit-keyframes slidein {
            from {
               margin-left:100%;
               width:300%
            }
            to {
               margin-left:0%;
               width:100%;
            }
         }

.signupform {
            max-width: 480px;
            padding: 25px;
            margin: 0 auto;
            color: #017572;
         }


.signupdiv .signupclass {
	 	position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 5px;
            font-size: 16px;

}

body {
            padding-top: 40px;
            padding-bottom: 40px;
	   
}

.signupdiv .regbuttonclass {
	height: 45px;	
	width:  85px;
	font-family : verdana;	
	float : right;
	border-radius: 10px;
       cursor:pointer;

}

.newbut{
	height: 45px;	
	width:  85px;
	font-family : verdana;	
	float : left;
}


.buttondiv {
	position : left ;
}


.bupclass {
		position: relative;
            height: auto;
            max-width : 160px;
            padding: 3px;
            font-size: 16px;
}



body {
	background-repeat: no-repeat;
}

</style>
<form class = "signupform" action = "<?php $_PHP_SELF ?>"  method = "POST"  >
<div class = "signupdiv">
<table class = "table" >
<tr>	
<td>LOGIN_ID: </td>
<td><input class = "signupclass" placeholder = " User-Id " type = "text" name = "login_uid"   autofocus ></td> </br> </br> 
</tr>
<tr>
<td>PASSWORD:</td>
<td> <input class = "signupclass" placeholder = " ******** " type = "password" name = "login_password"  ></td> </br> </br>
</tr>

<tr>
<td>EMAIL-ID:</td>
<td><input class = "signupclass" placeholder = "sample@abc.com" type = "text" name = "email"   autofocus ></td> </br> </br>
</tr>
<tr>
<td>FIRST NAME:
	<td><input class = "signupclass" type = "text" name = "firstname"   autofocus ></td> </br> </br>
</tr>
<tr>
<td>LAST NAME:</td>
<td><input class = "signupclass"  type = "text" name = "lastname"    > </td></br> </br>
</tr>
<tr>
<td>FATHER'S NAME:</td>
<td><input class = "signupclass" type = "text" name = "fathername"    ></td> </br> </br>
</tr>
<tr>

<td>BIRTHDATE:</td>
<td> <input class = "bupclass" placeholder = "yyyy-mm-dd" type = "text" name = "birthday"    ></td> <br> <br> 
</tr>
<tr>
<td>AADHAR NO:</td>
<td><input class = "signupclass"  type = "text" name = "aadhar_no"  ></td> </br> </br>
</tr>
<tr>
<td>CONTACT:</td>
<td><input class = "signupclass"  type = "text" placeholder = "+91-" name = "contact"    > </td></br> </br>
</tr>
<tr>
<td>CPI:</td>
<td><input class = "signupclass"  type = "text" placeholder = "*.**" name = "cpi"    ></td> </br> </br>
</tr>
</table>
<button class = "regbuttonclass" type = "submit"   name = "reg_submit" > DONE </button> 


</div>
</form>
</body>

</html>


<?php
	
	$user = 'root';
	$password = '';
	$host = 'localhost';
	$db = 'newshikshacloud';
	$conn = mysqli_connect($host,$user , $password, $db);
	session_start();

	$id = $_SESSION['next'];
	
	$count=0;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$login = mysqli_real_escape_string($conn,$_POST['login_uid']);
		$pw = mysqli_real_escape_string($conn,$_POST['login_password']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$fname = mysqli_real_escape_string($conn,$_POST['firstname']);
		$lname = mysqli_real_escape_string($conn,$_POST['lastname']);
		$ftn = mysqli_real_escape_string($conn,$_POST['fathername']);
		$bdate = mysqli_real_escape_string($conn,$_POST['birthday']);
		$aadhar = mysqli_real_escape_string($conn,$_POST['aadhar_no']);
		$contact = mysqli_real_escape_string($conn,$_POST['contact']);
		$cpi = mysqli_real_escape_string($conn,$_POST['cpi']);
		if($login !=NULL)
		{
			$sql = "UPDATE student SET Login_id='$login' WHERE Student_ID='$id'";
			mysqli_query($conn,$sql);
			$count++;
		}
		if ($pw !=NULL) {
			$sql = "UPDATE student SET Password='$pw' WHERE Student_ID='$id'";
			mysqli_query($conn,$sql);
			$count++;
		}
		if ($email !=NULL) {
			$sql = "UPDATE student SET EmailID='$email' WHERE Student_ID='$id'";
			mysqli_query($conn,$sql);
			$count++;
		}
		if ($fname !=NULL) {
			$sql = "UPDATE student SET F_Name='$fname' WHERE Student_ID='$id'";
			mysqli_query($conn,$sql);
			$count++;
		}
		if ($lname !=NULL) {
			$sql = "UPDATE student SET L_Name='$lname' WHERE Student_ID='$id'";
			mysqli_query($conn,$sql);
			$count++;
		}
		if ($ftn !=NULL) {
			$sql = "UPDATE student SET Father_Name='$ftn' WHERE Student_ID='$id'";
			mysqli_query($conn,$sql);
			$count++;
		}
		if ($bdate !=NULL) {
			$sql = "UPDATE student SET Birth_Date='$bdate' WHERE Student_ID='$id'";
			mysqli_query($conn,$sql);
			$count++;
		}
		if ($aadhar !=NULL) {
			$sql = "UPDATE student SET Aadhar='$aadhar' WHERE Student_ID='$id'";
			mysqli_query($conn,$sql);
			$count++;
		}
		if($contact != NULL){
			$sql = "UPDATE student SET Contact='$contact' WHERE Student_ID='$id'";
			mysqli_query($conn,$sql);
			$count++;
		}
		if($cpi != NULL){
			$sql = "UPDATE student SET CPI='$cpi' WHERE Student_ID='$id'";
			mysqli_query($conn,$sql);
			$count++;
		}

		if ($count>0) {
			header("location: login.php");
		}
		else {
			echo "Error: ". $sql . "<br>" . mysqli_error($conn);
      
		}
	}
	
?>