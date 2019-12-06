<?php
$con=mysqli_connect("localhost","root","","VRS");
if (mysqli_connect())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT Password FROM ud;

if ($result=mysqli_query($con,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
    printf ($row);
    }
  mysqli_free_result($result);
}

mysqli_close($con);
?>