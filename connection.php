<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "my_db";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
