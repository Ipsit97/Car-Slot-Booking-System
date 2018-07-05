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

$area=$_POST['area1'];
$day=$_POST['day1'];
$name=$_SESSION['signname'];
echo $area;
echo $day;
if($area="SJT")
{
$query_4="SELECT area,day FROM sjt WHERE area='$area' && day='$day'  && name='$name'";
$query_run=mysql_query($query_4);
$count_rows=mysql_num_rows($query_run);
	if($count_rows==0)
	{
	echo'<script> alert("Please enter correct day")</script>';
	echo '<script>
        window.location.assign("bookings.php");
        </script>';
	}
	else
	{
	$query="DELETE FROM sjt WHERE area='$area' && day='$day' && name='$name'";
	$query_run=mysql_query($query);
	echo'<script>alert("Record deleted successfully")</script>';
	echo '<script>
	window.location.assign("bookings.php");
 	</script>';
	}
echo 'done';
}


if($area="Main Building")
{
$query_1="SELECT area,day FROM mb WHERE area='$area' && day='$day' && name='$name'";
$query_run=mysql_query($query_1);
$count_rows=mysql_num_rows($query_run);
        if($count_rows==0)
         {
        echo'<script> alert("Please enter correct day")</script>';
        echo '<script>
        window.location.assign("bookings.php");
        </script>';
         }
	else
	 {
	$query="DELETE FROM mb WHERE area='$area' && day='$day' && name='$name'";
	$query_run=mysql_query($query);
	echo'<script>alert("Record deleted successfully")</script>';
	echo '<script>
	window.location.assign("bookings.php");
 	</script>';
	 }
echo 'done';
}

if($area="Central Library")
{
$query_2="SELECT area,day FROM library WHERE day='$day' && name='$name'";
$query_run=mysql_query($query_2);
$count_rows=mysql_num_rows($query_run);
	if($count_rows==0)
	{
        echo'<script> alert("Please enter correct day")</script>';
        echo '<script>
        window.location.assign("bookings.php");
        </script>';
        }

	else
	{
	$query="DELETE FROM library WHERE day='$day' && name='$name'";
	$query_run=mysql_query($query);
	echo'<script>alert("Record deleted successfully")</script>';
	echo '<script>
	window.location.assign("bookings.php");
 	</script>';
	}
echo 'done';
}

if($area="Technology Tower")
{
$query_3="SELECT area,day FROM tt WHERE day='$day' && name='$name'";
$query_run=mysql_query($query_3);
$count_rows=mysql_num_rows($query_run);
	if($count_rows==0)
	{
	echo'<script> alert("Please enter correct day")</script>';
	echo '<script>
        window.location.assign("bookings.php");
        </script>';
	}	
	else
	{
	$query="DELETE FROM tt WHERE day='$day' && name='$name'";
	$query_run=mysql_query($query);
	echo'<script>alert("Record deleted successfully")</script>';
	echo '<script>
	window.location.assign("bookings.php");
 	</script>';
	}
echo 'done';
}

?>