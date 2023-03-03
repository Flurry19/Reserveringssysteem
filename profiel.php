<?php
session_start();

//May I even visit this page?
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: login.php");
    exit;
}

//Get email from session
$name = $_SESSION['loggedInUser']['name'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<main>
    <h1>Welcome <?= $name ?> </h1>
</main>
<footer>
    <?php include 'components/footer.php' ?>
</footer>
</body>
</html>
