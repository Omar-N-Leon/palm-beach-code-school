<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About T&T</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="about">
  <header>
    <?php
    include 'db.php';
    include 'header.php';
    ?>
  </header>
    <div data-interval="5000" id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner mx-auto">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/bohemian_tea.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/plantation_tea.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/zen-buddhist-tea-ceremony.jpg" alt="Third slide">
            </div>
        </div>
    <section class="container-fluid mt-5 w-75 px-3">
        <h1>About Our Store</h1>
        <div class="row">
            <p class="col-lg-4 px-1">The store opened in 2011 with the help of our friends. We met the buddhist at the temple of [templename] who gave us our inspiration and teachings to properly carry out our dreams of opening a japanese style tea house. My wife and I traveled to Japan where we attended a handful of Buddhist Tea Ceremonies, and felt the amazing power of that ritual for weeks. We decided to learn how to do it properly to share our experiences here in the US. With the help of our friends at the [templename] we were able to provide the ceremonies.</p>
            <p class="col-lg-4 px-1">We started out serving tea and pastries for the first few years until we met our fabulous chef [chefname]. Hailing from Japan, he's given our restaurant the needed authentic japanese food to provide us a reason to serve dinner. We were happy to gain new customers to be a part of our family, and share these new traditions with them.</p>
            <p class="col-lg-4 px-1">Two years ago we expanded our restaurant to include events and a shop. We've expanded so much thanks to you all, that now we can also ship and provide our specialized teas to everyone all around the country. We found enough space to include an area for musicians to provide their art to our restaurant, which we love here at Transcience & Tranquility for there is nothing greater than tea and food except for local music! We hope that you come check us out if you haven't before and come meet Bob, our local talkative patreon.</p>
        </div>
    </section>
    <br>
    <section class="container-fluid mt5 w-75">
        <h1>Meet our Staff!</h1>
        <div class="card-deck">
            <div class="card">
              <img src="images/japan-fukui-chef-happy.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img src="images/1385fa8f-ef5b-491f-bffe-4cf3d5e4c825.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="card">
              <img src="images/hard-work.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
    </section>
    </div>
    <br>
    <footer>
      <?php
      include 'footer.php';
      ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>