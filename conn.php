<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"], 1);
$active_group = 'default';
$query_builder = TRUE;

//$con = mysqli_connect("localhost", "root", "", "foodordering", "3308");
$con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

//check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySql" . mysqli_connect_errno();
} else {
	// success
}
