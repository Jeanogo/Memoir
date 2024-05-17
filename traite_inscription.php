<?php
    include'conectbdd.php';//connexion a la base de donnée    
    //recuperer les information entre par l'utilisateur
    if(isset($_POST['submit'])){
        $nom=$_POST['nom'];
        $pre=$_POST['prenom'];
        $mail=$_POST['mail'];
        $tel=$_POST['telephone'];
        $adres=$_POST['adress'];
        $mdp1=$_POST['mdp1'];
        $mdp2=$_POST['mdp2'];
        $type=$_POST['type'];
        $photo=$_FILES['image']['name'];
        $extention=explode(".",$photo);
        $vraiExtension=strtolower(end($extention));
        $tablrExt=['jpg','jpeg','png','gif'];
 
        if(in_array($vraiExtension,$tablrExt))
        {
           $nomFichier=date("Y-m-d")."".date("H-m-s");
           $vrainomFichier=$nomFichier.".".$vraiExtension;
           $chemin="image/".$vrainomFichier;
           $fichierTemp=$_FILES['image']['tmp_name'];
           move_uploaded_file($fichierTemp,$chemin);
        $req="INSERT INTO `utilisateur`(`nom`, `prenom`, `telephone`, `email`, `ville`, `password`, `type_utilisateur`, `photo`)
         VALUES ('$nom','$pre','$tel','$mail','$adres','$mdp1','$type','$nomFichier')";
        $execute=mysqli_query($con,$req);
        if($execute){
            if($type=='Client'){
                header('location:formulaire_client.php');
                exit;              
            }
            if($type=='Prestataire'){
                header('location:formulaire_prest.php');
                exit;              
            }     
        }
    }
    }
       
    

        
?>