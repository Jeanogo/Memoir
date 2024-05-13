<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
           /*  display: flex;
          /*   justify-content:center;
            align-items:center; */ */
            height: 5000px;
            padding-top: 70px; 
        }
        .navbar{
            margin-bottom:50px;
       }
    </style>
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
        <h1 class="" >PrestaBénin</h1>
    <div class="container">
        <div class="row">
           <div class=""col-md-6>
                    <h1 class="dispaly-1 border text-light text-center bg-dark p-2" >CONNEXION</h1>  
                    <form action="#" method="POST" class="border p-2 bg-light">        
                        <div class="form-group">
                            <label for="">Votre email</label>
                            <input type="mail" name="mail" placeholder="Email" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Votre mot de passe</label>
                            <input type="password" name="mdp1" placeholder="Mot de passe" id="" class="form-control">
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Continue" class="btn btn-success ">
                            <p>vous n'aviez pas de compte? <a href="index.php">S'incrire</a></p>
                        </div>
                    </form>
            </div>
            <div class="col-md-6">
                <img src="./images/simple3.jpg" alt="logo" class="img-fluid" srcset="">
            </div>
        </div>

    </div>
     
</body>
</html>