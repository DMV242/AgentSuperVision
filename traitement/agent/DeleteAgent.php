<?php

require("../../bdd/bdd_connection.php");

if(isset($_GET["id"]) && !empty($_GET["id"])){
    $id = $_GET["id"];
    $db = DataBase::connect();
    $requete = $db->prepare("DELETE FROM agent where id_agent = ?");
    $requete->execute(array($id));
    header("Location:../../pages/accueilAdmin.php");
}






?>