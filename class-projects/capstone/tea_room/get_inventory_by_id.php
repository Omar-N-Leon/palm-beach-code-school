<?php
include 'db.php';
if( mb_strlen($_GET['id']) > 0){
    $sku = $_GET['id'];

    $stmt = $db->prepare( ' SELECT * FROM inventory WHERE sku = ? ' );
    $stmt->execute( [$sku] );
    $results = $stmt->fetchAll();

echo json_encode($results[0]);
} else {
    echo json_encode( [ 'title' => 'Nothing found' ] );
}

?>