<?php

$fruits=array('apple','mango','banana','orange','strawberry');

echo "ascending order<br>";

sort($fruits);
print_r($fruits);

echo "<br>descending order<br>";
rsort($fruits);
print_r($fruits);
?>