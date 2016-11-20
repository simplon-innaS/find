<?php
try{
  // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=find;charset=utf8', 'root', '');
}

catch(Exception $e){
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$loginco = $_POST["loginco"];
$mdpco = $_POST["mdpco"];

$find = $requete = $bdd->query(
"SELECT count(login AND mdp)
 FROM utilisateur
 WHERE login = '$loginco'
 AND mdp = '$mdpco';"
);

$find->execute();
if ($find->fetchColumn() > 0){
    echo 'Bienvenue';
}else{
  echo 'Login ou mot de passe incorrect';
}
?>
