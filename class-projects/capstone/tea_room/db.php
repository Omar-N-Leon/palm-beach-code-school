<?php

if ( $_SERVER['HTTP_HOST'] == 'pbcs.us') {
    $dbname = 'oleon_teahouse';
    $username = 'oleon_teahouse';
    $password = 'codeschool1';
} else {
    $dbname = 'teahouse';
    $username = 'root';
    $password = 'root';
}


$db = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password
);

?>