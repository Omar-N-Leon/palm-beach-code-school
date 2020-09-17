<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart</title>
    </head>
    <body>
        <?php
            include 'db.php';
            
            if (array_key_exists ('delete', $_REQUEST )) {
                $delete = $_REQUEST['delete'];
                $my_sql = "DELETE FROM `cart` WHERE `cart`.`sku` = '$delete'";
                $db->query($my_sql);
            }
            include 'header.php';
            $my_sql = "SELECT
            inventory.img, inventory.sku, inventory.title, inventory.unit_price, cart.in_cart
            FROM
            cart
            LEFT JOIN inventory ON (
            cart.sku = inventory.sku
            )";
            $result = $db->query( $my_sql );

        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <?php
                        $total=0;
                        while ( $row = $result->fetch( PDO::FETCH_ASSOC )){
                            $total += ($row["unit_price"]*$row["in_cart"]);
                    ?>
                        <div class="card w-100 flex-row flex-wrap">
                            <div class="card-header border-0">
                                <img class="img-thumbnail" src="images/teas/<?=$row["img"]?>" alt="Card image cap">
                            </div>
                            <div class="card-block px-2">
                                <h5 class="card-title"><?=$row["title"]?></h5>
                                <p class="card-text">Quantity: <?=number_format($row["in_cart"])?></p>
                                <p class="card-text">Price: $<?=number_format(($row["unit_price"]*$row["in_cart"]), 2)?></p>
                                <form action="">
                                    <button class="btn btn-secondary" name="delete" value="<?=$row['sku']?>" type="submit">
                                        Remove Item
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Subtotal</h5>
                            <p class="card-text">$<?= number_format($total, 2)?></p>
                            <a href="" class="btn btn-primary">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


