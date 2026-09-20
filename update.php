
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
        salary:
        <input type="iny" name="salary" id="">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $e_name=$_POST["e_name"];
    $salary=$_POST["salary"];
    $sql=$conn->prepare("update emp set salary=? where e_name=?");
    $sql->bind_param('is',$salary,$e_name);
    if ($sql->execute()) {
        echo "Data updated";
    }
}
?>