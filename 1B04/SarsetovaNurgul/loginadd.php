<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css"/>

</style>

<?php
include("header.php")
?>
</head>
<body>
<body style="background color:lightblue">
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
<form action="login.php" method="post" enctype="multipart/form-data">

		
			<div class="form_row">
                    <label class="contact"><strong>menuitem</strong></label>
                    <select class="contact_input" name="menuitem">
						
						<option value="diamond">Diamond</option>
						<option value="Wedding">Wedding</option>
						<option value="watch">Watch</option>
						
					</select>
              
                    <label class="contact"><strong>picture:</strong></label><br>
                    <input type="file" class="contact_input" name="menupic" id="file1" /><br>
                
               <label class="contact"><strong>Price:</strong></label><br>
               <input type="text" class="contact_input" name="cost" /><br>
            
			
			
                   <label class="contact"><strong>name:</strong></label><br>
                   <textarea class="contact_textarea" cols="30" rows="7" name="namee"></textarea><br>
           
                    <label class="contact"><strong>picture1:</strong></label><br>
                    <input type="file" class="contact_input" name="pic2" id="file1" /><br>
                			
				
                    <input type="submit" class="register" value="add" />
                

		</form>
		<div>
			<?php
				$insert = $_GET['insert'];
				if(isset($insert))
				{
				 	if($insert == 'true') 
						echo "<span style='color:red'>Added successful</span>";
					else if($insert == 'false')
						echo "<span style='color:red'>Error while adding</span>";
				}
			?>
		</div>
<?php
include("footer2.php");
?>
</body>
</html>
