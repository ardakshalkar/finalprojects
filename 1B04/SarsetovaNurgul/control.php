<html><head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css"/>
</style>
</head>
<body>

<body style="background color:lightblue">


<?php
include("header.php")
?>

<div id="nav">
<div class="menuitem">
<a href="project.php">Main</a><br></div>
<div class="menuitem">
<a href="4444.php">Diamonds</a><br></div>

<div class= "menuitem">
<a href="jewellery.php">Weddings</a><br></div>
<div class="menuitem">
<a href="watches.php">Watches</a><br></div>
<div class="menuitem">
<a href="sale.php">Sale</a>
</div>
</div>

<?php 

$username = $_POST['username']; 
$password = $_POST['password']; 
$username2 = 'Nurgul'; 

$sql = mysql_query("SELECT * FROM adminnn WHERE Username='".$username."' "); 


$row = mysql_fetch_array($sql); 

if($row['password'] == md5($password)) 
{ 
session_start(); 
$_SESSION['username'] = $row['username']; 
} 
if($username == $username2) 
header("Location: loginadd.php"); 
else if($username == $row['username']) 
header("Location: log.php?login=true"); 

else header("Location: log.php?login=false"); 
?>
