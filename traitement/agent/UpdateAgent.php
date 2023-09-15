<?php

require "../../bdd/bdd_connection.php";

if (!empty($_POST) && isset($_GET["id"]) && !empty($_GET["id"])) {
    $id = $_GET["id"];
    $nom_agt = $_POST["nom"];
    $prenom_agt = $_POST["prenom"];
    $dateNaiss = $_POST["dateNaiss"];
    $anneeNaiss = (int) explode("-", $_POST["dateNaiss"])[0];
    $telephone = $_POST["tel"];
    $adresse = $_POST["adresse"];
    $quartier = $_POST["quartier"];
    $sexe = $_POST["sexe"];
    $mail = $_POST["mail"];
    $age = (int) date("Y") - $anneeNaiss;
    $db = DataBase::connect();
    if (isset($_FILES) && !empty($_FILES["photo"]["size"]) > 0) {
        $photo = $_FILES["photo"]["name"];
        $photo_temp = $_FILES["photo"]["tmp_name"];
        move_uploaded_file($photo_temp, "../../img/img_agent/" . $photo);
        $requete = $db->prepare("UPDATE `agent` SET `agt_nom`=?,`agt_prenom`=?,`agt_age`=?,
            `agt_sexe`=?,`agt_telephone`=?,`agt_adresse`=?,
            `agt_quartier`= ?,`agt-mail`=?,
            `dateNaiss_agt`=?,`agt_photo`=?
            WHERE id_agent = ?");
        $params = array($nom_agt, $prenom_agt, $age, $sexe, $telephone, $adresse, $quartier, $mail, $dateNaiss, $photo, $id);
        $requete->execute($params) or die(var_dump("erreur lors de la mise à jour"));

    } else {
        $requete = $db->prepare("UPDATE `agent` SET `agt_nom`=?,`agt_prenom`=?,`agt_age`=?,
        `agt_sexe`=?,`agt_telephone`=?,`agt_adresse`=?,
        `agt_quartier`= ?,`agt-mail`=?,
        `dateNaiss_agt`=?
         WHERE id_agent = ?");
        $params = array($nom_agt, $prenom_agt, $age, $sexe, $telephone, $adresse, $quartier, $mail, $dateNaiss, $id);

        $requete->execute($params) or die(var_dump("erreur lors de la mise à jour de l'agent "));
    }
    DataBase::disconnect();
    header("location:../../pages/accueilAdmin.php");
    exit(0);

}
