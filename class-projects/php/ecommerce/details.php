<?php
include 'db.php';
$sku = $_REQUEST['sku'];

$my_sql = "SELECT * FROM inventory WHERE sku = '$sku'";
$result = $db->query($my_sql);
$row = $result->fetch (PDO::FETCH_ASSOC);

if ( array_key_exists ('quantity', $_REQUEST )) {
    $quantity = $_REQUEST['quantity'];
$my_sql = "INSERT INTO `cart` (`sku`, `in_cart`) VALUES ('$sku', '$quantity')";
$db->query($my_sql);
}



if ($row == true) {
?>

    <div style="float: left; width: 50%">
        <h1><?= $row['title'] ?></h1>
        <p><?= $row['description'] ?></p>
    </div>
    <div style="float: left; margin-top: 30px">
        <form action="">
            <table>
                <tr>
                    <td>
                        Price: 
                    </td>
                    <td>
                        $<?= $row['unit_price'] ?> each
                    </td>
                </tr>
                <tr>
                    <td>
                        How many?
                    </td>
                    <td>
                        <input type="text" name="quantity">
                        <input type="hidden" name="sku" value="<?=$_REQUEST['sku']?>">
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Add to Cart"></td>
                </tr>
            </table>
        </form>
    </div>

<?php
} else {
?>

    <h1>Product Not Found</h1>

<?php
};
?>