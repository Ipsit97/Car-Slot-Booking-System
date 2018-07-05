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
</style>
</head>
<body>
<body background="background.jpeg" >
<div class="div1">
<div class="a">
<img id="img" src="b.jpg" >
<center>BOOKING SYSTEM</center>
</div>
<br>
<br>
<center>
<form method="post" action="d1.php">
Enter the area:<input type="text" name="area1"></input><br><br>
Enter the day:<input type="text" name="day1"></input><br><br>
<input type="submit" value="Submit details">
</form>
</center>
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

$query="select area,day from mb where name='$name'  && day!='NULL1'";
$query_1="select area,day from tt where name='$name'  && day!='NULL1'";
$query_2="select area,day from library where name='$name' && day!='NULL1'";
$query_3="select area,day from sjt where name='$name' && day!='NULL1'";

$query_run=mysql_query($query);
$query_run_1=mysql_query($query_1);
$query_run_2=mysql_query($query_2);
$query_run_3=mysql_query($query_3);

    $count_rows_1=mysql_num_rows($query_run);
    $count_rows_2=mysql_num_rows($query_run_1);
    $count_rows_3=mysql_num_rows($query_run_2);
    $count_rows_4=mysql_num_rows($query_run_3);


echo '<center><h3>YOU BOOKED</h3></center>';
 echo '<center><table style="width:215px; border:2px black solid"></center>';
  echo '<tr>';
  echo '<td> <strong>Area</strong> </td>';
  echo '<td> <strong>Day</strong> </td>';
  echo '</tr>';

 while($row=mysql_fetch_assoc($query_run)) {
   $area = $row['area'];
   $day = $row['day'];

   echo '<tr>';
   echo '<a href=" "><td>'.$area.'</td></a>';
   echo '<a href=" "><td>'.$day.'</td></a>';

  }

  echo '</tr>';

 while($row=mysql_fetch_assoc($query_run_1)) {
   $area = $row['area'];
   $day = $row['day'];

   echo '<tr>';
   echo '<a href=" "><td>'.$area.'</td></a>';
   echo '<a href=" "><td>'.$day.'</td></a>';

  }

  echo '</tr>';
 while($row=mysql_fetch_assoc($query_run_2)) {
   $area = $row['area'];
   $day = $row['day'];

   echo '<tr>';
   echo '<a href=" "><td>'.$area.'</td></a>';
   echo '<a href=" "><td>'.$day.'</td></a>';

  }

  echo '</tr>';
 while($row=mysql_fetch_assoc($query_run_3)) {
   $area = $row['area'];
   $day = $row['day'];

   echo '<tr>';
   echo '<a href=" "><td>'.$area.'</td></a>';
   echo '<a href=" "><td>'.$day.'</td></a>';

  }

  echo '</tr>';
  echo '</table>';


?>

</body>
</html>
</html>