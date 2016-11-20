<?php
try{
  // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=find;charset=utf8', 'root', '');

}

catch(Exception $e){
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$requete = $bdd->query(
'SELECT *
 FROM utilisateur
 WHERE login = "inna.sarib@gmail.com" AND mdp= "aaaaaaa";'
);

 while($donnees = $requete->fetch()){
	 echo $donnees['login'],
   $donnees['nom'],
   $donnees['prenom'];
 };
?>
