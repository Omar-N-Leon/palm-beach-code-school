<?php
    include 'db.php';
    $order_by = $_REQUEST['o'];
    $my_sql = "SELECT * FROM inventory";
    if ( array_key_exists ('o', $_REQUEST )) {
        $my_sql .= " ORDER BY $order_by";
    }

    $result = $db->query( $my_sql );
?>

<table border="1">
    <tr>
        <th>
            <a href="index.php?o=title">
                Item
            </a> 
        </th>
        <th>
            <a href="index.php?o=price">
                Price
            </a>
        </th>
        <th>
            <a href="index.php?o=in_stock">
                In Stock
            </a>
        </th>
    </tr>
    <?php
        while ( $row = $result->fetch( PDO::FETCH_ASSOC )){
    ?>
        <tr>
            <td>
                <a href="details.php?sku=<?=$row["sku"]?>">
                    <?=$row["title"]?>
                </a>
            </td>
            <td>$<?=$row["unit_price"]?></td>
            <td align="right"><?=$row["in_stock"]?></td>
        </tr>
    <?php
        }
    ?>
</table>

