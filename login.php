<?php  
	
	$user = 'root';
	$password = '';
	$host = 'localhost';
	$db = 'newshikshacloud';
	

	$conn = mysqli_connect($host,$user , $password, $db);
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
      // username and password sent from form 
      
      $myuserid = mysqli_real_escape_string($conn,$_POST['login_email']);
	  
      $mypassword = mysqli_real_escape_string($conn,$_POST['login_password']); 
      
      
      $sql = "SELECT Login_id, Password FROM student WHERE Login_id = '$myuserid' and Password = '$mypassword' ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
          $_SESSION['xx']="$myuserid";
          $xyz = 'true';
          $_SESSION['tf'] = $xyz;
       /* $_SESSION['login_user'] = $myusername;
         $_SESSION["userid"] = $myuserid;
*/
         header("location: Mainloggedin2.php");
      }else {

         echo '<script type = "/javascript">' ;
         echo 'alert("Your username or password is incorrect.")';
         echo '</script>';
	  }		
	}
?>

<DOCTYPE !html>

<html>
<head> 
<title>
</title>
</head>
<body background = "images\15052008011.jpg">
<h2 class = "welcome" ><em> Welcome to <span><strong> MINI SHIKSHA CLOUD </strong> </span>!!!</em></h2>
<script language = "javascript"  type = "text/javascript">
	
 </script>  
<table background="images\vjti.ltiappshop.com_logo.jpeg" width = "400"	height="95">
<tr>

<td> 

</td>
</tr>
</table>
</br>

<form class = "form_sign-up" action = "signup.php" role = "form">
 <div class = "signupdiv" >

<h3 class = "sign_up_ques_heading"> <em>New to <strong> <span> SHIKSHA CLOUD </span> </strong> ?</em></h3>
<button class = "signupbutton" type = "submit" name= "signup_submit" > Sign UP </button>
</div>
</form>     



<link rel="stylesheet" type="text/css" href="/html/style.css">
<style>

body {
            padding-top: 40px;
            padding-bottom: 40px;
	   /* opacity: 0.8;
    filter: alpha(opacity=80);

*/


background-repeat: no-repeat;


}


span {
	color: darkblue ;
		
}

.welcome {
	
	font-family : verdana;
	font-size : 2em;
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

.form_signin_heading {
            text-align: center;
            color: #2f4f4f;
	
 }



.loginDiv {
		position: relative;
		
	    	font-family : verdana ;
}

.logindiv .loginclass {
	 	position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;

}


.logindiv .buttonclass {
	
	height: 45px;	
	width:  75px;
	font-family : verdana;
	cursor:pointer;
	 border-radius: 10px;
}

.form_sign-in {
            max-width: 280px;
            padding: 25px;
            margin: 0 auto;
            color: #017572;
         }

.error {
	font-size: 16px;
	font-family : 	verdana;
	
	
}

.signupdiv .signupbutton {

	height: 45px;	
	width:  75px;
	font-family : verdana;
	 border-radius: 10px;
	 cursor:pointer;

}

.signupdiv {

	padding: 25px;
	float: left;
}

.sign_up_ques_heading {
	font-family : verdana;
}


</style>
 

<form class = "form_sign-in" role = "form" action = "<?php $_PHP_SELF ?>" method = "POST" >

<div class = "loginDiv" >
<h2 class = "form_signin_heading"> Have an account? </br> </br> Log In </h2>
 </br>



 <input class = "loginclass" placeholder = " Login-Id " type = "text" name = "login_email" required autofocus > </br> </br>

  <input class = "loginclass" placeholder = " Password " type = "password" name = "login_password" required > </br> </br>

<button class = "buttonclass" type = "submit" name = "login_submit" > Login </button> 

</br>

</div>
</form>


</body>
</html>
