<?php
try{
  $db= new PDO ('mysql:host=localhost; dbname=base_apprenants','root','');
}
catch(Exception $e) {
    die('Erreur:'.$e -> getMessage ());

}

if(extension_loaded('PDO')){

}

?>  

$sql = $bdd->prepare('SELECT * FROM XXX');
$sql -> execute();
while ($lignes = $sql -> fetch(PDO::FETCH_OBJ)) // On fait une boucle pour récupérer les résultats, le FETCH_OBJ peut être considéré comme le array.

{
	$Nom = $lignes -> nom; // récupération de la valeur contenu dans la ligne 'nom'
	$Prenom = $lignes ->prenom;
	$CP = $lignes -> cp;
?>

<tr>
<td><?php echo $Nom; ?></td> //Affichage des valeurs
<td><?php echo $Prenom; ?></td>
<td><?php echo $CP; ?></td>
</tr>

