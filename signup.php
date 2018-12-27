<?php 
            
      $user = 'root';
      $password = '';
      $host = 'localhost';
      $db = 'newshikshacloud';
      
      
      $conn = mysqli_connect($host,$user , $password, $db);
      session_start();

      if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
      }

      
      if($_SERVER["REQUEST_METHOD"] == "POST"){

            $myreguserid = mysqli_real_escape_string($conn, $_POST['login_uid']);

           
            
            $mypassword = mysqli_real_escape_string($conn, $_POST['login_password']); 

            $mystdid = mysqli_real_escape_string($conn , $_POST['stdid']);
            $_SESSION["regstdid"] = $mystdid;
            $myemail = mysqli_real_escape_string($conn , $_POST['email']);

            $myfirstname = mysqli_real_escape_string($conn , $_POST['firstname']);

            $mylastname = mysqli_real_escape_string($conn, $_POST['lastname']);

            $myfathername = mysqli_real_escape_string($conn, $_POST['fathername']);

            $mybirthday = mysqli_real_escape_string($conn, $_POST['birthday']);

            $myadhaar = mysqli_real_escape_string($conn, $_POST['aadhar_no']);
 
            $mycontact = mysqli_real_escape_string($conn, $_POST['contact']);

            $mycpi  = mysqli_real_escape_string($conn, $_POST['cpi']);
      
            $sql = "Insert into student (Login_id,Password,Student_ID,EmailID,F_Name,L_Name , Father_Name , Birth_Date , Aadhar, Contact , CPI) 
                  Values ('$myreguserid','$mypassword','$mystdid','$myemail','$myfirstname','$mylastname','$myfathername','$mybirthday','$myadhaar','$mycontact' , '$mycpi')";

            if(mysqli_query($conn, $sql)){

            echo "Your Account has been created successfully.";

            header("location: login.php ");

      }
      else {      
            echo "Error: ". $sql . "<br>" . mysqli_error($conn);
      }

      }

?>


<DOCTYPE !html>

<html>
<head> 
<title>
</title>
</head>
<body background = "images\red-and-white_wallpapers_33799_2560x1600.jpg">

<h2 class = "welcomeheading"> <em> Hello! Please fill your personal details for creating an account. </em> </h2>
<h5 class = "compheading" > <em> The starred fields are necessary. </em> </h5>
<link rel="stylesheet" type="text/css" href="/html/style.css">
<style>

.compheading {
	font-family : verdana ;
	max-width : 300px ;
	-moz-animation-duration: 4s;
    -webkit-animation-duration: 4s;
            -moz-animation-name: slidein;
            -webkit-animation-name: slidein;
		
}


body {
   background-repeat: no-repeat;
}


.signupdiv {
		position: relative;
	    font-family : verdana ;
       margin-top: -400px;
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


.buttondiv {
	position : left ;
}


.redclass {
	color: red;

}

.bupclass {
		position: relative;
            height: auto;
            max-width : 160px;
            padding: 3px;
            font-size: 16px;
}

.table {
    color: #017572;
    border-spacing: 10px;

}

</style>
<form class = "signupform" action = "<?php $_PHP_SELF ?>"  method = "POST"  >
<div class = "signupdiv">
<table class = "table">
<tr>
<td>LOGIN_ID:(<span class = "redclass"> * </span>)</td>
<td><input class = "signupclass" placeholder = " User-Id " type = "text" name = "login_uid" required autofocus > </td></br> </br> 
</tr>
<tr>
<td>PASSWORD:(<span class = "redclass"> * </span>) </td>
<td><input class = "signupclass" placeholder = " ******** " type = "password" name = "login_password" required ></td> </br> </br>
</tr>
<tr>
<td>UNIVERSITY-ID(<span class = "redclass"> * </span>):</td>
<td><input class = "signupclass" type = "text" name = "stdid" required autofocus > </td></br> </br>
</tr>
<tr>

<td>EMAIL-ID(<span class = "redclass"> * </span>):</td>
<td><input class = "signupclass" placeholder = "sample@abc.com" type = "text" name = "email" required autofocus ></td> </br> </br>
</tr>
<tr>
<td>FIRST NAME(<span class = "redclass"> * </span>):</td>
<td><input class = "signupclass" type = "text" name = "firstname" required autofocus ></td> </br> </br>
</tr>
<tr>
<td>LAST NAME(<span class = "redclass"> * </span>):</td>
<td><input class = "signupclass"  type = "text" name = "lastname" required  ></td> </br> </br>
</tr>
<tr>

<td>FATHER'S NAME(<span class = "redclass"> * </span>):</td>
<td><input class = "signupclass" type = "text" name = "fathername" required  > </td></br> </br>
</tr>
<tr>


<td>BIRTHDATE(<span class = "redclass"> * </span>)</td>
<td> <input class = "bupclass" placeholder = "yyyy-mm-dd" type = "text" name = "birthday" required  > </td><br> <br> 
</tr>
<tr>

<td>AADHAR NO:</td>
<td><input class = "signupclass"  type = "text" name = "aadhar_no"  > </td></br> </br>
</tr>
<tr>
<td>CONTACT(<span class = "redclass"> * </span>):</td>
<td><input class = "signupclass"  type = "text" placeholder = "+91-" name = "contact" required  ></td> </br> </br>
</tr>

<tr>

<td>CPI(<span class = "redclass"> * </span>):</td>
<td><input class = "signupclass" type = "text" name = "cpi" required  > </td></br> </br>
</tr>
</table>
<button class = "regbuttonclass" type = "submit" name = "reg_submit" > 	REGISTER </button> 

</div>
</form>
</body>

</html>
