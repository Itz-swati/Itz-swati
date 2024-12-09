<?php
$username="localhost"
$username="root";
$password= "";
$dbname="swathi";
$conn=mysqli_connection($servername,$username,$password,$dbname);
if(!$conn)
{
  die("connection failed:".mysqli_connect_error());
}
else
 {
  echo "connected Successfully";
  }
?>