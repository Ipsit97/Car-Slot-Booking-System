<html>
<head>
<style>
body
{
margin:0;
background-image:url(p.jpg);
background-repeat:no-repeat;

}
div.div
{
width:100%;
height:15%;
background-color:#990033;
margin-top:-35px;
color:white;
}

div.mon
{
width:20%;
height:30%;
background-color:#212f3d;
float:left;
margin-left:70px;
border: 2px black solid;
border-radius:5px;
}

div.tue
{
width:20%;
height:30%;
background-color:orange;
float:left;
margin-left:200px;
border: 2px black solid;
border-radius:5px;
}

div.wed
{
width:20%;
height:30%;
background-color: #5f5c85 ;
float:left;
margin-left:200px;
border: 2px black solid;
border-radius:5px;
}

div.thu
{
width:20%;
height:30%;
background-color: #FF5733
;
float:left;
margin-left:70px;
margin-top:70px;
border: 2px black solid;
border-radius:5px;
}

div.fri
{
width:20%;
height:30%;
background-color:#DAF7A6;
float:left;
margin-left:200px;
margin-top:70px;
border: 2px black solid;
border-radius:5px;
}

div.sat
{
width:20%;
height:30%;
background-color:olive;
float:left;
margin-left:200px;
margin-top:70px;
border: 2px black solid;
border-radius:5px;
}

#day
{
padding-top:40px;
font-size:35;
text-align:center;

}

p.p
{
padding-top:20px;
font-size:35;
text-align:center;

}

div.mon:hover 
{
opacity:0.6;
color:red;
font-weight:bold;
}
div.tue:hover 
{
opacity:0.6;
color:red;
font-weight:bold;
}
div.wed:hover 
{
opacity:0.6;
color:red;
font-weight:bold;
}
div.thu:hover 
{
opacity:0.6;
color:red;
font-weight:bold;
}
div.fri:hover 
{
opacity:0.6;
color:red;
font-weight:bold;
}
div.sat:hover 
{
opacity:0.6;
color:red;
font-weight:bold;
}

a
{
text-decoration:none;
color:black;
}
#week
{
float:left;
height:100%;
}
</style>
<script>
function validate() {
if(document.form.r1[0].checked==false  && document.form.r1[1].checked==false && document.form.r1[2].checked==false && document.form.r1[3].checked==false  && document.form.r1[4].checked==false  && document.form.r1[5].checked==false  && document.form.r1[6].checked==false )
{alert("choose one");
return false;
}
return true;
}
</script>
</head>

<body>
<div class="div">
<img id="week" src="week.jpg">
<p class="p"><b>Please Select Your Parking Day</b></p>
</div>
<br><br><br>

<form  name="form" method="post" onsubmit="return validate()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div class="mon" >
<p id="day"><input type="radio" value="Monday" name="r1">Monday</input></p>
</div>

<div class="tue" >
<p id="day"><input type="radio" value="Tuesday" name="r1">Tuesday</input></p>
</div>

<div class="wed" >
<p id="day"><input type="radio" value="Wednesday" name="r1">Wednesday</input></p>
</div>

<div class="thu" >
<p id="day"><input type="radio" value="Thursday" name="r1">Thursday</input></p>
</div>

<div class="fri" >
<p id="day"><input type="radio" value="Friday" name="r1">Friday</input></p>
</div>

<div class="sat" >
<p id="day"><input type="radio" value="Saturday" name="r1">Saturday</input></p>
</div>

<center><input type="submit" value="Submit Day"></input></center>
</form>

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
$day=$_POST['r1'];
$_SESSION['day2']=$day;
if ($day=='Monday')
 {
   $query_4="SELECT Day FROM tt WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
       echo '<script>alert("There are no more slots left for this area on day")</script>';     
       $query_5="DELETE FROM tt WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
       echo '<script>
window.location.assign("bookings.php");
 </script>
';
     }  
   $query_4="SELECT Day FROM mb WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';     
       $query_5="DELETE FROM mb WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }     

   $query_4="SELECT Day FROM library WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';     
       $query_5="DELETE FROM library WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  

   $query_4="SELECT Day FROM sjt WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';     
       $query_5="DELETE FROM sjt WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  

    $query_4="SELECT Day FROM sjt WHERE Day='NULL1'";
    $query_5="SELECT Day FROM library WHERE Day='NULL1'";
    $query_6="SELECT Day FROM mb WHERE Day='NULL1'";
    $query_7="SELECT Day FROM tt WHERE Day='NULL1'";
    $query_run_1 = mysql_query($query_4);
    $query_run_2 = mysql_query($query_5);
    $query_run_3 = mysql_query($query_6);
    $query_run_4 = mysql_query($query_7);
    $count_rows_1=mysql_num_rows($query_run_1);
    $count_rows_2=mysql_num_rows($query_run_2);
    $count_rows_3=mysql_num_rows($query_run_3);
    $count_rows_4=mysql_num_rows($query_run_4);
    if($count_rows_1>=1 || $count_rows_2>=1 || $count_rows_3>=1  || $count_rows_4>=1)
  {
   $query="UPDATE tt set DAY='$day' WHERE Day='NULL1' ";
   $query_run=mysql_query($query);
   $query_1="UPDATE sjt set DAY='$day' WHERE Day='NULL1' ";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set DAY='$day' WHERE Day='NULL1' ";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_3);
    echo '<script>
alert("Your Booking Has been done successfully");
 </script>
';
echo '<script>
window.location.assign("final.php");
 </script>

';

  }
 }
