<html>
<head>
<title>Welcome User</title>
<style>
div.a
{
background-color:black;
color:white;
height:60px;
font:50px verdena italic;
}
div.div1
{
background-color:rgb(7,76,99);
height:100%;
margin-left:400px;
margin-right:400px;
border:5px black solid;
}
body{
margin-top:0px;
}
#img
{
float:left;
width:50px;
height:50px;
margin-top:6px;
margin-left:5px;
}
p.p
{
text-align:center;
font-size:25px;
font-weight:bold;
color:rgb(67,160,148);
}

</style>
</head>
<body background="background.jpeg" >
<div class="div1">
<div class="a">
<img id="img" src="b.jpg" >
<center>BOOKING SYSTEM</center>
</div>

<p class="p"> <i>Welcome </i></p>

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

$name=$_SESSION['signname'];


$query="SELECT Name,ContactNo FROM login WHERE Name='$name'";
$query_run=mysql_query($query);
echo '<center><table style="width:215px; border:2px black solid"></center>';
  echo '<tr>';
  echo '<td> <strong>Name</strong> </td>';
  echo '<td> <strong>ContactNo</strong> </td>';
  echo '</tr>';

 while($row=mysql_fetch_assoc($query_run)){
$name1 = $row['Name']; 
 $contact = $row['ContactNo'];
 echo '<tr>';
   echo '<td>'.$name1.'</td>';
   echo '<td>'.$contact.'</td>';

  }
echo '</tr>';
echo '</table>';

?>

</body>
</html>