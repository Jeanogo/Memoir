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
#fonnctione{
    text-align: center;
    padding: 30px;
}



    </style>
</head>
<body>
    <?php include 'header.php'; ?>


    <section class="">
    
        <div class="image-container">
            <img src="image/im2.jpg" class="img-fluid h-250px" alt="Image">

            <div class="overlay">
                <h2 class="fs-1">Oubliez les anciennes règles.
                 Vous pouvez avoir les meilleurs<br> 
                    collaborateurs. Dès maintenant. Ici et maintenant.</h2>
                <p class="fs-3 text-warning">Travaillez avec le plus grand réseau de professionnels<br>
                     indépendants et faites avancer les choses, qu'il s'agisse d'un changement<br>
                      rapide ou d'une transformation importante.</p>

                <button class="px-5 fs-5 btn btn-primary rounded"><a  style="text-decoration: none;"class="text-white" href="inscription.php">S'INSCRIRE</a></button>
            </div>
        </div>
    </section>
    
    
        
        
        <!-- Autres sections de contenu -->
        <section class="container">
            <h2 id="fonnctione">Comment ca fonctione?</h2>
            <div class="d-flex justify-content-center">

            <div class="image-container">
                <img src="image/im1.jpg" class="img-fluid px-4 " alt="Image">
                <div  class="px-4 ">
                    <h2 class="text-success">Texte sur l'image</h2>
                    <p class="text-success">Un peu de texte ici...</p>
                </div>
            </div>

            <div class="image-container">
                <img src="image/im2.jpg" class="img-fluid px-4" alt="Image">
                <div class="px-4">
                    <h2 class="text-success">Texte sur l'image2</h2>
                    <p class="text-success">Un peu de texte ici...</p>
                </div>
            </div>

            <div class="image-container">
                <img src="image/im3.jpg" class="img-fluid px-4" alt="Image">
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