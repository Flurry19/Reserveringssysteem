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
    <h1>Tarieven</h1>
</header>
<main>

<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Cursus</th>
            <th scope="col">Tijd</th>
            <th scope="col">Prijs</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Puppycursus module 1</th>
            <td>10 opeenvolgende weken</td>
            <td>€120,-</td>
        </tr>
        <tr>
            <th scope="row">Vervolgcursus module 2</th>
            <td>10 opeenvolgende weken</td>
            <td>€120,-</td>
        </tr>
        <tr>
            <th scope="row">Gevorderdencursus module 3</th>
            <td>10 opeenvolgende weken</td>
            <td>€120,-</td>
        </tr>
        <tr>
            <th scope="row">Gedragstherapie</th>
            <td>2-3 uur</td>
            <td>€199,- (excl reiskosten)</td>
        </tr>
        <tr>
            <th scope="row">Privétraining</th>
            <td>45 min</td>
            <td>€40,-</td>
        </tr>
        </tbody>
    </table>
</div>
</main>
<footer>
    <?php include 'components/footer.php' ?>
</footer>
</body>
</html>

