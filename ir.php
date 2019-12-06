<?php
$server="localhost";
$user="root";
$pwd="";
$con=mysql_connect($server,$user,$pwd);
if(is_resource($con))
{
mysql_select_db("vrs");
$sql1="insert into ud values('xds','sas','sc',52,'ds','gh')";
mysql_query($sql1,$con);
echo "records inserted";
mysql_close($con);
}
else
{
echo "error".mysql_error();
}
?>