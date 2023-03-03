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

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $update = true;
    $query = "SELECT * FROM `users` WHERE id='$id'";
    $result = mysqli_query($mysqli, $query) or die('Error: '.mysqli_error($mysqli). ' wth query ' . $query);
    if (mysqli_num_rows($result) == 1) {
        $row = $result->fetch_array();
        $name = $row['name'];
        $mail = $row['mail'];
        $phonenumber = $row['phonenumber'];
        $address = $row['address'];
        $dog = $row['dog'];
        $breed = $row['breed'];

    }
} else {
    // no id
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $dog = $_POST['dog'];
    $breed = $_POST['breed'];

    $query2 = "UPDATE users SET name='$name', mail='$mail', phonenumber='$phonenumber', 
                address='$address', dog='$dog', breed='$breed'
                WHERE id='$id' ";
    $query_run = mysqli_query($mysqli, $query2);

    $result2 = mysqli_query($mysqli, $query2) or die('Error: '.mysqli_error($mysqli). ' wth query ' . $query2);

    if ($result2){
        header('Location: gegevens.php');
        exit;
    } else {
        $errors['mysqli'] = 'Er is iets misgegaan in je database query: ' . mysqli_error($mysqli);
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
    <div class="container">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" value="<?= isset($name) ? htmlentities($name) : '' ?>"/>
            <span class="errors"><?= $errors['name'] ?? '' ?></span>

            <label for="mail">Email</label>
            <input type="email" id="mail" name="mail" value="<?= isset($mail) ? htmlentities($mail) : ''?>"/>
            <span class="errors"><?= $errors['mail'] ?? '' ?></span>

            <label for="phonenumber">Telefoonnummer</label>
            <input type="text" id="phonenumber" name="phonenumber" value="<?= isset($phonenumber) ? htmlentities($phonenumber) : ''?>"/>
            <span class="errors"><?= $errors['phonenumber'] ?? '' ?></span>

            <label for="address">Adres</label>
            <input type="text" id="address" name="address" value="<?= isset($address) ? htmlentities($address) : ''?>"/>
            <span class="errors"><?= $errors['address'] ?? '' ?></span>

            <label for="dog">Naam hond</label>
            <input type="text" id="dog" name="dog" value="<?= isset($dog) ? htmlentities($dog) : ''?>"/>
            <span class="errors"><?= $errors['dog'] ?? '' ?></span>

            <label for="breed">Ras hond</label>
            <input type="text" id="breed" name="breed" value="<?= isset($breed) ? htmlentities($breed) : ''?>"/>
            <span class="errors"><?= $errors['breed'] ?? '' ?></span>

            <button type="update" name="update">Aanpassen</button>
        </form>
    </div>
</main>
</body>
</html>


