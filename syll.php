<?php

   $file = "T Y B TECH COMP SYLLABUS SCHEME FINALISED IN BOS 21 JUNE 20161-1.pdf";
$fp = fopen($file, "r") ;

header("Cache-Control: maxage=1");
header("Pragma: public");
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=".$myFileName."");
header("Content-Description: PHP Generated Data");
header("Content-Transfer-Encoding: binary");
header('Content-Length:' . filesize($file));
ob_clean();
flush();
while (!feof($fp)) {
   $buff = fread($fp, 1024);
   print $buff;
}
exit;

?>

<DOCTYPE !html>

<html>
<head> 
<title>
</title>
</head>
<body>


</body>

</html>
