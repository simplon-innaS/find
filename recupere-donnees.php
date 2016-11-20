<?php
try{
  // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}

catch(Exception $e){
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$loginco = $_POST["loginco"];
$mdpco = $_POST["mdpco"];

$find = $requete = $bdd->query(
"SELECT count(login AND mdp)
 FROM test
 WHERE login = '$loginco'
 AND mdp = '$mdpco';"
);
$find->execute();
if ($find->fetchColumn() > 0){
    echo $loginco;
}else{
  echo $mdpco;
}
?>
