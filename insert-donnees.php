<?php
$mysqli = new mysqli ('localhost', 'root', '', 'test');

if ($mysqli->connect_error) {
	die('Erreur de connexion'); //message si ca ne fonctionne pas
};

$mysqli->query('SET NAMES UTF8'); //pour ne pas avoir de problemes de reconnaissance de caractere speciaux

session_start();


//renvoi vers la bdd
$id = 'aaaa'; //on recupere l'id grace à la variable profile on cible l'id
$name = 'sqdsqdqsd';
$firstname =  'sqdqsdqs';
$lastname =  'aaaazaz';
$email =  'jean.dupond@sdjsd.de';

$mysqli->query( //la requete sql
		'INSERT INTO user (nom, prenom, login, mdp)
		VALUES ("' . $id .
			'", "' . $name .
			'", "' . $firstname .
			'", "' . $lastname .
			'", "' . $email .
			'");'
	);
?>
