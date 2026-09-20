<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST">
name:<input type="text" name="name"><br>
age:<input type="number" name="age"><br>
gender:
<select name="gender"id="">
<option name="gender" value="male" id="">male</option>
<option name="gender" value="female" id="">female</option>
<option name="gender" value="other" id="">other</option> </select><br>
<button input type="submit"> submit</button>
</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];

echo "Helllo, $name. You are $age years old and identify as $gender";
}   
?>