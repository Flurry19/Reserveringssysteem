<?php
require_once('components/db.php');
session_start();
$login = false;
if (isset($_POST['submit'])){
    $username2 = $_POST['username'];
    $password = $_POST['password'];

    if($username2 == ""){
        $errors ['username'] = "Gebruikersnaam kan niet leeg zijn";
    }
    if($password == ""){
        $errors ['password'] = "Wachtwoord kan niet leeg zijn";
    }
    if (empty($errors)) {
        $query = "SELECT * FROM admins where username = '$username2'";
        $result = mysqli_query($mysqli, $query);
        $admin = mysqli_fetch_assoc($result);
        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                $_SESSION['loggedInAdmin'] = [
                    'id' => $admin['id'],
                    'username' => $admin['username']
                ];
                $login = true;
                header('Location: index.php');
                exit;
            }

        } else {
            echo $noAdmin = "Incorrect log in";
        }
    } else {
        echo $noAdmin = "Incorrect log in";
    }
}
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
<header>
    <!-- Nav bar -->
    <?php include 'components/header.php' ?>
    <h1>Login admin</h1>
</header>
<body>
<div class="container">
    <?php if($login){ ?>
        <p>Je bent ingelogd!</p>
        <p><a href="logout.php">Uitloggen</a></p>
    <?php } else { ?>
    <form method="POST" action="">
        <div class="form-input">
            <input type="text" name="username" id="username" placeholder="Gebruikersnaam" value="<?= $username2 ?? '' ?>"/>
            <p class="help is-danger">
                <?= $errors['username'] ?? '' ?>
            </p>
        </div>
        <div class="form-input">
            <input type="password" name="password" id="password" placeholder="Wachtwoord" value="<?= $password ?? '' ?>"/>
            <p class="help is-danger">
                <?= $errors['password'] ?? '' ?>
            </p>
            <?php if(isset($errors['loginFailed'])) { ?>
                <div class="notification is-danger" >
                    <button class="delete"></button>
                    <?php echo $noUser ?>
                    <?=$errors['loginFailed']?>
                </div>
            <?php } ?>
        </div>
        <div class="submit">
            <input type="submit" name="submit" id="submit" value="LOGIN" class="btn-login">
        </div>
        <?php } ?>
    </form>
</div>
<footer>
    <?php include 'components/footer.php' ?>
</footer>
</body>
</html>
