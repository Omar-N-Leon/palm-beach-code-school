<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Store</title>
</head>
<body>
  <?php
      include 'db.php';
      include 'header.php';
      
      $my_sql = "SELECT * FROM inventory";
      if ( array_key_exists ('o', $_REQUEST )) {
        $order_by = $_REQUEST['o'];
          $my_sql .= " ORDER BY $order_by";
      }

      $result = $db->query( $my_sql );

  ?>
  <br>
  <div class="container-fluid text-center">
    <h1>Trascience & Tranquility's Online Store</h1>
  </div>
  <br>
  <div class="container-fluid store">
    <div class="row">
    <aside class="col-12 col-lg-2 text-center store-aside">
          <h3 class="my-5">Sort By</h3>
              <a href="store.php?o=title">
                  Name
              </a>
              <br>
              <a href="store.php?o=price">
                  Price
              </a> 
      </aside>
      <section class="col-12 col-lg-10 p-3">
          <div class="row">
              <?php
                  while ( $row = $result->fetch( PDO::FETCH_ASSOC )){
              ?>
                  <div class="col-sm-6 col-md-4 col-lg-3">
                      <img class="img-fluid" src="images/teas/<?=$row["img"]?>" alt=""/>
                      <h4>
                      <button type="button"  onclick="my_fx_to_get_inventory('<?= $row['sku']; ?>')" class="btn btn-link" data-toggle="modal" data-target="#item_modal">
                          <?=$row["title"]?>
                      </button>    
                      
                      
                      <a href="details.php?sku=<?=$row["sku"]?>">
                              
                          </a>
                      </h4>
                      <p>$<?=$row["unit_price"]?></p>
                  </div>
              <?php
                  }
              ?>
          </div>
      </section>
    </div>
    <!-- Item Modal -->
    <form id="cart_form" action="add_to_cart.php">
    <div class="modal fade" id="item_modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="inventoryTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <p id="description"></p>
            <br>
            <p id="unit_price"></p>
          </div>
          <div class="modal-footer">
            <input id="quantity" type="text" name="quantity">
            <input type="hidden" name="sku" id="sku" value="">
            <button type="submit" class="btn btn-primary">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
    </form>
    <!-- Success Modal -->
    <div class="modal fade" id="success_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Item added to cart!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-footer">
            <a href="cart.php">Go to Cart</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
    <?php
        include 'footer.php';
    ?>
    <script
      src="https://code.jquery.com/jquery-3.5.1.min.js"
      integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="javascript/modal.js"></script>
    <script src="javascript/add_to_cart.js"></script>
</body>
</html>