<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login_db";

//Create Connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

//check connection
if(!$conn){
die("Connection failed".mysqli_connect_errno());
}
?>