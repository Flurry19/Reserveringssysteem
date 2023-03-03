<?php
//session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css">
    <title>Document</title>
</head>
<header>
    <!-- Nav bar -->
    <?php include 'components/header.php' ?>
    <h1>Login pagina</h1>
</header>
<body>
    <a href="inlog.php"> <button type="button" class="btn btn-secondary btn-lg buttonpage text-center">Inloggen als bestaande klant
</button> </a>
    <a href="register.php"><button type="button" class="btn btn-secondary btn-lg buttonpage">Registreren
</button></a>
<footer>
    <?php include 'components/footer.php' ?>
</footer>
</body>
</html>
