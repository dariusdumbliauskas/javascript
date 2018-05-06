<?php

header("Content-Type: application/json; charset=UTF-8");
if ($_REQUEST['psw1']!= $_REQUEST['psw2']) {
    $response = [
        success => false,
        error => 'Passwords don\'t match!'
    ]; 
} else {
    $response = [
        success => true,
        token => 'Passwords matched!'
    ];
}

echo json_encode($response);

?>

