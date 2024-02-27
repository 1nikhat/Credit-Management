<?php
$servername="localhost";
$username="root";
$password="";
$dbname="credit_management";
$con = mysqli_connect($servername, $username, $password, $dbname);
if($con)
{
    echo"";
}
 else {
     die("connection failed".  mysqli_connect_error());
}

?>