
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


	if($_SERVER["REQUEST_METHOD"] == "POST") {
/*
	$TOOMD = mysqli_real_escape_string($conn, $_POST['OOMD']);

	 $TCNS = mysqli_real_escape_string($conn, $_POST['CNS']);

	 $TCC = mysqli_real_escape_string($conn, $_POST['CC']);

     $PCA = mysqli_real_escape_string($conn, $_POST['PCA']);

     $LPCA = mysqli_real_escape_string($conn, $_POST['PCAL']);
	     
	 $TWT = mysqli_real_escape_string($conn, $_POST['WT']);

	 $LWT = mysqli_real_escape_string($conn, $_POST['WTL']);

	 $TLI = mysqli_real_escape_string($conn, $_POST['LI']);

	 $TML = mysqli_real_escape_string($conn, $_POST['ML']);
	         
	 $LCNS = mysqli_real_escape_string($conn, $_POST['CNSL']);

	 $LCC = mysqli_real_escape_string($conn, $_POST['CCL']);
*/ 
	if(isset($_POST['reg_submit'])) {
		if(!empty($_POST['check_list'])){

			$stdid =  $_SESSION["xx"];
		$sql = "UPDATE registration set T_OOMD101 = 1,T_CNS102 = 1,T_ML103 = 1,T_WT104 = 1,L_WT104 = 1,T_PCA105 = 1,
		L_PCA105 = 1,T_CC106 = 1,L_CC106 = 1,L_CNS102 = 1,T_LI108 = 1
		 	where Std_id = (SELECT Std_id from student where Login_id = '$stdid')  ";
		 if(mysqli_query($conn, $sql)){

            
            header("location: Regdone.php ");

        }
        else {      
            echo "Error: ". $sql . "<br>" . mysqli_error($conn);
      }
    }
	} 
	/*

	if(isset($TOOMD)) {
		$sql = "INSERT into registration (T-OOMD101) Values ('1')";
		mysql_query($sql) or die(mysql_error());	
	} 
	if(isset($TCNS)) {
		$sql = "INSERT into registration (T-CNS102) Values ('1')";
		mysql_query($sql) or die(mysql_error());	
	} 

	if(isset($TML)) {
		$sql = "INSERT into registration (T-ML103) Values ('1')";
		mysql_query($sql) or die(mysql_error());
	} 

	if(isset($TWT)) {
		$sql = "INSERT into registration (T-WT104) Values ('1')";
		mysql_query($sql) or die(mysql_error());
	} 

	if(isset($LWT)) {
		$sql = "INSERT into registration (L-WT104) Values ('1')";
		mysql_query($sql) or die(mysql_error());
	} 

	if(isset($TPCA)) {
		$sql = "INSERT into registration (T-PCA105) Values ('1')";
		mysql_query($sql) or die(mysql_error());
	} 

	if(isset($LPCA)) {
		$sql = "INSERT into registration (L-PCA105) Values ('1')";
		mysql_query($sql) or die(mysql_error());
		
	} 
	
	if(isset($TCC)) {
		$sql = "INSERT into registration (T-CC106) Values ('1')";
		mysql_query($sql) or die(mysql_error());
	} 

	if(isset($LCC)) {
		$sql = "INSERT into registration (L-CC106) Values ('1')";
		mysql_query($sql) or die(mysql_error());
	} 

	if(isset($LCNS)) {
		$sql = "INSERT into registration (L-CNS102) Values ('1')";
		mysql_query($sql) or die(mysql_error());
	} 

	if(isset($LI)) {
		$sql = "INSERT into registration (L-LI108) Values ('1')";
		mysql_query($sql) or die(mysql_error());
	} 
*/

}

?>

<DOCTYPE !html>

<html>
<head> 
<title>
</title>
<link href="BootStrap\bootstrap-3.3.6-dist\css\bootstrap.min.css" rel="stylesheet">
   <script src="JQuery\jquery-2.2.2.min.js"></script>
   <script src="BootStrap\bootstrap-3.3.6-dist\js\bootstrap.min.js"></script>
