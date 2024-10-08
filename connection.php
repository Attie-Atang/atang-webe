<?php
$dbservername="sql202.infinityfree.com";
$dbusername="if0_37472735";
$dbpassword="hza7Ele6vx2";
$dbName="if0_37472735_cvdatabase";




$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbName);
if(!$conn)
 die ('Could not connect to the database server' . mysqli_connect_error());
else
	//echo " FUCKING!!.....connection established";

?>