<?php

$con=mysqli_connect('localhost','root','','database');

if($con->connect_error){

  die("Database error".$con.connect_errno."|".$con.connect_error);

}

?>