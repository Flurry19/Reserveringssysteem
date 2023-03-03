<?php
include_once('components/db.php');
session_start();
if (!isset($_SESSION['loggedInUser'])) {
header("Location: loginpage.php");
exit;
}
$userId = $_SESSION['loggedInUser']['id'];
$query = "SELECT *  
          FROM users
          WHERE id = '$userId'";
$result = mysqli_query($mysqli, $query) or die ('Error: ' . $query);

$data = mysqli_fetch_assoc($result);

mysqli_close($mysqli);
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
    <title>Homepagina</title>
</head>
<body>
<header>
    <!-- Nav bar -->
    <?php include 'components/header.php' ?>
    <h1>Mijn gegevens</h1>
</header>
<main>
    <div class="container opacitycontainer">
    <section class="content">
        <ul>
            <li>Naam: <?= $data['name'] ?> </li>
            <li>Email: <?= $data['mail'] ?> </li>
            <li>Telefoonnummer: <?= $data['phonenumber'] ?> </li>
            <li>Adres: <?= $data['address'] ?> </li>
            <li>Naam hond: <?= $data['dog'] ?> </li>
            <li>Ras hond: <?= $data['breed'] ?> </li>
<!--            <a class="button text-white" href="editgegevens.php">Wijzig mijn gegevens</a>-->
        </ul>
    </div>
</main>


<footer>
    <?php include 'components/footer.php' ?>
</footer>
</body>
</html>
