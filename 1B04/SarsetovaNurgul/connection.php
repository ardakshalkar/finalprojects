<?php
$con = mysql_connect("localhost", "root", "");
if(!$con)
{	
	echo "Could not connect. " . mysql_error();
}

mysql_select_db("admin");
mysql_query("SET NAMES 'UTF8'");
?>
