<?php
$connect = mysql_connect("localhost", "root", "");
if(!$connect)
{	
	echo "Could not connect. " . mysql_error();
}

mysql_select_db("admin");

?>
