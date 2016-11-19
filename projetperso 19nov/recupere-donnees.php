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
 WHERE login = "jean.dupon" AND mdp = "12345" ;'
);

 while($donnees = $requete->fetch()){
	 echo $GET['login'] = $donnees['nom'];
  //  $prenom = $donnees['prenom'];
  //  $login = $donnees['login'];
  //  $mdp = $donnees['mdp'];

 };
?>
