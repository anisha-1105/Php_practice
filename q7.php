<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST"> 
Name:<input type="text" name="name"><br>
Email:<input type="email" name="email" id=""><br>
Qualification:
<select name="qualification"id="">
<option name="qualification" value="Masters" id="">Masters</option>
<option name="qualification" value="PHD" id="">PHD</option>
<option name="qualification" value="Bacholer" id="">Bachlore</option> </select><br>
Gender:
<input type="radio" name="gender" value="male", id=""> male
<input type="radio" name="gender" value="female", id=""> female
<input type="radio" name="gender" value="ohter", id=""> other
<br>
Are You Skilled?
        <input type="checkbox" name="skilled" value="yes">
        <br>
Experience:
<select name="experience"id="">
<option name="experience" value="1 year" id="">1 year</option>
<option name="experience" value="2 year" id="">2 year</option>
<option name="experience" value="5 year" id="">5 year</option> </select><br>
<button input type="submit"> submit</button>   
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $qualification=$_POST["qualification"];
    $gender=$_POST["gender"];
     $skilled=isset($_POST["skilled"])?"skilled":"not skilled";
    $experience=$_POST["experience"];
    echo"my name is $name and my email is $email , my qualification is $qualification, and i am $gender and i am $skilled with experience of $experience";
}