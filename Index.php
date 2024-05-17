<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Titre de la page1</title>
    <style>
       .image-container {
    position: relative;
    height: 500px; /* Hauteur souhaitée */
    overflow: hidden; /* Cache le contenu dépassant de la hauteur */
}

.overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    width: 100%;
}

.overlay * {
    margin: 10px 0;
}

.img-fluid {
    width: 100%;
    height: auto; /* Pour conserver les proportions de l'image */
    display: block;
}
#fonctione{
    text-align: center;
    padding: 30px;
    
}
#imgba{
    opacity: 1;
    filter: brightness(50%) grayscale(100%);
}
#img6{
    width: 1200px;
    height: 300px;
}
#img2{
    width: 1200px;
    height: 300px;
}
#img3{
    width: 1200px;
    height: 300px;
}



    </style>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
    <div class="container-fluid container">

    <a href="index.php"><img class="px-2"  style="width: 100px; height: 100px;" src="image/log1.png" alt="Description de l'image"></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item px-5 ">
                    <a class="nav-link text-white  fs-5" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item px-3 ">
                    <a class="nav-link text-white  fs-5" href="#">NOUS CONTACTER</a>
                </li>

                <li class="nav-item px-3">
                    <a class="nav-link text-white  fs-5" href="#">A PROPOT DE NOUS  </a>
                </li>
                <li class="nav-item px-3">
                <button class="px-5 fs-5 btn btn-info rounded " style="text-decoration:none;" ><a href="conexion.php" style="text-decoration:none;" class="text-white" >SE CONNECTER</a></button>
                    
                </li>
            </ul>
            <button class="px-5 fs-5 btn btn-info rounded " ><a href="inscription.php" style="text-decoration:none;" class="text-white" >S'INSCRIRE</a></button>
        </div>
    </div>
</nav>

    </header>
    


    <section class="">
    
        <div class="image-container">
            <img id="imgba" class="img-fluid" src="image/baniere.jpg" class="img-fluid h-250px" alt="Image">

            <div class="overlay">
                <h2 class="fs-1">Oubliez les anciennes règles.
                 Vous pouvez avoir les meilleurs<br> 
                    collaborateurs. Dès maintenant. Ici et maintenant.</h2>
                <p class="fs-3 text-warning">Travaillez avec le plus grand réseau de professionnels<br>
                     indépendants et faites avancer les choses, qu'il s'agisse d'un changement<br>
                      rapide ou d'une transformation importante.</p>

                <button class="px-5 fs-5 btn btn-success rounded"><a  style="text-decoration: none;"class="text-white" href="inscription.php">S'INSCRIRE</a></button>
            </div>
        </div>
    </section>
    
    
        
        
    <!-- Autres sections de contenu -->
    <section class="container ">
        <h2 style="border-radius: 50%;" id="fonctione" class="bg-info mt-3 rounded">Comment ca fonctione?</h2>
        <div class="d-flex justify-content-center mt-5">

            <div class="image-container">
                <img id="img6" src="image/conne.png" class="img-fluid px-4 w-100px " alt="Image">
                <div  class="px-4 ">
                    <h2 class="text-success">Texte sur l'image</h2>
                    <p class="text-success">Un peu de texte ici...</p>
                </div>
            </div>

            <div class="image-container">
                <img id="img2" src="image/im2.jpg" class="img-fluid px-4" alt="Image">
                <div class="px-4">
                    <h2 class="text-success">Texte sur l'image2</h2>
                    <p class="text-success">Un peu de texte ici...</p>
                </div>
            </div>

            <div class="image-container">
                <img id="img3" src="image/im3.jpg" class="img-fluid px-4" alt="Image">
                <div class="px-4">
                    <h2 class="text-success">Texte sur l'image3</h2>
                    <p class="text-success"> Un peu de texte ici...</p>
                </div>
            </div>

            </div>
        </section>
        
        
        <!-- Pied de page -->
        <?php include 'footer.php'; ?>

    <script src="bootstrap\js\bootstrap.min.js"></script>
</body>
</html>