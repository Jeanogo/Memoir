
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
                         text-align: center;
                      
                        }
                       #img {
                                height: 700px;
                                margin-top:100px;
                                width: 800px;
                                border-radius: 10px;
                                
                          }
                          #lage{
                            width:1000px;
                            margin-top: 100px;
                          }
                          #divglo{
                            margin-top: 80px;
                            height: 500px;
                          }
                          #form{
                                width: 1000px;
                                margin-bottom: 50px;
                                height: 300px;
                                margin-right: 20px;
                                
                          }
                          #img{
                            position: relative;
                                height:300px;
                                margin-bottom: 100px;  
                          }
                          #non{
                            height: 300px;
                            margin-top: 80px;
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
                
                <li class="nav-item px-5 list-inline-item">
                    <a class="nav-link text-white  fs-5" href="#">LOGIN</a>
                </li>

                <li class="nav-item px-5 list-inline-item">
                    <a class="nav-link text-white  fs-5" href="#">NOUS CONTACTER</a>
                </li>

                <li class="nav-item px-5 list-inline-item">
                    <a class="nav-link text-white  fs-5" href="#">A PROPOT DE NOUS  </a>
                </li>
            </ul>
            <button class="px-5 fs-5 btn btn-info rounded "  ><a href="inscription.php" style="text-decoration:none;" class="text-white" >S'INSCRIRE</a></button>
        </div>
    </div>
</nav>

        </header>
        <h1 class="rounded-lg container border text-light text-center bg-dark p-2 mt-5" >AUTHENTICATION</h1>  
        <div class="container">
        <div class=" d-flex pt-5-">
           <div id="form" class="pr-3">
                    
                    <form id="non" action="#" method="POST" class="border p-2 bg-secondary">        
                        <div class="form-group">
                            <label for="">Votre email</label>
                            <input type="mail" name="mail" placeholder="Email" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Votre mot de passe</label>
                            <input type="password" name="mdp5" placeholder="Mot de passe" id="" class="form-control">
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Continue" name="login" class="btn btn-success mt-3">
                            <p>vous n'aviez pas de compte? <a href="inscription.php">S'incrire</a></p>
                        </div>
                    </form>
            </div>
            <div  class="col-md-6 " style="margin-top: -25px;" >
                <img id="img"  src="./image/conne.png" alt="" class="img-fluid" srcset="">
            </div>
        </div>
    </div>
            
        


        </body>
    </html>
    <?php  include('footer.php') ?>