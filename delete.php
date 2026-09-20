<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        e_name:
        <input type="text" name="e_name" id="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
include "db.php";
$e_name=$_POST["e_name"];
$sql=$conn->prepare("delete from emp where e_name=?");
$sql->bind_param('s',$e_name);
if ($sql->execute()) {
    echo "Data Deleted";
}
?>