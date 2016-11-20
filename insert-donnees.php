<?php
try{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=find;charset=utf8', 'root', '');
}

catch(Exception $e){
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$login = $_POST['login'];
$requeteVerifieExiste = $bdd->query(
"SELECT count(login)
 FROM utilisateur
 WHERE login = '$login';"
);
$requeteVerifieExiste->execute();

if ($requeteVerifieExiste->fetchColumn() > 0){
    echo 'Ce login à déjà été utilisé';
}else{
  $bdd->query( //la requete sql
  //mettre une conditions si checkbox particulier = true alors inseré dans fiche_profil_particulie
  		'INSERT INTO utilisateur (id_user, nom, prenom, photo, sexe, login, mdp, type_profil, pays, ville, date_creation, id_ce_que_jaime, id_ce_que_jai_trouve, id_liker, id_repondu)
  		VALUES ("DEFAULT
  			", "' . $_POST['nom'] .
  			'", "' . $_POST['prenom'] .
  			'", "
  			", "
        ", "' . $_POST['login'] .
        '", "' . $_POST['mdp'] .
        '", "
        ", "
        ", "
        ", "
        ", "
        ", "
        ", "
        ", ""
      )
  	');

    echo "Felicitation, votre compte à bien été créé";
}



?>
