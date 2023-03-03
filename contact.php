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
    <h1>Contact</h1>
</header>
<main>

    <div class="formcontainer">
        <div class="contact-form-wrapper d-flex justify-content-center">
            <form action="#" class="contact-form">
                <h5 class="title">Neem contact met ons op!</h5>
                <p class="description">Neem gerust contact met ons op als je vragen hebt of hullp nodig hebt met het inschrijven!
                </p>
                <div>
                    <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Naam" required>
                </div>
                <div>
                    <input type="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
                </div>
                <div>
                    <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" cols="30" placeholder="Bericht" required></textarea>
                </div>
                <div class="submit-button-wrapper">
                    <input type="submit" value="Send">
                </div>
            </form>
        </div>
    </div>
</main>
<footer>
    <?php include 'components/footer.php' ?>
</footer>
<body>


</body>
</html>
