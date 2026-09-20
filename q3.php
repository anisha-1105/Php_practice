<?php
$fruits = ["Apple", "Mango", "Banana"];
echo " for loop";
for($i = 0; $i < count($fruits); $i++)
{
    echo $fruits[$i] . "<br>";
}
$colors = [
    "Apple" => "Red",
    "Mango" => "Yellow",
    "Banana" => "Yellow"
];

echo "foreach loop";
foreach($colors as $fruit => $color)
{
    echo $fruit ." : " . $color."<br>";
}


echo "array_push()";
$fruits = ["Apple", "Mango"];
array_push($fruits, "pear", "Orange");
echo($fruits);
echo "<br>";


echo "array_pop()";
array_pop($fruits);
echo($fruits);
echo "<br>";
?>



