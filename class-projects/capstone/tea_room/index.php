<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T&T Tea Room</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    include 'db.php';
    include 'header.php';
    ?>

        <section class="row">
            <aside class="card col-12 col-lg-4">
                <button onclick="menu.php "type="button" id= "cup1" class="btn btn-outline-light cups"><img src="images/cup1.png" class= "img-fluid" alt=""></button>

            </aside>
            <aside class="card col-12 col-lg-4">
                <button onclick="store.php" type="button" id= "cup2" class="btn btn-outline-light cups"><img src="images/cup2.png" class= "img-fluid" alt=""></button>

            </aside>
            <aside class="card col-12 col-lg-4">
                <button onclick="events.php" type="button" id= "cup3" class="btn btn-outline-light cups"><img src="images/cup3.png" class= "img-fluid" alt=""></button>
            </aside>
        </section>
        <br>
        <article>
            <h1 class="text-center my-5">We welcome you to Transience & Tranquility</h1>
            <p class="px-3">We strive to make the most perfect teas for your mental and physical health. Teas have been historically important throughout our history and the joys that it gives us will help us throughout our lives. Many cultures use tea as a spiritual ritual or even just a morning ritual to start your wonderful days. We hope here at Transcience and Tranquility that our teas will help elevate your lives to that point. </p>
        </article>
        <br>
        <div class="container-fluid">
            <section class="row p-5">
                <aside class="col-12 col-lg-8 text-center my-5">
                    <img class="img-fluid ceremony_pink" src="images/tea_ceremony_pink.jpg" alt="">
                </aside>
                <br>
                <article class="col-12 col-lg-4">
                    <h3>Our Tea Ceremonies</h3>
                    <p>We hold events twice a month to teach those of the historical and spiritual ritual of drinking matcha. Engage with like minded souls who seek to try the experience whilst learning from our best tea ceremony masters the guided meditations.</p>
                    <p>Japanese Tea Ceremony represents harmony, respect, purity and tranquillity which we must embrace in order to achieve the main purpose of the tea ceremony. This event is unique as every process from the tea equipment preparation until the tea is drunk has a distinctive technique.</p>
                    <p>One of the most important ideas behind the Japanese tea ceremony is the concept of “Wabi” and “Sabi”. “Wabi” represents the spiritual experiences of human lives and it symbolises quiet and sober refinement. “Sabi” represents the material side of life and it means weathered or decayed. Understanding this emptiness and imperfection is considered an important part of spiritual awakening. Experiencing a tea ceremony gives you a glimpse into a fascinating part of Japanese culture that has a lot of history and cultural significance.</p>
                    <p>The tradition of the Japanese tea ceremony is linked to Buddhism and it dates back to the 9th century when it was taken by the Buddhist monk on his return from China. The entry in the Nihon Koki states that the Buddhist monk Eichu personally prepared and served sencha to the Emperor Saga who was on an excursion in Karasaki in the year 815.</p>
                    <p>Tea had been known in China for over a thousand years by the time it became popular in Japan. Tea was drank mostly for medicinal reasons throughout China and green tea was used in religious rituals at Buddhist monasteries. In Japan it became a status symbol among the warrior class and it started to evolve its own aesthetic.</p>
                    <p>Zen is difficult to define but it refers to mindfulness and the idea that simple actions may lead to the awakening of our spirits. There are a lot of similarities between the main principles of tea ceremony (harmony, respect, tranquility)  and the philosophy of zen (mindfulness, nothingness, transience).Tea ceremony involves following dozens of prescribed steps so that one does not have to think about the next step and gain inner peace while performing this ritualistic activity. That is why tea ceremony cannot be considered separately from the zen. Tea ceremony also has the values of vabi sabi (natural, simple and minimalistic things are better) which are deeply embedded in Zen Buddhism.</p>
                </article>
            </section>
        </div>

        <br>
        <?php
        include 'footer.php';
        ?>


</body>
</html>