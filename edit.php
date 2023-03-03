<!--
Aanmaken edit pagina
Form maken
Connectie met de database maken
ID aflezen
Data terugschrijven in form
UPDATE query toevoegen
    Als correct uitgevoerd redirect naar index.php
    Als incorrect uitgevoerd foutmeldingen geven
-->
<?php
include_once('components/db.php');
$query3 = "SELECT * FROM class";
$result3 = mysqli_query($mysqli, $query3) or die ('Error: ' . $query3 );
$class = [];
while ($row = mysqli_fetch_assoc($result3)) {
    $class[] = $row;
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($mysqli,$_POST['id']);
    $date = mysqli_real_escape_string($mysqli,$_POST['date']);
    $time = mysqli_real_escape_string($mysqli,$_POST['time']);
    $student = mysqli_real_escape_string($mysqli,$_POST['student']);
    $dog = mysqli_real_escape_string($mysqli,$_POST['dog']);
    $breed = mysqli_real_escape_string($mysqli,$_POST['breed']);
    $class_id = mysqli_real_escape_string($mysqli,$_POST['class_id']);

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
    $query2 = "UPDATE appointments SET date='$date', time='$time', student='$student', 
                dog='$dog', breed='$breed', class_id='$class_id' WHERE id='$id' ";
    $query_run = mysqli_query($mysqli, $query2);

    $result2 = mysqli_query($mysqli, $query2) or die('Error: ' . mysqli_error($mysqli) . ' wth query ' . $query2);

    if ($result2) {
        header('Location: index.php');
        exit;
    } else {
        $errors['mysqli'] = 'Er is iets misgegaan in je database query: ' . mysqli_error($mysqli);
    }
}
} else if (isset($_GET['id'])){
    $id = $_GET['id'];
    $update = true;
    $query = "SELECT * FROM `appointments` WHERE id='$id'";
    $result = mysqli_query($mysqli, $query) or die('Error: '.mysqli_error($mysqli). ' wth query ' . $query);
    if (mysqli_num_rows($result) == 1) {
        $row = $result->fetch_array();
        $date = $row['date'];
        $time = $row['time'];
        $student = $row['student'];
        $dog = $row['dog'];
        $breed = $row['breed'];
        $class_id = $row['class_id'];
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/styles.css">
    <title>Document</title>
</head>
<body>

<main>
<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
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
    <select name="class_id" id="class-id">
        <?php foreach($class as $singleclass){ ?>
            <option value="<?= $singleclass['id'] ?>"> <?= $singleclass['name'] ?></option>
        <?php } ?>
    </select>
    <span class="errors"><?= $errors['breed'] ?? '' ?></span>

    <button type="update" name="update">Aanpassen</button>
</form>
</main>
</body>
</html>

