
<!DOCTYPE html>
    <html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Inscription</title>
                <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
                <style>
                    body{
                    /*  display: flex;
                    /*   justify-content:center;
                        align-items:center; */ */
                        height: 5000px;
                        
                        /*width: 50px;*/
                        margin:0px;
                        
                    }
                    .custorm{
                        border: 1px solide #ccc;
                        border-radius:10px;
                        padding:20px;
                        box-shadow:0px 0px 10px rgba(0,0,0,0.1);
                    }
                    #h1 {
 
                         border-radius: 100px;
                        }
                       #img {
                                height: 450px;
                                margin:50px;
                                width: 600px;
                                border-radius: 10px;
                                margin:px;
                                margin-left: 140px;
                                margin-top: -10px;
                          }
                          #lage{
                            width:900px;
                            margin-top: -60px;
                          }
                          #divglo{
                            margin-top: 80px;
                            height: 500px;
                          }
                          #form{
                            margin: 30px;
                            background-color:rgb(128,128,128);
                            margin-left: 90px;
                            height: 450px;
                          }
                          
                         
                
                
                </style>
            </head>
        <body>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-success">

        <div class="container-fluid container">

                <a href="index.php"><img class="px-2"  style="width: 100px; height: 100px;" src="image/log1.png" alt="Description de l'image"></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-between container-fluid">

                <li class="nav-item px-5 list-inline-item">
                    <a class="nav-link text-white  fs-5" aria-current="page" href="index.php">HOME</a>
                </li>

                <li class="nav-item px-4 list-inline-item">
                    <a class="nav-link text-white  fs-5" href="#">NOUS CONTACTER</a>
                </li>

                <li class="nav-item px-4 list-inline-item">
                    <a class="nav-link text-white  fs-5" href="#">A PROPOT DE NOUS  </a>
                </li>
                <button class="px-5 fs-5 btn btn-info rounded"><a  style="text-decoration: none;"class="text-white " href="inscription.php">S'INSCRIRE</a></button>
                <button class="px-5 fs-5 btn btn-info rounded " style="text-decoration:none;" ><a href="conexion.php" style="text-decoration:none;" class="text-white" >SE CONNECTER</a></button>
            </ul>
            
        </div>
    </div>

</nav>

        </header>
        <h1 class=" container text-light text-center bg-dark p-2 mt-4" >INSCRIVEZ-VOUS</h1>  
            <div class="  px-3 d-flex" id="divglo" ><br>

                <div id="lage"  >
                    
             
                    <div class="row">
                        <form id="form" action="traite_inscription.php" method="POST" class=" custorm border  p-2 bg-secondary " enctype="multipart/form-data">
                            <div class="d-flex">
                                <div class="form-group col-md-6 col-12 px-5">
                                    <label for="">Votre nom</label>
                                    <input type="text" name="nom" placeholder="Nom" id="" class="form-control">
                                </div>                 
                                <div class="form-group col-md-6 px-5">
                                    <label for="">Votre prenom</label>
                                    <input type="text" name="prenom" placeholder="Prénom" id="" class="form-control">
                                </div>
                            </div> 
                            <div class="form-row d-flex">
                                <div class="form-group col-md-6 px-5">
                                    <label for="">Ville</label>
                                    <input type="text" name="adress" placeholder="Adresse" id="" class="form-control">
                                </div>
                                <div class="form-group col-md-6 px-5">
                                    <label for="">Votre numéro</label>
                                    <input type="text" name="telephone" placeholder="Téléphone" id="" class="form-control">
                                </div>
                            </div> 
                            <div class="form-row d-flex">
                                <div class="form-group col-md-6 px-5">
                                    <label for="">Votre email</label>
                                    <input type="mail" name="mail" placeholder="Email" id="" class="form-control">
                                </div>
                                <div class="form-group col-md-6 px-5">
                                    <label for="">Votre mot de passe</label>
                                    <input type="password" name="mdp1" placeholder="Mot de passe" id="" class="form-control">
                                </div>
                            </div> 
                            <div class="form-row d-flex">
                                <div class="form-group col-md-6 px-5">
                                    <label for="">Confimer mot de passe</label>
                                    <input type="password" name="mdp2" placeholder="confimer mot de passe" id="" class="form-control">
                                </div>
                                <div class="form-group col-md-6 px-5">
                                    <label for="">Vous vous inscrivez en tant que: </label>
                                    <select name="type" id=""  class="form-control">
                                        <option value=""></option>
                                        <option value="Client">Client</option>
                                        <option value="Prestataire">Prestataire</option>
                                    </select>                                       
                                </div>
                                
                            </div> 
                            <div class="mx-auto" style=" width: 600px;">
                                    <label for="">Votre photo:</label> 
                                    <input type="file" name="image" id="" class="form-control" />
                            </div>
                            <div class="text-center mt-5">
                                <input name="submit" type="submit" xvalue="Envoyer" class="btn btn-primary mx-5" name="submitt">
                                <input type="reset" value="Annuler" class="btn btn-danger mx-5">
                            </div>                       
                        </div>
                    </form> 
                </div>

                <div  class="col-md-6 " style="margin-top: -25px;" >
                 <img id="img"  src="./image/inscri.jpg" alt="" class="img-fluid container" srcset="">
                </div>

             </div>

            </div>
            
        


        </body>
    </html>
    <?php  include('footer.php') ?>