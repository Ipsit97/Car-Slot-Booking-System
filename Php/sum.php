<?php
$conn_error="Could not connect";
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='PASSWORD';
$mysql_db='form';

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysql_select_db($mysql_db))
{
die('$conn_error');
}

$name=$_POST['n1'];
$email=$_POST['n2'];
$password=$_POST['n3'];
$date=$_POST['n4'];

$query="INSERT INTO details VALUES('$name','$email','$password','$date')";
$query_run=mysql_query($query);

$query1="SELECT * FROM details";
$query_run1=mysql_query($query1);
$count_rows=mysql_num_rows($query_run1);





echo'<table >';
echo '<tr>';
echo '<th> Name</th>';
echo '<th> Password</th>';
echo '<th> email</th>';
echo '<th> date</th>';

echo '</table>';



?>

