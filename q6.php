<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        Email:
        <input type="email" name="email" id="">
        <br>
        Passowrd:
        <input type="password" name="password" id="">
        <br>
        Are You Subscribed?
        <input type="checkbox" name="subscribe" value="yes">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]==="GET") {
        $email=$_GET["email"];
        $subscribe=isset($_GET["subscribe"])?"subscribed":"not subscribed";
        echo "Thank you for signing up, $email .You have $subscribe to the newsletter";
}
?>