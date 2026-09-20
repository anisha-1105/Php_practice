<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="php_database";
$conn=new mysqli($servername,$username,$pass,$dbname);
if(!$conn){
    echo "Not Connected";
}
else{
    echo"connected";
}
?>