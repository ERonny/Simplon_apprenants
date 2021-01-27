<?php 
require_once "connexion.php"; 
$nom = $_POST["nom"];
$prenom = $_POST ["prenom"];
$naissance = $_POST ["naissance"];
$mail = $_POST ["mail"];
$telephone = $_POST ["telephone"];
$formation = $_POST ["formation"];
$filiere = $_POST ["filiere"];

$preparation = $db -> prepare('INSERT INTO apprennants(nom,prenom,naissance,mail,telephone,formation,filiere) VALUES (?,?,?,?,?,?,?)');

$preparation -> execute(array($nom,$prenom,$naissance,$mail, $telephone, $formation,$filiere,));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">

    
</head>
<body>
    <!-- début entete-->
    <header> 
            <nav>
                <div class="container-fluid">
                        <div class=" r1 row bg-white">
                                <div class="col-4 d-none d-md-block">
                                <h6 class="As" style="font-size:20px"> apprenants</h6>
                                    <h6 class="As" style="font-size:20px">simplon</h6>
                                </div>
                                <div class="col-4">
                                <img  class="img-fluid" height="70px" width="350px" src="style/images/logo br.png" alt=""> 
                                </div>
                                <div class="col- text-right mr-5">
                                <a href="Liste.html" class="ls">Liste des apprenants</a>
                              </div>
                        </div>  
                    </div>
                
            </nav>
    </header>   <!-- fin entete-->
    
    <h2 class="affiche"> APPRENANT(E) ENREGISTRE(E) </h2>
           
</body>

<footer class=" row">
    <div class="foot">
        <div class="cont row">
            <div class="col-4"></div>
            <div class="col-7">
               <img class=" " src="style/images/co.png" width="55" height="55" alt=""/>
             <span style="color: white;width: auto">SIMPLON 2021</span>
            </div>
            <div class="col-1"></div>
            
        </div>
       </div>
   </footer>
</html>






