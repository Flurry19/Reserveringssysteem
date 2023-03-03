<?php
require_once('components/db.php');
session_start();
if (!isset($_SESSION['loggedInUser'])) {
    header("Location: loginpage.php");
    exit;
}
$query = "SELECT * FROM class";
$result = mysqli_query($mysqli, $query) or die ('Error: ' . $query );



//Loop through the result to create a custom array
$class = [];
while ($row = mysqli_fetch_assoc($result)) {
    $class[] = $row;
}
if (isset($_POST['submit'])) {
    $date = mysqli_real_escape_string($mysqli, $_REQUEST['date']);
    $time = mysqli_real_escape_string($mysqli, $_REQUEST['time']);
    $student = mysqli_real_escape_string($mysqli, $_REQUEST['student']);
    $dog = mysqli_real_escape_string($mysqli, $_REQUEST['dog']);
    $breed = mysqli_real_escape_string($mysqli, $_REQUEST['breed']);
    $class_id = mysqli_real_escape_string($mysqli, $_REQUEST['class-id']);

    $errors = [];
    if ($date == "") {
        $errors['date'] = 'Datum kan niet leeg zijn';
    }
    if ($time == "") {
        $errors['time'] = 'Tijdstip kan niet leeg zijn';
    }
    if ($student == "") {
        $errors['student'] = 'Naam kan niet leeg zijn';
    }
    if ($dog == "") {
        $errors['dog'] = 'Naam hond kan niet leeg zijn';
    }
    if ($breed == "") {
        $errors['breed'] = 'Ras hond kan niet leeg zijn';
    }
    if ($class_id == "") {
        $errors['class-id'] = 'Cursus kan niet leeg zijn';
    }

    if (empty($errors)) {
        $userId = $_SESSION['loggedInUser']['id'];
        $sqlquery = "INSERT INTO appointments (user_id, date, time, student, dog, breed, class_id)
        VALUES ('$userId','$date', '$time', '$student', '$dog', '$breed', '$class_id')";
        $result = mysqli_query($mysqli, $sqlquery) or die('Error: '.mysqli_error($mysqli). ' wth query ' . $sqlquery);

        if ($result){
            header('Location: afspraken.php');
            exit;
        } else {
            $errors['mysqli'] = 'Er is iets misgegaan in je database query: ' . mysqli_error($mysqli);
        }

        mysqli_close($mysqli);
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
    <title>Inschrijven</title>
</head>
<header>
    <!-- Nav bar -->
    <?php include 'components/header.php' ?>
    <h1>Inschrijven</h1>
</header>
<body>
<main>
<form action="" method="post">
    <label for="date">Datum</label>
    <input type="date" id="date" name="date" value="<?= isset($date) ? htmlentities($date) : '' ?>"/>
    <span class="errors"><?= $errors['date'] ?? '' ?></span>

    <label for="time">Tijdstip</label>
    <input type="time" id="time" name="time" value="<?= isset($time) ? htmlentities($time) : ''?>"/>
    <span class="errors"><?= $errors['time'] ?? '' ?></span>

    <label for="student">Naam</label>
    <input type="text" id="student" name="student" value="<?= isset($student) ? htmlentities($student) : ''?>"/>
    <span class="errors"><?= $errors['student'] ?? '' ?></span>

    <label for="dog">Naam hond</label>
    <input type="text" id="dog" name="dog" value="<?= isset($dog) ? htmlentities($dog) : ''?>"/>
    <span class="errors"><?= $errors['dog'] ?? '' ?></span>

    <label for="breed">Ras hond</label>
    <input type="text" id="breed" name="breed" value="<?= isset($breed) ? htmlentities($breed) : ''?>"/>
    <span class="errors"><?= $errors['breed'] ?? '' ?></span>

    <label for="class">Cursus</label>
    <select name="class-id" id="class-id">
        <?php foreach($class as $singleclass){ ?>
        <option value="<?= $singleclass['id'] ?>"> <?= $singleclass['name'] ?></option>
        <?php } ?>
    </select>
    <span class="errors"><?= $errors['breed'] ?? '' ?></span>

    <button type="submit" name="submit">Verzenden</button>
</form>
</main>
<footer>
    <?php include 'components/footer.php' ?>
</footer>
</body>
</html>