</head>
<body class = "bodyclass" background = "\The-best-top-desktop-hd-white-wallpapers-white-wallpaper-6.jpg">
<link rel="stylesheet" type="text/css" href="/html/style.css">
<nav class = "navbar navbar-inverse navbar-static-top" role = "navigation">
   
   <div class = "navbar-header">
      <a class = "navbar-brand" href = "Mainloggedin2.php"><em><span class = "spclass" >SHIKSHA CLOUD</em></a></span>
   </div>
   
   <div>
      <ul class = "nav navbar-nav">
         <li><a href = "login.php" ><span class = "spclass" > HOME</span></a></li> 
         <li class = "dropdown"><a href = "#" class = "dropdwon-toggle" data-toggle = "dropdown"><span class = "spclass" >USER</span>
         <b class = "caret"></b>
      </a> 

         <ul class = "dropdown-menu">
               <li ><a href = "editinfo.php">EDIT PROFILE</a></li>
               <li  ><a href = "tt.php">TIME-TABLE</a></li>
               <li  ><a href = "calendar.php">ACADEMIC CALENDAR</a></li>
               <li  ><a href = "login.php">LOG OUT</a></li>
         </ul>
      </li>

      	 <li class = "dropdown"><a href = "#" class = "dropdwon-toggle" data-toggle = "dropdown"><span class = "spclass" >SYLLABUS</span>
         <b class = "caret"></b>
      </a> 

         <ul class = "dropdown-menu">
          <li ><a href = "syll.php">TY BTech Computer (SEM 6)</a></li>
                
         </ul>
      </li>

         <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"> <span class = "spclass" >REGISTRATION</span>
               <b class = "caret"></b>
            </a>
            
            <ul class = "dropdown-menu">
               <li ><a href = "#">NEW TERM REGISTRATION</a></li>
               
            </ul>
            
         </li>
      </ul>
   </div>
   
</nav>



<style>



.regdiv .regbutton {

	height: 45px;	
	width:  88px;
	font-family : verdana;
	 border-radius: 10px;
	 cursor:pointer;

}

.regdiv {

	padding: 25px;
	float: left;
}

.spclass {
   color : white;
   font-family: verdana;

}


body {
	background-repeat: no-repeat;
}

.tab_class {
	border : 1px  solid #000000 ;
	font-family : verdana ;
	cell-padding : 2px ;
	cell-spacing :2px ;
	background-color : white ;
	position : center;
}

td.a {
			border-style:solid;
            border-width:3px;
            border-color:#000000; 
            padding: 5px;

}

td.b {
			border-style:solid;
            border-width:3px;
            border-color:#000000; 
            padding: 5px;

}

.body_class {

}

</style>
<form class = "form_reg" action = "<?php $_PHP_SELF ?>" method = "POST">
<table class = "tab_class"> 
<tr>
	<td class = "a"> T-OOMD101 </td>
	<td class = "b"> <input type = "checkbox" name = "check_list[]" value = "on" > SOFTWARE ARCHITECTURE <br><br> </td>
</tr>

<tr>
	<td class = "a"> T-CNS102 </td>
	<td class = "b"> <input type = "checkbox" name = "check_list[]" value = "on"  > IMAGE PROCESSING <br><br> </td>
</tr>
	
<tr>
	<td class = "a"> T-ML103 </td>
	<td class = "b"> <input type = "checkbox" name = "check_list[]" value = "on"  > DATA MINING AND DATA WAREHOUSING <br><br> </td>
</tr>

<tr>
	<td class = "a"> T-WT104 </td>
	<td class = "b"> <input type = "checkbox" name = "check_list[]"  value = "on" > SIGNAL PROCESSING APPLICATIONS <br><br> </td>
</tr>

<tr>
	<td class = "a"> L-WT104 </td>
	<td class = "b"> <input type = "checkbox" name = "check_list[]"  value = "on"> IMAGE PROCESSING LAB <br><br> </td>
</tr>

<tr>
	<td class = "a"> T-PCA105 </td>
	<td class = "b"> <input type = "checkbox" name = "check_list[]" value = "on" > INFORMATION SECURITY <br><br> </td>
</tr>

<tr>
	<td class = "a"> L-PCA105 </td>
	<td class = "b"> <input type = "checkbox" name = "check_list[]" value = "on" > INFORMATION SECURITY LAB <br><br> </td>
</tr>

<tr>
	<td class = "a"> T-CC106 </td>
	<td class = "b"> <input type = "checkbox" name = "check_list[]"  value = "on" > COMPILER CONSTRUCTION <br><br> </td>
</tr>

<tr>
	<td class = "a"> L-CC106 </td>
	<td class = "b"> <input type = "checkbox" name = "check_list[]"  value = "on" > DATA MINING AND DATA WAREHOUSING LAB <br><br> </td>
</tr>


<tr>
	<td class = "a"> T-LI108 </td>
	<td class = "b"> <input type = "checkbox" name = "OSTL"  value = "on"  > CYBER LAWS(Extra-Curricular) <br><br> </td>
</tr>

</table>


 <div class = "regdiv" >
<button class = "regbutton" type = "submit" name= "reg_submit"  > REGISTER</button>
</div>
</form>     

</body>

</html>
