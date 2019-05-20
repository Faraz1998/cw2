<?php
   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");
if(isset ($_POST['delete']))
{ $Ar = $_POST['checkbox'];
foreach($Ar as $studentid)
 {mysqli_query ($conn,  "Delete From student where studentid = $studentid"); }
header("Location:students.php"); }
?>
