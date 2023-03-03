<?php
session_start();
require_once('components/db.php');
    if (!isset($_SESSION['loggedInAdmin'])) {
        header("Location: adminlogin.php");
        exit;
    }
$query = "SELECT appointments.*, class.name as class_name FROM appointments 
LEFT JOIN class ON class.id = appointments.class_id";
$result = mysqli_query($mysqli, $query) or die ('Error: ' . $query);

if (mysqli_num_rows($result) == 0) {
    header('Location: index.php');
    exit;
}

$appointments = [];
while($row=mysqli_fetch_assoc($result))
{
    $appointments[] = $row;
}

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
    <title>Reserveringen</title>
</head>
<header>
    <!-- Nav bar -->
    <?php include 'components/header.php' ?>
    <h1>Alle reserveringen</h1>
    <a href="create.php">Create</a>
</header>
<body>
<main>
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>Index</th>
            <th>Datum</th>
            <th>Tijdstip</th>
            <th>Naam cursist</th>
            <th>Naam hond</th>
            <th>Ras hond</th>
            <th>Cursus</th>
            <th>Details</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        </thead>
        <tbody>

        <?php foreach ($appointments as $index=>$appointment){?>
            <tr>
                <td><?=$index+1?></td>
                <td><?=$appointment['date']?></td>
                <td><?=$appointment['time']?></td>
                <td><?=$appointment['student']?></td>
                <td><?=$appointment['dog']?></td>
                <td><?=$appointment['breed']?></td>
                <td><?=$appointment['class_name']?></td>
                <td><a href="detail.php?index=<?= $appointment['id']?>">Details</a></td>
                <td><a href="edit.php?id=<?= $appointment['id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?= $appointment['id']; ?>">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</main>
<footer>
    <?php include 'components/footer.php' ?>
</footer>
</body>
</html>