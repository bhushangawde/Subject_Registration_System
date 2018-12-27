<?php
   
   $user = 'root';
   $password = '';
   $host = 'localhost';
   $db = 'newshikshacloud';
   

   $conn = mysqli_connect($host,$user , $password, $db);
   session_start();
   /*
   $g=$_SESSION['xx'];
   //$check = $_SESSION['tf'];
   $t = $_SESSION['regstdid'];
*/
   if($_SESSION['xx'] != NULL){
   
   $g=$_SESSION['xx'];
   $sql = "SELECT * FROM student WHERE Login_id = '$g' ";
   
   }
   else if($_SESSION['regstdid'] !=  NULL){
    $t = $_SESSION['regstdid'];
    $sql = "SELECT * FROM student WHERE Login_id = '$t' ";
   }


   $result= mysqli_query($conn,$sql);

   if(mysqli_num_rows($result)>0)
   {
      while($row = mysqli_fetch_assoc($result))
      {

         $stdid = $row['Student_ID'];
         $login = $row['Login_id'];
         $email = $row['EmailID'];
         $pw = $row['Password'];
         $fname = $row['F_Name'];
         $lname = $row['L_Name'];
         $dad = $row['Father_Name'];
         $bday = $row['Birth_Date'];
         $adhar = $row['Aadhar'];
         $contact = $row['Contact'];
         $cpi = $row['CPI'];
        $_SESSION['next']=$stdid; 
      }
   }
    
     

?>

<!DOCTYPE html>
<html>
<head>
   <title></title>
   <link href="BootStrap\bootstrap-3.3.6-dist\css\bootstrap.min.css" rel="stylesheet">
   <script src="JQuery\jquery-2.2.2.min.js"></script>
   <script src="BootStrap\bootstrap-3.3.6-dist\js\bootstrap.min.js"></script>
</head>

<body>
<link rel="stylesheet" type="text/css" href="/html/style.css">

<style>


.welcomeheading {
   font-family : verdana ; 
}
.infodiv {
     line-height: 30px;
     margin-left: 450px;

     margin-top: -700px;
   padding-bottom :20px; 
   font-family: verdana;

}

.info {
   font-family: verdana;

   font-size: 18px;
   color: #2f4f4f;
}


body {
   background-repeat: no-repeat;
}

.table {
   color: #017572;
    white-space: 20px;
    border-spacing: 40px;
    width: 0px;
    padding-right: 200px;
    word-spacing: 2px;
    line-height: 20px;
}

.spclass {
   color : white;
   font-family: verdana;

}

</style>
 
   <nav class = "navbar navbar-inverse navbar-static-top" role = "navigation">
   
   <div class = "navbar-header">
      <a class = "navbar-brand" href = "mainloggedin2.php"><em><span class = "spclass" >SHIKSHA CLOUD</span></em></a>
   </div>
   
   <div>
      <ul class = "nav navbar-nav">
         <li><a href = "login.php"><span class = "spclass" >HOME</span></a></li> 
         <li class = "dropdown"><a href = "#" class = "dropdwon-toggle" data-toggle = "dropdown"><span class = "spclass" >USER</span>
         <b class = "caret"></b>
      </a> 

         <ul class = "dropdown-menu">
               <li > <a href = "editinfo.php">EDIT PROFILE</a></li>
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
               <li ><a href = "registration.php">NEW TERM REGISTRATION</a></li>
               
            </ul>
            
         </li>
      </ul>
   </div>
   
</nav>
<img src = "images\avatar_2x.png" height = "250px" width = "250px" >
<h3 class = "welcomeheading"> <em> Hello! Welcome. </em> </h3><br>

<div class = "infodiv">
<table class = "table">
<tr>   
<td><em><span class="info"><b><u> Login ID</u>:</td>
<td></b><?php echo "  ".$login; ?> </span> </em> </td> <br><br>
</tr>
<tr>
<td><em><span class="info"> <b><u>Student ID</u>: </b> </td>
<td><?php echo "     ".$stdid; ?> </span> </em></td><br><br>
</tr>
<tr>
<td><em><span class="info"> <b><u>Email ID</u>:</b></td>
<td><?php echo "  ".$email; ?> </span> </em></td><br><br>
</tr>
<tr>
<td><em><span class="info"> <b><u>Full Name</u>:</b></td>
<td> <?php echo "  ".$fname."  ".$dad."  ".$lname; ?> </span> </em></td><br><br>
</tr>
<tr>
<td><em><span class="info"><b><u> Birth Date </u>:</b></td>
<td><?php echo "  ".$bday ; ?> </span> </em></td><br><br>
</tr>
<tr>
<td><em><span class="info"><b><u> Aadhar NO</u>:</b></td>
<td> <?php echo "  ".$adhar ; ?> </span> </em></td><br><br>
</tr>
<tr>
<td><em><span class="info"> <b><u>Contact NO</u>:</b> </td>
<td><?php echo "  ".$contact ; ?> </span> </em></td><br><br>
</tr>
<tr>
<td><em><span class="info"> <b><u>CPI</u>: </b></td>
<td><?php echo "  ".$cpi; ?> </span> </em></td><br><br>
</tr>
</table>
</div>

</body>
</html>