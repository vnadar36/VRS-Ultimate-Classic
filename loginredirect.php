<?php
$server="localhost";
$user="root";
$pwd="";
$x= $_GET['uname'];
$y= $_GET['pass'];
echo "$x";
echo "$y";
if($x=="")
{
header("location:login1.html");
}
else if($y=="")
{
header("location:login1.html");
}
else
{
$con=mysql_connect($server,$user,$pwd);
if(is_resource($con))
{
mysql_select_db("vrs");
$sql="select Password from ud where Username='$x'";
$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$a=$row['Password'];
if($a==$y)
{
header("location:list.html");
}
else if($a!=$y)
{
header("location:login1.html");
}
}
}
?>