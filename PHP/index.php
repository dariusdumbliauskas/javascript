<?php 
//basic syntax
echo 'Hello world!';
?>

<?php
/*

variables

*/
$age = 25;
$personName = "Darius Dumbliauskas" . " Developer " . $age . " years old";
$a = "age";
//$$a variable inside variable
echo $personName . $$a;
?>

<?php
/*

arrays

*/
$array = array('name', 'email','address');
print_r($array);
echo $array[0];

//pushini i nauja array savo itemus
$array2[]="salad";
$array2[]="bowl";
echo $array2[1];



$array3 = array (
    //primena JS objektus
    'name' => 'darius',
    'age' => 25,
    'city' => 'kaunas',
);
//printini visi array arba butent ta savybe kurios reik
print_r($array3);
echo $array3['name'];
?>


<?php
//if else switch
$number = 2;
$number2 = 2;
$number3 = 3;
// if ($number=2) override kintamojo reiksme
// butinai reikia deti == kad lyginti 
// jeigu priesingai lygini tai ! ne pradzioj kaip JS o pabaigoje
// ($number!= $number2)
// galioja and or. && || 
// == === tikrina kaip JS data type
if ($number === $number2 && $number2 === $number3) {
    echo 'true';
} else {
    echo 'false';
}
// tas case tai tikrina kintamojo reiksme
// jei $number = 1 (case:1) tai bus "true"
// jei $number = 2 (case:2) tai bus "false"
// default: jei visos kitos salygos nera true tai defaultas tada pasileidzia
switch($number) {
    case 1: 
    echo 'true';
    break;

    case 2:
    echo 'false';
    break;

    default: 
    echo 'no idea';
}

?>