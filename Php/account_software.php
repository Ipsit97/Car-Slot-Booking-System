<?php
session_start();
$conn_error="Could not connect";
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='software_project';

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysql_select_db($mysql_db))
{
die($conn_error);
}

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$country=$_POST['country'];


function user_exists($name)
{
global $name;
$query="SELECT name from login WHERE name='$name'";
$query_run=mysql_query($query);
$count_rows=mysql_num_rows($query_run);

if($count_rows==0)
return false; 
else if($count_rows>=1)
return true;
}

function user_add($name,$email,$password,$contact,$country)
{
$query="INSERT INTO login values('$name','$email','$password','$contact','$country')";
@$query_run=mysql_query($query);
echo '<script>
alert("Account created successfully!Please login again.");
 </script>

';

echo '<script>
window.location.assign("ma.html");
 </script>

';

}

if (user_exists($name))
{echo "<script> alert('Username already exists')</script>";
echo '<script>
window.location.assign("ma.html");
 </script>

';

}

else
{
user_add($name,$email,$password,$contact,$country);
}
?>