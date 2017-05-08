<!DOCTYPE html>

<html>
<head>
	<title>table</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<h1>Patient Specific Record</h1>
	<table class="table" border="5px" align="center" width="600" cellspacing="1" cellpadding="1">
		<tr>
			<th >Name</th>
			<th >Village</th>
			<th >Seed</th>
			<th >Task</th>
			<th >Phone</th>
		</tr>
		<?php
		$conn = mysqli_connect('localhost','root','rohit','istp');
		if(!$conn)
			die("Connection failed!<br>".mysqli_connect_error());
			$query = "SELECT * FROM temp";
			$result = mysqli_query($conn,$query);
			while($transaction=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td class=\"success\">".$transaction['fname']."</td>";
				echo "<td class=\"info\">".$transaction['addr']."</td>";
				echo "<td class=\"warning\">".$transaction['cars']."</td>";
				echo "<td class=\"success\">".$transaction['tran']."</td>";
				echo "<td class=\"info\">".$transaction['contacts']."</td>";
				echo "</tr>";
			}
		?>
		</center>
	</body>
</html>
