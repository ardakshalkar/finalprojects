<!DOCTYPE html> 
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css"
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
  
  $result = mysql_query("SELECT * FROM pict WHERE id=4");
  $row = mysql_fetch_array($result);
  echo "<div class='watch'><p>
  <img src='".$row['pic2']."'<div class='imagee'>
  <h3>".$row['namee']."</h3>
  <h4>".$row['cost']."$</h4>
  </p></div>";
  
  $result = mysql_query("SELECT * FROM pict WHERE id=5");
  $row = mysql_fetch_array($result);
  echo "<div class='watch1'><p>
  <img src='".$row['pic2']."'<div class='imagee'>
  <h3>".$row['namee']."</h3>
  <h4>".$row['cost']."$</h4>
  </p></div>";
  
  $result = mysql_query("SELECT * FROM pict WHERE id=6");
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
<!-- <div class="footer2">

<button class="button1">Find Us Here</button>

<a href="https://vk.com/audios195818109" button class="button"><img src="http://www.bccapper.ru/images/Mezhdunarodny_logotip_VK.png" style="float:right;width:20px;">
</button></a>
<a href="https://instagram.com/goldsmiths_uk/" button class="button"><img src="http://static.wixstatic.com/media/5fc307_0d57813335a74253a8b0e10aef8bb443.png" style="float:right;width:20px;" ></button></a>
<a href="https://twitter.com/Goldsmithsuk" button class="button"><img src="http://www.ccvf.pt/images/fb_logo.png" style="float:right;width:20px;" ></button></a>
<a href="https://www.facebook.com/pages/Goldsmiths/369815513040048" button class="button"><img src="https://g.twimg.com/Twitter_logo_white.png" style="float:right;width:20px;" ></button></a>

&#9819; <a href="file:///C:/Users/%D0%9D%D1%83%D1%80%D0%B3%D1%83%D0%BB%D1%8C/Desktop/hw/about.html"><span style="cursor:help">About Us</span></a><br>
     &#9819; <a href="#">Store Locator</a><br>
    &#9819; <a href="file:///C:/Users/%D0%9D%D1%83%D1%80%D0%B3%D1%83%D0%BB%D1%8C/Desktop/hw/contact.html">Contact Us</a>
</div> -->

</body>
</html>

</style>
</head>
