<!DOCTYPE html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<body style="background color:lightblue">
<?php
include("header.php");
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
  include("connection.php");
  
  $result = mysql_query("SELECT * FROM pict WHERE id=7");
  $row = mysql_fetch_array($result);
  echo "<div class='watch'><p>
  <img src='".$row['pic2']."'<div class='imagee'>
  <h3>".$row['namee']."</h3>
  <h4>".$row['cost']."$</h4>
  </p></div>";
  
  $result = mysql_query("SELECT * FROM pict WHERE id=8");
  $row = mysql_fetch_array($result);
  echo "<div class='watch1'><p>
  <img src='".$row['pic2']."'<div class='imagee'>
  <h3>".$row['namee']."</h3>
  <h4>".$row['cost']."$</h4>
  </p></div>";
  
  $result = mysql_query("SELECT * FROM pict WHERE id=9");
  $row = mysql_fetch_array($result);
  echo "<div class='watch2'><p>
  <img src='".$row['pic2']."'<div class='imagee'>
  <h3>".$row['namee']."</h3>
  <h4>".$row['cost']."$</h4>
  </p></div>";
  
  
  ?>
<?php
include("footer2.php");
?>
</body>
</html>

</style>
</head>
