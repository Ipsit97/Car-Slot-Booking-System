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
<body background="background.jpeg" >
<div class="div1">
<div class="a">
<img id="img" src="b.jpg" >
<center>BOOKING SYSTEM</center>
</div>
<br>
<center><h2>Please Enter Your Feedback:</h2></center><br><br>
<form method="post" action="feedbacksubmit.php">
<center><input type="text" name="text1"></input><center>
<input type="submit" value="submit"></input>
</form> 

</body>
</html>
