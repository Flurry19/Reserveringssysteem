<?php
require_once('components/db.php');
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
?>
<nav class="navbar navbar-expand-lg">
    <img class="navbar-brand" src="images/beeldlogo_wit.png">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="navbar-nav mr-auto">
                                <div class="nav-item">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </div>
                            <div class="nav-item">
                                    <a class="nav-link" href="overons.php">Over ons</a>
                        </div>
    <div class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Aanbod
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="groepslessen.php">Groepslessen</a>
                                        <a class="dropdown-item" href="privétraining.php">Privétraining</a>
                                        <a class="dropdown-item" href="gedragstherapie.php">Gedragstherapie</a>
                                        <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="contact.php">Vraag</a>
                                        </div>
                                    </div>
                                    <div class="nav-item">
                                    <a class="nav-link" href="tarieven.php">Tarieven</a>
        </div>
        <div class="nav-item">
                                    <a class="nav-link" href="create.php">Inschrijven</a>
        </div>
        <div class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
        </div>
                            </div>
                            <?php if (isset($_SESSION['loggedInAdmin'])) { ?>
                            <div class="navbar-nav nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Overzichten
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="adminafspraken.php">Alle afspraken</a>
                                    <a class="dropdown-item" href="adminoverzichtusers.php">Alle gebruikers</a>
                                </div>
                            </div>
                            <div class="navbar-nav">
                            <div class="nav-item btn-primary">
                                <a class="nav-link" href="logout.php">Log uit</a>
                            </div>
                        </div>
                            <?php } ?>
                            <?php if (isset($_SESSION['loggedInUser'])) { ?>
                                <div class="navbar-nav nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Profiel
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="afspraken.php">Afspraken</a>
                                        <a class="dropdown-item" href="gegevens.php">Gegevens</a>
                                    </div>
                                </div>
                            <div class="navbar-nav">
                            <div class="nav-item btn-primary">
                                <a class="nav-link" href="logout.php">Log uit</a>
                            </div>
                        </div>
                            <?php } ?>
                            <?php if (!isset($_SESSION['loggedInAdmin']) && (!isset($_SESSION['loggedInUser']))){ ?>
                                <div class="navbar-nav ml-auto">
                                    <div class="nav-item btn-primary">
                                        <a class="nav-link" href="loginpage.php">Log in</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>