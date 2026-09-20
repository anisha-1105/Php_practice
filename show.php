<?php
include "db.php";
$result=$conn->query("select * from emp");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <table cellpadding="20" border=1>
        <tr>
            <td>E_name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Department</td>
            <td>Salary</td>
        </tr>
        <?php while ($row=$result->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $row["e_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td><?php echo $row["department"] ?></td>
            <td><?php echo $row["salary"] ?></td>
          </tr>  
        <?php } ?>
    </table>
</body>
</html>