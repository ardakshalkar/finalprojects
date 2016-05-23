 <?php
include("connection.php");

$name = $_GET['name'];
$surname = $_GET['surname'];
$mail = $_GET['mail'];
$pasword = $_GET['pasword'];
$request = "INSERT INTO user (Name, Surname,Email, Password) VALUES ('".$name."','".$surname."','".$mail."', '".md5($pasword)."')";
mysql_query($request);
mysql_close($con);
header("Location: regis.php?regis=true");
?>
