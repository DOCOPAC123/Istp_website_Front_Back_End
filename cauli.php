<?php
$ses=mysqli_connect("localhost","root","rohit","istp");
if(!$ses)
{
	echo("connection to content server failed");
	exit();
}
$query="SELECT * from crops where quan=112 ";
$result=mysqli_query($ses,$query);
while($row=mysqli_fetch_assoc($result))
{
	$id=$row['name'];
	echo $id ;
	
}
?>
