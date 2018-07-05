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

if (isset($_POST['r2']))
{
$area=$_POST['r2'];
$_SESSION['area1']=$area;
if ($area=='tt')
 {
   $query_1="DELETE FROM sjt WHERE Day='NULL1' ";
   $query_run=mysql_query($query_1);
   $query_2="DELETE FROM mb WHERE Day='NULL1' ";
   $query_run=mysql_query($query_2);
   $query_3="DELETE FROM library WHERE Day='NULL1' ";
   $query_run=mysql_query($query_3);
   echo '<script>
window.location.assign("days-1.php");
 </script>

';
 }

else if ($area=='sjt')
 { 
   $query_1="DELETE FROM tt WHERE Day='NULL1' ";
   $query_run=mysql_query($query_1);
   $query_2="DELETE FROM mb WHERE Day='NULL1' ";
   $query_run=mysql_query($query_2);
   $query_3="DELETE FROM library WHERE Day='NULL1' ";
   $query_run=mysql_query($query_3);
      echo '<script>
window.location.assign("days-1.php");
 </script>

';
 }

else if ($area=='mb')
 { 
   $query_1="DELETE FROM tt WHERE Day='NULL1' ";
   $query_run=mysql_query($query_1);
   $query_2="DELETE FROM sjt WHERE Day='NULL1' ";
   $query_run=mysql_query($query_2);
   $query_3="DELETE FROM library WHERE Day='NULL1' ";
   $query_run=mysql_query($query_3);
      echo '<script>
window.location.assign("days-1.php");
 </script>

';
 }

else 
  { 
   $query_1="DELETE FROM tt WHERE Day='NULL1' ";
   $query_run=mysql_query($query_1);
   $query_2="DELETE FROM sjt WHERE Day='NULL1' ";
   $query_run=mysql_query($query_2);
   $query_3="DELETE FROM mb WHERE Day='NULL1' ";
   $query_run=mysql_query($query_3);
      echo '<script>
window.location.assign("days-1.php");
 </script>

';
  }

}

?>
