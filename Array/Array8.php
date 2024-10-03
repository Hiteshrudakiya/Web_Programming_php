<?php  

$county = array('india' =>'delhi','uk'=> 'london', 'america' => 'wasington', 'ukrain'=> 'kiev', 'italy'=>'rome');

print_r($county);

$cap=$county['uk'];

echo '<br>country capital is '.$cap;
?>