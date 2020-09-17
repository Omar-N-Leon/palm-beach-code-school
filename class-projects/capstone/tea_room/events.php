<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T&T Events</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/jquery.e-calendar.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="events">
    <header>
        <?php
        include 'db.php';
        include 'header.php';
        ?>
    </header>
    <section class="events-head">
        <p>We hope that you may enjoy the events we host here and become part of our great community and family. We encourage any local artists to contact us to find out more on how to be scheduled in on the calendar! </p>

    </section>
    <section>
        <div class="container">
            <div class="row py-2">
                <article class="col-12 col-lg-6 order-lg-first">
                    <h2>Tea Ceremonies</h2>
                    <p>Every two weeks we host an authentic Buddhist Tea Ceremony, tickets may be bought at the store.</p>
                    <article class="events-article">
                        <h4>TEA CEREMONY 7/16</h4>
                        <p>Reserve tickets now! Our choices of food are: [fooditem], [fooditem], [fooditem], [fooditem], [fooditem]. You'll be served by [server]. We hope to see you soon!</p>
                    </article>
                    <article class="events-article">
                        <h4>TEA CEREMONY 7/23</h4>
                        <p>Reserve tickets now! Our choices of food are: [fooditem], [fooditem], [fooditem], [fooditem], [fooditem]. You'll be served by [server]. We hope to see you soon!</p>
                    </article>
                </article>
                <aside class="col-12 col-lg-6 order-first my-auto">
                    <img class="img img-fluid" src="images/tea_row.jpg" alt="">
                </aside>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row py-2">
                <article class="col-12 col-lg-6 order-lg-first">
                    <h2>Music</h2>
                    <p>Enjoy live music on the weekends from local artists.</p>
                    <div>
                        <article class="events-article">
                            <h4>LED ZEPPELIN</h4>
                            <p>We are happy to host Led Zeppelins final reunion show for free!  </p>
                        </article>
                        <article class="events-article">
                            <h4>GORILLAZ</h4>
                            <p>Watch as the animated characters come to life to play some jams.</p>
                        </article>
                    </div>
                </article>
                <aside class="col-12 col-lg-6  my-auto">
                    <img class="img img-fluid" src="images/guitar.jpg" alt="">
                </aside>
            </div>
        </div>
        <br>
        <div id="calendar"></div>
        <br>
    </section>
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="javascript/jquery.e-calendar.js"></script>
<script src="javascript/events.js"></script>
</html>