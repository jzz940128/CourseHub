/*
 *signup.php
 *support the page that user create account
 *insert user's username password into database
 */
<?php
	include_once 'conn.php';

	$accountname = $_POST['in_account'];
	$username = $_POST['in_username'];
	$password = $_POST['in_password'];

	$sql = "INSERT INTO userinfor(username, userID, passward) VALUES ('$accountname', '$username','$password');";
	mysqli_query($conn, $sql);
	header("Location: ../index.php?signup=success");
