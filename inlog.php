<?php
require_once('components/db.php');
session_start();
$login = false;
if (isset($_POST['submit'])){
    $mail = mysqli_real_escape_string($mysqli,$_POST['mail']);
    $password = $_POST['password'];

    if($mail == ""){
        $errors ['mail'] = "Email kan niet leeg zijn";
    }
    if($password == ""){
        $errors ['password'] = "Wachtwoord kan niet leeg zijn";
    }
    if (empty($errors)) {
        $query = "SELECT * FROM users where mail = '$mail'";
        $result = mysqli_query($mysqli, $query);
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['loggedInUser'] = [
                        'id' => $user['id'],
                        'mail' => $user['mail']
                ];
                $login = true;
                header('Location: index.php');
                exit;
            }

        } else {
            echo $noUser = "Incorrect log in";
        }
    } else {
        echo $noUser = "Incorrect log in";
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
    <h1>Login</h1>
</header>
<body>
    <div class="container">
        <?php if($login){ ?>
            <p>Je bent ingelogd!</p>
            <p><a href="logout.php">Uitloggen</a></p>
    </div>
        <?php } else { ?>
    <div class="container">
        <form method="POST" action="">
            <div class="form-input">
                <input type="text" name="mail" id="mail" placeholder="Email" value="<?= isset($mail) ? htmlentities($mail) : ''?>"/>
                <p class="help is-danger">
                    <?= $errors['mail'] ?? '' ?>
                </p>
            </div>
            <div class="form-input">
                <input type="password" name="password" id="password" placeholder="Wachtwoord" value="<?= isset($password) ? htmlentities($password) : ''?>"/>
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
    </div>
    <footer>
        <?php include 'components/footer.php' ?>
    </footer>
</body>
</html>
