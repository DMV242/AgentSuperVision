<?php

require "../../bdd/bdd_connection.php";

if (!empty($_POST)) {
    var_dump($_POST);
    $nom_agt = $_POST["nom"];
    $prenom_agt = $_POST["prenom"];
    $dateNaiss = $_POST["dateNaiss"];
    $anneeNaiss = (int) explode("-", $_POST["dateNaiss"])[0];
    $password = $_POST["pass"];
    $telephone = $_POST["tel"];
    $adresse = $_POST["adresse"];
    $quartier = $_POST["quartier"];
    $sexe = $_POST["sexe"];
    $mail = $_POST["mail"];
    $age = (int) date("Y") - $anneeNaiss;
    $photo = $_FILES["photo"]["name"];
    $photo_temp = $_FILES["photo"]["tmp_name"];
    move_uploaded_file($photo_temp, "../../img/img_agent/" . $photo);
    $db = DataBase::connect();
    $requete = $db->prepare("INSERT INTO `agent`(`agt_nom`, `agt_prenom`, `agt_age`, `agt_sexe`, `agt_telephone`, `agt_adresse`, `agt_quartier`,
     `agt_mot_de_passe`, `agt-mail`, `agt_photo`,
     `dateNaiss_agt`, `date_agt`, `heure`) VALUES (?,?,?,
     ?,?,?,?,?,?,?,
    ?,CURRENT_DATE(),CURRENT_TIME())");
    DataBase::disconnect();
    $params = array($nom_agt, $prenom_agt, $age, $sexe, $telephone, $adresse, $quartier, $password, $mail, $photo, $dateNaiss);
    $requete->execute($params) or die(var_dump("erreur lors de 'insertion"));

    header("location:../../pages/accueilAdmin.php");

} else {
    header("location:../..");
}
