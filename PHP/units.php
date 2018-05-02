<?php
//number in pounds that we want to covert to kilograms
$pounds = 140;
//floating point value for the pound to kilogram conversion
$pounds_to_kg = 0.453592;
//use variables above to calcute pounds multiplied by the kilogram conversion
$kilograms = $pounds * $pounds_to_kg;
//display pounds to kilograms

echo "weight: " . $pounds . "lb = " . $kilograms . "kg";

//number in miles we want to convert to kilometres
$miles = 100;
//floating point value for the mile to km conversion
$miles_to_km = 1.609344;
//use the variables above to calculate miles multiplied by the kilometer conversion
$miles_total = $miles * $miles_to_km;
//display miles to kilometres
echo " there are " . $miles_total . " kilometres in " . $miles . " miles";
?>