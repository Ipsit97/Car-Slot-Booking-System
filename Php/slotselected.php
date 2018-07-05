<?php

$conn_error="Could not connect";
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='PASSWORD';
$mysql_db='software_project';

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysql_select_db($mysql_db))
{
die('$conn_error');
}

if (isset($_POST['r1']))
{
$slot=$_POST['r1'];
if($slot=='1')
 {
   $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
   }
else if($slot=='2')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='3')
 {
 $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='4')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='5')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='6')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='7')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='8')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='9')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='10')
 {
 $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='11')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='12')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='13')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='14')
 {
 $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='15')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='16')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='17')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='18')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='19')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='20')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='21')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='22')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='23')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3); 
 }
else if($slot=='24')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='25')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='26')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='27')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='28')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='29')
 {
 $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='30')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='31')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='32')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='1')
 {
 $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='33')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='34')
 {
 $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='35')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='36')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='37')
 {
 $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='38')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='39')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='40')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='41')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='42')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='43')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='44')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='45')
 {
 $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='46')
 {
 $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='47')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='48')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='49')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='50')
 {
 $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='51')
 {
 $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
if($slot=='52')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='53')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='54')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='55')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='56')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='57')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='58')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else if($slot=='59')
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
else
 {
  $query="UPDATE tt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set Slot='$slot' WHERE Slot=100 ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set Slot='$slot' WHERE Slot=100";
   $query_run=mysql_query($query_3);
 }
}
echo 'Your Slot Booked Successfully';
?>