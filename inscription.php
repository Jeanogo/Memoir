<?php
    include('header.php');  
?>
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
                        
                        display: flex;
                        justify-content: center; /* Centrer horizontalement */
                        align-items: center; /* Centrer verticalement */
                         border-radius:50px;
                         margin-top:100;
                        }
                       #img {
                                height: 500px;
                                margin-top:100;
                                width: 800px;
                                border-radius: 10px;
                          }
            
                
                
                </style>
            </head>
        <body>
        
            <div class="  px-3 d-flex "><br><br>

                <div>
                    <div class="mx-auto px-5" id="h1">
                        <h1  class="dispaly-1 border text-light  bg-success px-5 mx-4 " >Formulaire d'Inscription</h1>
                    </div> <br>
             
                    <div class="row">
                        <form action="#" method="POST" class=" custorm border  p-2 bg-light ">
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
                                    <label for="">Votre adresse</label>
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
                                    <label for="">vous êtes:</label>
                                    <select name="mat" id=""  class="form-control">
                                        <option value="A"></option>
                                        <option value="A">Client</option>
                                        <option value="">Prestataire</option>
                                    </select>                                       
                                </div>
                            </div> 
                            <div class="text-center mx-5">
                                <input type="submit" value="Envoyer" class="btn btn-primary mx-5" name="submitt">
                                <input type="reset" value="Annuler" class="btn btn-danger mx-5">
                            </div>
                        
                        </div>
                    </form> 
                </div>

                <div class=" rounded" >
                    <img src="image/im1.jpg" class="img-fluid px-5 rounded" >
                </div>
             </div>

            </div>
            
        


        </body>
    </html>
    <?php  include('footer.php') ?>