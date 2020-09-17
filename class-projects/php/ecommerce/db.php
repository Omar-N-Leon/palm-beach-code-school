<?php

if ( $_SERVER['HTTP_HOST'] == 'pbcs.us') {
    $dbname = 'oleon_ecommerce';
    $username = 'oleon_ecommerce';
    $password = 'Noel3535';
} else {
    $dbname = 'ecommerce';
    $username = 'root';
    $password = 'root';
}


$db = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password
);

?>