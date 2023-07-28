<?php
$a=$_POST["n"];
$b=$_POST["e"];
$c=$_POST["p"];
$d=$_POST["in"];
$e=$_POST["out"];
$f=$_POST["rt"];
$g=$_POST["ng"];
$h=$_POST["na"];
$i=$_POST["nc"];
$j=$_POST["sr"];
$con=mysql_connect("localhost","root","");
mysql_select_db("web");
mysql_query("insert into class(n,e,p,in,out,rt,ng,na,nc,sr)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')");
echo("register done & thanks coming welcome again");
include("booking.php");
mysql_close($con);
?>