else if ($day=='Tuesday')
 { 
    $query_4="SELECT Day FROM tt WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
       echo '<script>alert("There are no more slots left for this area on day")</script>';    
       $query_5="DELETE FROM tt WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  
   $query_4="SELECT Day FROM mb WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';    
       $query_5="DELETE FROM mb WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }     

   $query_4="SELECT Day FROM library WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';     
       $query_5="DELETE FROM library WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  

   $query_4="SELECT Day FROM sjt WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';     
       $query_5="DELETE FROM sjt WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  

   $query_4="SELECT Day FROM sjt WHERE Day='NULL1'";
    $query_5="SELECT Day FROM library WHERE Day='NULL1'";
    $query_6="SELECT Day FROM mb WHERE Day='NULL1'";
    $query_7="SELECT Day FROM tt WHERE Day='NULL1'";
    $query_run_1 = mysql_query($query_4);
    $query_run_2 = mysql_query($query_5);
    $query_run_3 = mysql_query($query_6);
    $query_run_4 = mysql_query($query_7);
    $count_rows_1=mysql_num_rows($query_run_1);
    $count_rows_2=mysql_num_rows($query_run_2);
    $count_rows_3=mysql_num_rows($query_run_3);
    $count_rows_4=mysql_num_rows($query_run_4);
    if($count_rows_1>=1 || $count_rows_2>=1 || $count_rows_3>=1  || $count_rows_4>=1)

   {

   $query="UPDATE sjt set DAY='$day' WHERE Day='NULL1' ";
   $query_run=mysql_query($query);
   $query_1="UPDATE tt set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE mb set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_3);
      echo '<script>
alert("Your Booking Has been done successfully");
 </script>';
echo '<script>
window.location.assign("final.php");
 </script>
';
  }
 }
else if ($day=='Wednesday')
 { 
    $query_4="SELECT Day FROM tt WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';    
       $query_5="DELETE FROM tt WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  
   $query_4="SELECT Day FROM mb WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';     
       $query_5="DELETE FROM mb WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }     

   $query_4="SELECT Day FROM library WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';    
       $query_5="DELETE FROM library WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  

   $query_4="SELECT Day FROM sjt WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';     
       $query_5="DELETE FROM sjt WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  
    
   $query_4="SELECT Day FROM sjt WHERE Day='NULL1'";
    $query_5="SELECT Day FROM library WHERE Day='NULL1'";
    $query_6="SELECT Day FROM mb WHERE Day='NULL1'";
    $query_7="SELECT Day FROM tt WHERE Day='NULL1'";
    $query_run_1 = mysql_query($query_4);
    $query_run_2 = mysql_query($query_5);
    $query_run_3 = mysql_query($query_6);
    $query_run_4 = mysql_query($query_7);
    $count_rows_1=mysql_num_rows($query_run_1);
    $count_rows_2=mysql_num_rows($query_run_2);
    $count_rows_3=mysql_num_rows($query_run_3);
    $count_rows_4=mysql_num_rows($query_run_4);
    if($count_rows_1>=1 || $count_rows_2>=1 || $count_rows_3>=1  || $count_rows_4>=1)
  {
   $query="UPDATE mb set DAY='$day' WHERE Day='NULL1' ";
   $query_run=mysql_query($query);
   $query_1="UPDATE tt set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE sjt set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_3);
      echo '<script>
alert("Your Booking Has been done successfully");
 </script>

';
echo '<script>
window.location.assign("final.php");
 </script>

';

 }
 }
