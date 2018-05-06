<?php

header("Content-Type: application/json; charset=UTF-8");
if ($_REQUEST['psw1'] == $_REQUEST['psw2']) {
    if (strlen($_REQUEST['psw1']) <= 8) {
        $response = [
            success => true,
            token => 'Minimum length of password is 8 characters!'
        ]; 
    }
        else {
    $response = [
        success => true,
        token => 'Passwords matched and changed!'
    ];
    } 
} else {
    $response = [
        success => false,
        error => 'Passwords don\'t match!'
    ]; 
}

echo json_encode($response);

?>

