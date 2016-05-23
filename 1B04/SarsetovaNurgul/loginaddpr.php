<?php
include("connection.php");

$menuitem = $_POST['menuitem'];
$menupic = $_POST['picture'];
$namee = $_POST['name'];
$cost = $_POST['price'];

if($_FILES["picture1"]["error"] > 0)
	header("loginadd.php?insert=false");
	//echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
else 
{	
	move_uploaded_file($_FILES["pic2"]["tmp_name"],"imggg/" . $_FILES["file"]["name"]);
} 


$statement = "INSERT INTO admin (menuitem, menupic, pic2, namee, cost) VALUES ('".$menuitem."', '".$menupic."', '".$pic2."', '".$namee."', '".$cost."' ,'imggg/" . $_FILES["file1"]["name"]."')";

$result = mysql_query($statement);

if($result)
	header("Location: loginadd.php?insert=true");
else 
	if(!header)header("Location: loginadd.php?insert=false");

mysql_close($con);
?>
