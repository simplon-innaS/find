<?php
try{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}

catch(Exception $e){
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$bdd->query( //la requete sql
		'INSERT INTO test (login, mdp, nom, prenom)
		VALUES ("' . $_POST['login'] .
			'", "' . $_POST['mdp'] .
			'", "' . $_POST['nom'] .
			'", "' . $_POST['prenom'] .
			'");'
	);
?>
