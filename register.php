<?php
require_once('components/db.php');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($mysqli,$_POST['name']);
    $mail = mysqli_real_escape_string($mysqli,$_POST['mail']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);
    $phonenumber = mysqli_real_escape_string($mysqli,$_POST['phonenumber']);
    $address = mysqli_real_escape_string($mysqli,$_POST['address']);
    $dog = mysqli_real_escape_string($mysqli,$_POST['dog']);
    $breed = mysqli_real_escape_string($mysqli,$_POST['breed']);

    if ($name == "") {
        $errors['name'] = "Naam kan niet leeg zijn";
    }
    if ($mail == "") {
        $errors['mail'] = "Mail kan niet leeg zijn";
    }
    if ($password == "") {
        $errors['password'] = "Wachtwoord kan niet leeg zijn";
    }
    if ($phonenumber == "") {
        $errors['phonenumber'] = "Telefoonnummer kan niet leeg zijn";
    }
    if ($address == "") {
        $errors['address'] = "Adres kan niet leeg zijn";
    }
    if ($dog == "") {
        $errors['dog'] = "Naam hond kan niet leeg zijn";
    }
    if ($breed == "") {
        $errors['breed'] = "Ras hond kan niet leeg zijn";
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    if (empty($errors)) {
        $query = "INSERT INTO users (name, mail, phonenumber, address, dog, breed, password)
                    VALUES ('$name', '$mail', '$phonenumber', '$address', '$dog', '$breed', '$password')";
        $result = mysqli_query($mysqli, $query);
        header('Location:inlog.php');
        exit;
    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css">
    <title>Document</title>
</head>
<header>
    <!-- Nav bar -->
    <?php include 'components/header.php' ?>
    <h1>Registreren</h1>
</header>
<body>

<div class="container">
    <form method="POST" action="">
        <div class="form-input">
            <input type="text" name="name" id="name" placeholder="Naam" value="<?= isset($name) ? htmlentities($name) : ''?>"/>
            <p class="help is-danger">
                <?= $errors['name'] ?? '' ?>
            </p>
        </div>
        <div class="form-input">
            <input type="email" name="mail" id="mail" placeholder="Email" value="<?= isset($mail) ? htmlentities($mail) : ''?>"/>
            <p class="help is-danger">
                <?= $errors['mail'] ?? '' ?>
            </p>
        </div>
        <div class="form-input">
            <input type="password" name="password" id="password" placeholder="Wachtwoord" value="<?= isset($password) ? htmlentities($password) : ''?>"/>
            <p class="help is-danger">
                <?= $errors['password'] ?? '' ?>
            </p>
        </div>
        <div class="form-input">
            <input type="text" name="phonenumber" id="phonenumber" placeholder="Telefoonnummer" value="<?= isset($phonenumber) ? htmlentities($phonenumber) : ''?>"/>
            <p class="help is-danger">
                <?= $errors['phonenumber'] ?? '' ?>
            </p>
        </div>
        <div class="form-input">
            <input type="text" name="address" id="address" placeholder="Adres" value="<?= isset($address) ? htmlentities($address) : ''?>"/>
            <p class="help is-danger">
                <?= $errors['address'] ?? '' ?>
            </p>
        </div>
        <div class="form-input">
            <input type="text" name="dog" id="dog" placeholder="Naam hond" value="<?= isset($dog) ? htmlentities($dog) : ''?>"/>
            <p class="help is-danger">
                <?= $errors['dog'] ?? '' ?>
            </p>
        </div>
        <div class="form-input">
            <input type="text" name="breed" id="breed" placeholder="Ras hond" value="<?= isset($breed) ? htmlentities($breed) : ''?>"/>
            <p class="help is-danger">
                <?= $errors['breed'] ?? '' ?>
            </p>
        </div>
        <div class="submit">
            <input type="submit" name="submit" id="submit" value="Registreren" class="btn-login">
        </div>
    </form>
</div>
<footer>
    <?php include 'components/footer.php' ?>
</footer>
</body>
</html>
