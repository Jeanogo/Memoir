<?php
    include'connexion.php';
    $req="SELECT * FROM prestataire";
    $execute=mysqli_query($con,$req);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Prestataires</title>
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
    </header><br><br>
    <div class="container">
        <div class="mt-5 text-center text-white bg-primary mb-3 p-3">
            <h2>Liste des Prestataires</h2>
        </div>
        <div>
            <i>
                <?php
                if (isset($_GET['message'])) {
                    $message=$_GET['message'];
                    echo $message;
                }
                ?>
            </i>
        </div>
        <table class="table" border="1px">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Service</th>
               </tr>
           </thead>
           <tbody>
                <?php
                $id=1;
                    while($prestataire=mysqli_fetch_assoc($execute)){//tableau dynamique
                        echo"<tr>";
                            echo"<td>".$id."</td>";
                            echo"<td>".$prestataire['nom_voie']."</td>";
                            echo"<td>".$prestataire['Localisation']."</td>";
                            echo"<td>".$prestataire['kilometres']."</td>";
                            echo"<td><a class='btn btn-success' href='modifiervoie.php?id_voie=".$prestataire['id_voie']."'>Modifier</a></td>";
                            echo"<td><a class='btn btn-danger' href='supprimervoie.php?id_voie=".$prestataire['id_voie']."'>Supprimer</a></td>";
                        echo"</tr>";
                        $id++;
                    }
                ?>
           </tbody>
        </table>
         <h5 class="text-center mt-5 "><a href="inscription.php" >Nouvel prestataire</a> </h5> 
    </div>
</body>
</html>