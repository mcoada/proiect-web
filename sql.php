<?php
$hostname = "localhost";
$username = "root";
$password = "";
$bd = "userweb";

$conexiune = mysqli_connect($hostname,$username,$password,$bd);
if (!$conexiune)
{
    die("conexiune failed" . mysqli_connect_error());
}



?>

