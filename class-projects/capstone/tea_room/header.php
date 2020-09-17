<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include "db.php";
$my_sql = "SELECT SUM(`in_cart`) FROM cart";
$result = $db->query( $my_sql );
$cart = $result->fetch( PDO::FETCH_NUM );
print_r($cart)
?>
<div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="index.php">Home</a>
                        <a class="nav-item nav-link" href="menu.php">Menu</a>
                        <a class="nav-item nav-link" href="store.php">Store</a>
                        <!-- <a class="navbar-brand" href="#">T & T</a> -->
                        <a class="nav-item nav-link" href="events.php">Events</a>
                        <a class="nav-item nav-link" href="about.php">About</a>
                        <a class="nav-item nav-link" href="cart.php">Cart (<span id="cart"><?=$cart[0]?></span>)</a>
                    </div>
                </div>
            </nav>
            <div class="image-logo-container">
                <img src="images/tea_plantation2.jpg" alt="Responsive image" class="image-fluid image-fluid-header">
                <img src="images/logo.png" alt="" class="logo">
            </div>

            
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  



            

        </header>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>    
    
    
    
    
