<html>
<head>
<title>
Welcome to Vit
</title>
<style>
div.div1
{
background-color:navy;
width:100%;
margin:0;
padding:0;
position:absolute;
left:0%;
top:0%;

font-size:85px;
text-shadow:15px 15px 15px black,
                       20px 20px 20px black;
color:white;
height:100px;
border:2px solid black;
}

div.div1:hover
{
background-color:navy;
opacity:1;
}

div.div2
{
margin-top:96px;
float:left;
margin-left:-6px;
border:2px solid black;

width:49.5%;}

.div3
{
float:right;

width:49.5%;
margin-top:96px;
border:2px solid black;
margin-right:-6px;
}

img
{
height:300px;
width:100%;
margin:0px;
padding:0px;

}
#img1
{
height:290px;
}
img:hover, :hover
{
opacity:0.8;
border-color:orange;
}

.div4
{
width:50.2%;
margin-left:-6px;
float:left;
border:2px solid black;
}
.div5
{
float:right;
width:49.5%;
border:5px black solid;
margin-right:-6px;
}


</style>

<script>
function validate() {
if(document.form.r2[0].checked==false  && document.form.r2[1].checked==false && document.form.r2[2].checked==false && document.form.r2[3].checked==false)
{alert("choose one");
return false;
}
return true;
}
</script>
</head>

<body>

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
user_add($name);
function user_add($name)
{
$query="INSERT INTO sjt values('$name','SJT','NULL1')";
@$query_run=mysql_query($query);

$query_1="INSERT INTO tt values('$name','Technology Tower','NULL1')";
@$query_run2=mysql_query($query_1);


$query_2="INSERT INTO library values('$name','Central Library','NULL1')";
@$query_run3=mysql_query($query_2);

$query_3="INSERT INTO MB values('$name','Main Building','NULL1')";
@$query_run4=mysql_query($query_3);
}
?>
<div class="div1" id="demo">
<center>
<i>
<b>Please Select Your <q>AREA</q></b>
</i>
</center>
</div>
<form name="form" action="area1.php" method="post" onsubmit="return validate()">
<div class="div2" >

<input type="radio" name="r2" value="tt">Technology Tower</input>
<img  src="silver.jpg" />
</div> 


<div class="div3">

<input type="radio" name="r2" value="sjt">Silver Jubliee Tower</input>
<img  src="gold.jpe" />
</div> 

<div class="div4">


<input type="radio" name="r2" value="mb">Main Building</input>
<img src="platinum.jpg" />
</div> 


<div class="div5">

<input type="radio" name="r2" value="lib">Central Library</input>
<img id="img1" src="nickel.jpeg" />
</div> 

<input type="submit" value="Submit Area"></input>
</form>

</body>
</html>