else if ($day=='Thursday')
 { 
    $query_4="SELECT Day FROM tt WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';   
       $query_5="DELETE FROM tt WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  
   $query_4="SELECT Day FROM mb WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';   
       $query_5="DELETE FROM mb WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }     

   $query_4="SELECT Day FROM library WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';    
       $query_5="DELETE FROM library WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  

   $query_4="SELECT Day FROM sjt WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
       echo '<script>alert("There are no more slots left for this area on day")</script>';     
       $query_5="DELETE FROM sjt WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  

   $query_4="SELECT Day FROM sjt WHERE Day='NULL1'";
    $query_5="SELECT Day FROM library WHERE Day='NULL1'";
    $query_6="SELECT Day FROM mb WHERE Day='NULL1'";
    $query_7="SELECT Day FROM tt WHERE Day='NULL1'";
    $query_run_1 = mysql_query($query_4);
    $query_run_2 = mysql_query($query_5);
    $query_run_3 = mysql_query($query_6);
    $query_run_4 = mysql_query($query_7);
    $count_rows_1=mysql_num_rows($query_run_1);
    $count_rows_2=mysql_num_rows($query_run_2);
    $count_rows_3=mysql_num_rows($query_run_3);
    $count_rows_4=mysql_num_rows($query_run_4);
    if($count_rows_1>=1 || $count_rows_2>=1 || $count_rows_3>=1  || $count_rows_4>=1)
   {
   $query="UPDATE mb set DAY='$day' WHERE Day='NULL1' ";
   $query_run=mysql_query($query);
   $query_1="UPDATE tt set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE sjt set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_3);
      echo '<script>
alert("Your Booking Has been done successfully");
 </script>

';
echo '<script>
window.location.assign("bookings.php");
 </script>

';

 }
 }
else if ($day=='Friday')
 { 
    $query_4="SELECT Day FROM tt WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>'; 
       $query_5="DELETE FROM tt WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
     }  
   $query_4="SELECT Day FROM mb WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';    
       $query_5="DELETE FROM mb WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }     

   $query_4="SELECT Day FROM library WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';     
       $query_5="DELETE FROM library WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  

   $query_4="SELECT Day FROM sjt WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';    
       $query_5="DELETE FROM sjt WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  
   $query_4="SELECT Day FROM sjt WHERE Day='NULL1'";
    $query_5="SELECT Day FROM library WHERE Day='NULL1'";
    $query_6="SELECT Day FROM mb WHERE Day='NULL1'";
    $query_7="SELECT Day FROM tt WHERE Day='NULL1'";
    $query_run_1 = mysql_query($query_4);
    $query_run_2 = mysql_query($query_5);
    $query_run_3 = mysql_query($query_6);
    $query_run_4 = mysql_query($query_7);
    $count_rows_1=mysql_num_rows($query_run_1);
    $count_rows_2=mysql_num_rows($query_run_2);
    $count_rows_3=mysql_num_rows($query_run_3);
    $count_rows_4=mysql_num_rows($query_run_4);
    if($count_rows_1>=1 || $count_rows_2>=1 || $count_rows_3>=1  || $count_rows_4>=1)
{
   $query="UPDATE mb set DAY='$day' WHERE Day='NULL1' ";
   $query_run=mysql_query($query);
   $query_1="UPDATE tt set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE sjt set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_3);
      echo '<script>
alert("Your Booking Has been done successfully");
 </script>

';
echo '<script>
window.location.assign("bookings.php");
 </script>

';

  }
 }
else
 { 

    $query_4="SELECT Day FROM tt WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';     
       $query_5="DELETE FROM tt WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  
   $query_4="SELECT Day FROM mb WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';   
       $query_5="DELETE FROM mb WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }     

   $query_4="SELECT Day FROM library WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
       echo '<script>alert("There are no more slots left for this area on day")</script>';    
       $query_5="DELETE FROM library WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  

   $query_4="SELECT Day FROM sjt WHERE Day='$day'";
   $query_run=mysql_query($query_4);
   $count_rows=mysql_num_rows($query_run);
   if($count_rows==3)
     {
        echo '<script>alert("There are no more slots left for this area on day")</script>';     
       $query_5="DELETE FROM sjt WHERE Day='NULL1'";
       $query_run=mysql_query($query_5);
echo '<script>
window.location.assign("bookings.php");
 </script>

';
     }  

   $query_4="SELECT Day FROM sjt WHERE Day='NULL1'";
    $query_5="SELECT Day FROM library WHERE Day='NULL1'";
    $query_6="SELECT Day FROM mb WHERE Day='NULL1'";
    $query_7="SELECT Day FROM tt WHERE Day='NULL1'";
    $query_run_1 = mysql_query($query_4);
    $query_run_2 = mysql_query($query_5);
    $query_run_3 = mysql_query($query_6);
    $query_run_4 = mysql_query($query_7);
    $count_rows_1=mysql_num_rows($query_run_1);
    $count_rows_2=mysql_num_rows($query_run_2);
    $count_rows_3=mysql_num_rows($query_run_3);
    $count_rows_4=mysql_num_rows($query_run_4);
    if($count_rows_1>=1 || $count_rows_2>=1 || $count_rows_3>=1  || $count_rows_4>=1)
   {

   $query="UPDATE mb set DAY='$day' WHERE Day='NULL1' ";
   $query_run=mysql_query($query);
   $query_1="UPDATE tt set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_1);
   $query_2="UPDATE sjt set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_2);
   $query_3="UPDATE library set DAY='$day' WHERE Day='NULL1'";
   $query_run=mysql_query($query_3);
      echo '<script>
alert("Your Booking Has been done successfully");
 </script>

';
echo '<script>
window.location.assign("bookings.php");
 </script>

';

}
 }
}


?>

</body>

</html>
