<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="emp_db";
$conn=new mysqli($servername,$username,$pass,$dbname);
if(!$conn){
    echo "Not Connected";
}

?>