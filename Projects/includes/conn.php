/*
 * conn.php
 * conncet the server with database
 */
<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$databasename = "coursehub";

	$conn = mysqli_connect($servername, $dbusername, $dbpassword, $databasename);
