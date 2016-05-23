<!DOCTYPE html> 
<head> 
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
session_start(); 

if(!isset($_SESSION['login']) || !isset($_SESSION['id'])) 
{ 
?> 

<div class="sign">  
Login to <a href="project.php">GOLDSMITHS</a> 
<form action="control.php" method="post"> 
Your Username: <input type="text" name="username" class="name" placeholder="username"/></br> 
Your Password:</br> <input type="password" class="name" name="password" placeholder="password"/></br></br> 
<input type="submit" align=center value="Login" /> 
</form> </div>



</div> 
<?php } 
if(isset($_SESSION['username']) && isset($_SESSION['id'])) 
{ 

include("header.php"); 
echo " 
<input type='submit' class='register' value='login' /> 
<a href='logout.php' class='logout'><input type='button' class='register' value='logout' /></a>"; 

$login = $_GET['login']; 

if(isset($login)) if($login == "true") 
echo " <label class='contact'><strong style='color:red'>Login was successful</strong></label>"; 
else echo " <label class='contact'><strong style='color:red'>Login was not successful</strong></label>"; 

} 
?>
<?php
include("footer3.php");
?>
</body>
</html>


