<?php
session_start();
$conn_error="Could not connect";
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='PASSWORD';
$mysql_db='software_project';

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysql_select_db($mysql_db))
{
die('$conn_error');
}
$text=$_POST['text1'];
$name=$_SESSION['signname'];

$query="INSERT INTO feedback values('$name','$text')";
$query_run=mysql_query($query);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
?>