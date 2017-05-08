<?php
$ses=mysqli_connect("localhost","root","rohit","istp");
if(!$ses)
{
        echo("connection to content server failed");
        exit();
}
$eventing=$_POST['pfname'];
 $date=date('Y-m-d H:i:s');
$query="update govt set infor='$eventing' " ;
$result=mysqli_query($ses,$query);
echo "Entered Successfully";
echo "<meta http-equiv=\"refresh\" content=\"3;URL=main.html\" />";
?>

