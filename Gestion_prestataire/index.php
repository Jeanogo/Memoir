<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light m-l=100px">
        <div class="container">
            <a class="navbar-brand" href="#">PrestaBénin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="accueil.php">Accueil</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="compteDropdown" data-bs-toggle="dropdown" aria-expanded="false">Mon compte</a>
                        <ul class="dropdown-menu" aria-labelledby="compteDropdown">
                            <li><a class="dropdown-item" href="index.php">Créer un compte</a></li>
                            <li><a class="dropdown-item" href="index2.php">Se connecter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container mt-5">
        <h2 class="">Choisissez votre option</h2>
        <div class="row mt-3">
            <div class="col-md-6">
                <a href="formulaire_job.php" class="btn btn-primary">Publier un job</a>
            </div>
            <div class="col-md-6">
                <a href="liste_prestataire.php" class="btn btn-success">Rechercher un prestataire</a>
            </div>
        </div>
    </div>
</body>
</html>