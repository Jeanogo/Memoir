<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publier un job</title>
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
    </header><br><br><br>
    <div class="container">
        <form action="#" method="post" class="border p-2 bg-light" enctype="multipart/form-data">
            <h1 class="dispaly-1 border text-light text-center bg-dark p-2" >Publier un job</h1>
            <div class="form-group">
                <div class="form-group">
                    <label for="">Titre Job:</label>
                    <input type="text" name="titre" id="" placeholder="Titre du job" class="form-control">                                   
                </div>
                <div class="form-group">
                    <label for="">Description Job</label>
                    <textarea name="" id="" cols="138" rows="2"></textarea>                          
                </div>
                <div class="form-group">
                    <label for="">Tarif</label>
                    <input type="number" name="cout" placeholder="Le prix" class="form-control" id=""> 
                </div>
                <div class="text-center">
                    <input type="submit" value="Envoyer" class="btn btn-primary" name="submitt">
                    <input type="reset" value="Annuler" class="btn btn-danger">
                </div>             
            </div>               
        </form>
    </div>
    
</body>
</html>