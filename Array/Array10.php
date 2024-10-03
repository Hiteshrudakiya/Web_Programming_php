<?php
// Multidimensional associative array with city information
$cities = [
    "Ahemdabad" => [
        "population" => 50000000,
        "area" => 468.9, // in square miles
        "country" => "India"
    ],
    "Rajkot" => [
        "population" => 1929000,
        "area" => 845.0, 
        "country" => "India"
    ],
    "Mumbai" => [
        "population" => 10082000,
        "area" => 607.0, 
        "country" => "India"
    ],
    "Delhi" => [
        "population" => 2148000,
        "area" => 940.7, 
        "country" => "India"
    ],
];


foreach ($cities as $city => $info) {
    echo "City: $city<br>";
    echo "Population: " . $info['population'] . "<br>";
    echo "Area: " . $info['area'] . " square miles<br>";
    echo "Country: " . $info['country'] . "<br>";
  
}
?>
 