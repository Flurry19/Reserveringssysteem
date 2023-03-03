<?php
//session_start();


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css">
      <title>Reserveringen</title>
  </head>
  <header>
      <!-- Nav bar -->
      <?php include 'components/header.php' ?>
<!--      <img src="images/TimonandGeorge.JPG" class="img-fluid" alt="Responsive image">-->
  </header>
  <body>
    <div>
        <div class="p-5 text-center bg-image">
        <h1>Hondenschool Pijnacker</h1>
            <p class="bannertext">Start met de puppycursus en krijg les van gediplomeerde gedragstherapeuten!</p>
            <p class="bannertext">Liever 1 op 1 les? Dat kan ook! Ook bieden we gedragstherapie aan huis. </p>
        </div>

    <div/>
        <main>
            <div class="container opacitycontainer homecontext">
                <div class="row">
                    <div class="col-sm">
                        <h2>Groepslessen</h2>
                        <div class="homeimage">
                            <a href="groepslessen.php"><img src="images/Groepslessen.jpg" alt="Afbeelding-groepslessen"></a>
                        </div>
                        <p>Op onze hondenscholen begeleiden we u op een positieve manier in de belangrijkste fases van uw pup/hond. Wij geven les in kleine groepen van max 6-8 pups/honden o.l.v. gediplomeerde instructeurs en een gediplomeerde gedragstherapeut. Kijk bij module 1 voor de actuele startdata.</p>
                    </div>
                    <div class="col-sm">
                        <h2>1 op 1 les</h2>
                        <div class="homeimage">
                            <a href="privétraining.php"><img src="images/1op1.jpg" alt="Afbeelding-1op1les"></a>
                        </div>
                        <p>Bij onze 1 op 1 trainingen bepalen we samen wat het doel van de training is. De focus kan liggen op het aanleren van een oefening zoals het wandelen zonder trekken. Het uitgangspunt kan ook het aanpakken van ongewenst gedrag zijn. Je bepaalt zelf het aantal lessen dat je wilt volgen en wij begeleiden je naar een positief resultaat. We hebben extra uren vrijgemaakt voor 1 op 1 lessen, zodat je nog voor de zomervakantie terecht kunt. Kijk bij 1 op 1 training voor alle locaties en mogelijkheden.</p>
                    </div>
                    <div class="col-sm">
                        <h2>Gedragstherapie</h2>
                        <div class="homeimage">
                            <a href="gedragstherapie.php"><img src="images/img_0772-2e4c1ff7.jpeg" alt="Afbeelding-gedragstherapie"></a>
                        </div>
                        <p>De probleemvraag bepaalt of we je kunnen begeleiden op de hondenschool ofdat een huisbezoek nodig is. Op de hondenschool begeleiden we bij het gevolg van het gedrag en bij een huisbezoek werken we aan de oorzaak van het gedrag. Neem het voorbeeld dat een hond uitvalt naar een andere hond. Bij een huisbezoek test ik waar dit gedrag vandaan komt, wat de oorzaak is, waarom je hond dit is gaan doen. Stel dat de oorzaak ligt, dat de hond uitvalt om de eigenaar te beschermen, dan kan ik de hond nog zo vaak naar de hondenschool laten komen om op het uitvalgedrag te trainen. Maar als ik de relatie met de eigenaar niet thuis heb getest (dat kun je alleen thuis testen), dan zal ik dit gedrag nooit kunnen laten uitdoven door de hond naar de hondenschool te laten komen. Het probleem zit immers in de relatie met de eigenaar. Als we dit verbeteren, is ook het uitvalgedrag weg. </p>
                        </div>
                </div>
            </div>
        </main>
    <footer>
    <?php include 'components/footer.php' ?>
    </footer>
  </body>
</html>