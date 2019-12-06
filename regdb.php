<?php
$server="localhost";
$user="root";
$pwd="";
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$un=$_POST['uname'];
$dob=$_POST['dob'];
$em=$_POST['email'];
$pass=$_POST['pass'];
$con=mysql_connect($server,$user,$pwd);
if(is_resource($con))
{
mysql_select_db("vrs");
$sql="insert into ud values('$fn','$ln','$un','$dob','$em','$pass')";
mysql_query($sql,$con);
mysql_close($con);
header("location:list.html");
}
else
{
echo "error";
}
?>