<?php   

$fruits=array('apple','mango','banana','orange','strawberry');

echo "after add fruits";
$fruits[5]='apple';

$fruits[6]='berry';

print_r($fruits);
echo "<br> after remove fruits";


array_splice($fruits, 3,1);
print_r($fruits);


?>