<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css">
    <title>Homepagina</title>
</head>
<body>
<header>
    <!-- Nav bar -->
    <?php include 'components/header.php' ?>
    <h1>Groepslessen</h1>
</header>

<div class="container opacitycontainer">
    <p>Op onze hondenscholen begeleiden we u op een positieve manier in de belangrijkste fases van uw pup/hond. Wij geven les in kleine groepen van max 6-8 pups/honden o.l.v. gediplomeerde instructeurs en een gediplomeerde gedragstherapeut. We hebben vier hondenscholen in Nootdorp, Ypenburg, Den Haag en Zoetermeer. Kijk bij module 1 voor de actuele startdata van jouw locatie.</p>
    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="images/IMG-20210112-WA0008.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Puppycursus - Module 1</h5>
                <p class="card-text">Het doel is om de puppy de basisoefeneningen aan te leren en de hond gedeeltelijk te socialiseren.</p>
                <a href="puppycursus.php" class="btn btn-primary informationbutton">Meer informatie</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/DSC_0634.JPG" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Vervolgcursus - Module 2</h5>
                <p class="card-text">Deze module is voor de pups die net module 1 hebben doorlopen, er wordt namelijk verdergegaan op module 1.</p>
                <a href="vervolgcursus.php" class="btn btn-primary informationbutton">Meer informatie</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="images/DSC_0766.JPG" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Gevorderdencursus - Module 3</h5>
                <p class="card-text">Deze module is voor eigenaren, die net dat stapje verder willen qua gehoorzaamheid en een begin willen maken met speuren, zoeken en behendigheid.</p>
                <a href="gevorderdencursus.php" class="btn btn-primary informationbutton">Meer informatie</a>
            </div>
        </div>
    </div>
</div>
<footer>
    <?php include 'components/footer.php' ?>
</footer>
</body>
</html>
