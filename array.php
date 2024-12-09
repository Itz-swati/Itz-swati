<html>
<body>
<?php
// Sort flowers in ascending order
$flowers = array("Rose", "Lotus", "Dahlia");
sort($flowers);
$length = count($flowers);
echo "<br><b>Sort flowers in ascending order (sort()):</b><br>";
for($x = 0; $x < $length; $x++) {
    echo "<br>" . $flowers[$x] . "<br>";
}

// Sort flowers in descending order
$flowers = array("sunflower", "Rose", "Dahlia");
rsort($flowers);
$length = count($flowers);
echo "<br><b>Sort flowers in descending order (rsort()):</b><br>";
for($x = 0; $x < $length; $x++) {
    echo "<br>" . $flowers[$x] . "<br>";
}

// Sorting associative array by value in ascending order
$flower = array("one" => "sunflower", "two" => "Rose", "three" => "Dahlia");
asort($flower); // Sorting associative array by value in ascending order
echo "<br><b>Associative array sorted by value in ascending order (asort()):</b><br>";
foreach($flower as $value) {
    echo $value . "<br>";
}

// Sorting associative array by value in descending order
arsort($flower); // Sorting associative array by value in descending order
echo "<br><b>Associative array sorted by value in descending order (arsort()):</b><br>";
foreach($flower as $value) {
    echo $value . "<br>";
}

// Sorting associative array by key in ascending order
ksort($flower); // Sorting associative array by key in ascending order
echo "<br><b>Associative array sorted by key in ascending order (ksort()):</b><br>";
foreach($flower as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

// Sorting associative array by key in descending order
krsort($flower); // Sorting associative array by key in descending order
echo "<br><b>Associative array sorted by key in descending order (krsort()):</b><br>";
foreach($flower as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>
</body>
</html>
