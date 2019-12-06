<?php
$x=$_POST['uname'];
$server="localhost";
$user="root";
$pwd="";
$con=mysql_connect($server,$user,$pwd);
if(is_resource($con))
{
mysql_select_db("vrs");
$sql="select * from ud where Username=$x";
$res=mysql_query($sql,$con);
$row=mysql_fetch_array($res);
$a=$row['Password'];
echo $x;
echo $a;
}
else
{
echo "error";
}