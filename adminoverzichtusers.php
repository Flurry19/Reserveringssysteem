<?php
require_once('components/db.php');
session_start();
if (!isset($_SESSION['loggedInAdmin'])) {
    header("Location: adminlogin.php");
    exit;
}
$query = "SELECT * FROM users";
$result = mysqli_query($mysqli, $query) or die ('Error: ' . $query);

if (mysqli_num_rows($result) == 0) {
    header('Location: index.php');
    exit;
}

$allusers = [];
while($row=mysqli_fetch_assoc($result))
{
    $allusers[] = $row;
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
    <title>Gebruikers</title>
</head>
<header>
    <!-- Nav bar -->
    <?php include 'components/header.php' ?>
    <h1>Alle gebruikers</h1>
</header>
<body>
<main>
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th>Index</th>
            <th>Naam</th>
            <th>Email</th>
            <th>Telefoonnummer</th>
            <th>Adres</th>
            <th>Naam hond</th>
            <th>Ras hond</th>


        </tr>
        </thead>
        <tbody>

        <?php foreach ($allusers as $index=>$singleuser){?>
            <tr>
                <td><?=$index+1?></td>
                <td><?=$singleuser['name']?></td>
                <td><?=$singleuser['mail']?></td>
                <td><?=$singleuser['phonenumber']?></td>
                <td><?=$singleuser['address']?></td>
                <td><?=$singleuser['dog']?></td>
                <td><?=$singleuser['breed']?></td>
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
