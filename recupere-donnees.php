<?php
try{
  // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

}

catch(Exception $e){
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$requete = $bdd->query(
'SELECT *
 FROM test
 WHERE nom = "Jean" AND prenom = "Dupont" ;'
);

 while($donnees = $requete->fetch()){
	 echo $donnees['nom'],
   $donnees['prenom'];
 };
?>
