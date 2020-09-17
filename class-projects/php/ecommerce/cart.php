<head>
    <style>
        td:nth-last-child(-n+3), th:last-of-type {
            text-align: right;
        }
    </style>
</head>

<?php
    include 'db.php';

    $my_sql = "SELECT
    inventory.sku, inventory.title, inventory.unit_price, cart.in_cart
    FROM
    cart
    LEFT JOIN inventory ON (
    cart.sku = inventory.sku
    )";
    $result = $db->query( $my_sql );
?>

<table border="1">
    <tr>
        <th>
            Item
        </th>
        <th>
            Unit Price
        </th>
        <th>
            In Cart
        </th>
        <th>
            Subtotal
        </th>
    </tr>
    <?php
        $total=0;
        while ( $row = $result->fetch( PDO::FETCH_ASSOC )){
            $total += ($row["unit_price"]*$row["in_cart"]);
    ?>
        <tr>
            <td>
                <a href="details.php?sku=<?=$row["sku"]?>">
                    <?=$row["title"]?>
                </a>
            </td>
            <td>$<?=$row["unit_price"]?></td>
            <td><?=number_format($row["in_cart"])?></td>
            <td>$<?=number_format(($row["unit_price"]*$row["in_cart"]), 2)?></td>
        </tr>
    <?php
        }
    ?>
    <tr>
        <th>Total</th>
        <th> </th>
        <th> </th>
        <th>$<?= number_format($total, 2)?></th>
    </tr>
</table>