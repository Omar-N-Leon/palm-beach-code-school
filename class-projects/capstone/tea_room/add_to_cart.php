<?php
include "db.php";

if ( array_key_exists ('quantity', $_REQUEST )) {
    $sku = $_REQUEST['sku'];
    $quantity = $_REQUEST['quantity'];
    $my_sql = "INSERT INTO `cart` (`sku`, `in_cart`) VALUES ('$sku', '$quantity') ON DUPLICATE KEY UPDATE `in_cart`=`in_cart` + $quantity";
    $db->query($my_sql);
}
$my_sql = "SELECT SUM(`in_cart`) FROM cart";
$result = $db->query( $my_sql );
$cart = $result->fetch( PDO::FETCH_NUM );
header("Content-type: application/json");
echo json_encode(['count'=>$cart]);
?>