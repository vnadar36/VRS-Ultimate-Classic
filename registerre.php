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
$cpass=$_POST['cpass'];
if($fn=="")
{
header("location:registration1.html");
}
else if($un=="")
{
header("location:registration1.html");
}
else if($dob=="")
{
header("location:registration1.html");
}
else if($em=="")
{
header("location:registration1.html");
}
else if($pass=="")
{
header("location:registration1.html");
}
else if($cpass=="")
{
header("location:registration1.html");
}
else if($pass!=$cpass)
{
header("location:registration1.html");
}
else
{
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
}
?>