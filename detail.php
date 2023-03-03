<?php require_once('components/db.php');
/** @var $mysqli */

$appointmentId = mysqli_escape_string($mysqli, $_GET['index']);

$query = "SELECT appointments.*, class.name AS class_name FROM appointments 
LEFT JOIN class ON class.id = appointments.class_id
WHERE appointments.id = '$appointmentId'";
$result = mysqli_query($mysqli, $query) or die ('Error: ' . $query);

if (mysqli_num_rows($result) == 0) {
    header('Location: index.php');
    exit;
}

$appointment = mysqli_fetch_assoc($result);

mysqli_close($mysqli);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Collection - Details [ALBUM]</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css"
</head>
<header>
    <!-- Nav bar -->
    <?php include 'components/header.php' ?>
    <h1>Reserveringen cursisten</h1>
</header>
<body>
<div class="container px-4">
    <h2 class="title mt-4"><?= $appointment['date'] ?></h2>
    <section class="content">
        <ul>
            <li>Tijd: <?= $appointment['time'] ?> </li>
            <li>Naam cursist: <?= $appointment['student'] ?> </li>
            <li>Naam hond: <?= $appointment['dog'] ?> </li>
            <li>Ras hond: <?= $appointment['breed'] ?> </li>
            <li>Cursus: <?= $appointment['class_name'] ?> </li>
        </ul>
        <a class="button text-white" href="afspraken.php">Terug naar alle afspraken</a>
    </section>
</div>
<footer>
    <?php include 'components/footer.php' ?>
</footer>
</body>
</html>
