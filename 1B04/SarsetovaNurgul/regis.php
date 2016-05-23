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

<form name="regis" action="regi.php" method="GET"> 
<div class="sign">

Name:<br>
<input type="text" name="name">
<br>
Surname:<br>
<input type="text" name="surname">
<br>
Email:<br>
<input type="text" name="mail" >
<br>
Password:<br>
<input type="password" name="pasword">
<br>

<input type="submit" class="submit" value="submit" />
</div> 
</form>
 </form>    
<div><?php if(isset($_GET['regis']))</div>
</div>  

</div>

<?php
include("footer3.php");
?>

</body>
</html>

</style>
</head>
