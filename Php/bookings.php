<html>
<head>
<title>Welcome User</title>
<style>
#img
{
float:left;
width:50px;
height:50px;
margin-top:6px;
margin-left:5px;
}
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


div.b
{
height:40px;
width:170px;
color:white;
font-size:23px;
margin-top:20px;
text-align:center;
text-align-vertical:center;
background-color:rgb(98,123,128);
margin-bottom:30px;
padding-top:10px;
}
a
{
text-decoration:none;
}
div.b:hover
{
border:black solid 2px;
color:black;
background-color:white;
font-weight:bold;
}

p.p
{
text-align:center;
font-size:25px;
font-weight:bold;
color:rgb(67,160,148);
}

div.hr{
margin-top:-10px;
width:100%;
height:20px;
background-color:black;
margin-bottom:-2px;

}

</style>
<script>
</script>
</head>
<body background="background.jpeg" >


<div class="div1">
<div class="a">
<img id="img" src="b.jpg" >
<center>BOOKING SYSTEM</center>
</div>

<p class="p"> <i>Welcome <?php session_start(); echo $_SESSION["signname"]; ?></i></p>

<center>
<a href="softwareplaces-1.php"><div class="b">
<center>New Booking</center>
</div></a>
</center>

<center>
<a href="viewbook.php"><div class="b">
<center>View Booking</center>
</div></a>
</center>

<center>
<a href="details.php"><div class="b">
<center>My details</center>
</div></a>
</center>

<center>
<a href="feedback.php"><div class="b">
<center>FeedBack</center>
</div></a>
</center>

<center>
<a href="cancelbook.php"><div class="b">
<center>Cancel Booking</center>
</div></a>
</center>

<center>
<a href="ma.html"><div class="b">
<center>Log Out</center>
</div></a>
</center>
<div class="hr">
</div>

</div>
</body>
</html>