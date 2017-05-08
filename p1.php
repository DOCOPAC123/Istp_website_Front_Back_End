<?php

$conn=mysqli_connect('localhost','root','rohit');

if(!$conn)
{
	echo("not connected"); 
	//die("connection failed".mysqli_connect_error());

}
echo "connecte successfully";
?> 
