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

if($area="SJT")
{
        
        $query="DELETE FROM sjt WHERE area='$area' && day='$day' && name='$name'";
	if($query_run=mysql_query($query))   
        {
        echo'<script>alert("Record deleted successfully")</script>';
	echo '<script>
	window.location.assign("bookings.php");
 	</script>';
        } 
	else
        {
        echo'<script>alert("Enter Correct Data")</script>';
	echo '<script>
	window.location.assign("bookings.php");
 	</script>';
        }        
}


if($area="Main Building")
{
        
        $query="DELETE FROM mb WHERE area='$area' && day='$day' && name='$name'";
	if($query_run=mysql_query($query))
	{
         echo'<script>alert("Record deleted successfully")</script>';
	echo '<script>
	window.location.assign("bookings.php");
 	</script>';
         } 
        else
        {
        echo'<script>alert("Enter Correct Data")</script>';
	echo '<script>
	window.location.assign("bookings.php");
 	</script>';
        }        
	 
}

if($area="Central Library")
{
        
        $query="DELETE FROM library WHERE day='$day' && name='$name'";
	if($query_run=mysql_query($query))
        {
	echo'<script>alert("Record deleted successfully")</script>';
	echo '<script>
	window.location.assign("bookings.php");
 	</script>';
	 } 
        else
        {
        echo'<script>alert("Enter Correct Data")</script>';
	echo '<script>
	window.location.assign("bookings.php");
 	</script>';
        }        
}

if($area="Technology Tower")
{
        
        $query="DELETE FROM tt WHERE day='$day' && name='$name'";
	if($query_run=mysql_query($query))
	{
        echo'<script>alert("Record deleted successfully")</script>';
	echo '<script>
	window.location.assign("bookings.php");
 	</script>';
	 } 
        else
        {
        echo'<script>alert("Enter Correct Data")</script>';
	echo '<script>
	window.location.assign("bookings.php");
 	</script>';
        }        

}

?>