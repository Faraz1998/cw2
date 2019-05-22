<?php
include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");
include("templates/partials/header.php");
include("templates/partials/nav.php");
?>

<html>
<head>
</head>
<body>
<form action="addnewstudent.php" method="post">
  Add Student Details
  </br></br>
Student ID:<input type ="text" name="ID">
</br></br>
Date Of Birth:<input type ="text" name="DOB">
</br></br>
First Name:<input type ="text" name="FirstName">
</br></br>
Surname:<input type ="text" name="Surname">
</br></br>
House:<input type ="text" name="House">
</br></br>
Town:<input type ="text" name="Town">
</br></br>
County:<input type ="text" name="County">
</br></br>
Country:<input type ="text" name="Country">
</br></br>
Postcode:<input type ="text" name="Postcode">
</br></br>
<input type ="submit" value="Insert">
</form>
</body>
</html>
