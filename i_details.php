<!DOCTYPE html>
<html>
<head>
	<title>Farmer PORTAL</title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
<style>
 {
  text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}	
</style>
</head>
<body>
<center>
	<?php
		$conn = mysqli_connect('localhost','root','rohit','istp');
		if(!$conn)
			die("Connection failed!<br>".mysqli_connect_error());
			$name = $_POST['pfname'];
                        $village = $_POST['paddress'];
                        $seed = $_POST['seed'];
                        $type = $_POST['ptran'];
                        $quantity = $_POST['quant'];
                        $contact = $_POST['pcontacts'];
			$date=date('Y-m-d H:i:s');
			if($type=='Withdraw')
			{
			$query= "INSERT INTO temp values('$name','$village','$seed','$type','$contact','$quantity','date')";
                       	$result = mysqli_query($conn,$query);
			$query="update crops set quan=quan-'$quantity' where name='$seed' ";
			$result=mysqli_query($conn,$query);
			}
			else
			{
			if($type=='Deposit')
                        {
                        $query= "INSERT INTO temp values('$name','$village','$seed','$type','$contact','$quantity','$date')";
                        $result = mysqli_query($conn,$query);
                        $query="update crops set quan=quan+'$quantity' where name='$seed' ";
                        $result=mysqli_query($conn,$query);
                        }

			}
			echo "Redirecting you back to Main Page.";
		echo "<meta http-equiv=\"refresh\" content=\"3;URL=main.html\" />";
	?>
</center></body>
</html>
