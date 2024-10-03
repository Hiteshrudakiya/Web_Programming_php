<?php  

$country = array('india' =>'delhi',
				'uk'=> 'london', 
				'america' => 'wasington', 
				'ukrain'=> 'kiev', 
				'italy'=>'rome');

print_r($country);
echo "<br>Array sorted by keys (countries) in ascending order:<br>";
ksort($country);
print_r($country);
echo "<br>";


echo "Array sorted by values (capitals) in descending order:\n";
arsort($country);
print_r($country);

?>
