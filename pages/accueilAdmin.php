<?php

require "../Isconnected.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="../css/agent/index.css">
</head>

<body class="container-fluid">
    <?php

require "./menu.php";

?>



    <div class="row">
        <table class="table table-hover">
            <thead>
                <th>CODE</th>
                <th>PHOTO</th>
                <th>INFORMATIONS PERSONNELLES</th>
                <th>DATE DE CREATION</th>
                <th>HEURE DE CREATION</th>
                <th>ACTIONS</th>

            </thead>
            <tbody>
                <?php
require "../bdd/bdd_connection.php";
$db = DataBase::connect();
$requete = $db->prepare("SELECT * FROM agent");
$requete->execute();
while ($agent = $requete->fetch()) {

    ?>
                <tr>
                    <td><?php echo $agent["id_agent"] ?></td>
                    <td><img src="../img/img_agent/<?php echo $agent["agt_photo"] ?> " alt="agent" width="200px">
                    </td>
                    <td>
                        <div class="row">
                            <div class="col-md-6">
                                <p> Nom : <?php echo $agent["agt_nom"] ?></p>
                                <p>Prénom : <?php echo $agent["agt_prenom"] ?></p>
                                <p>Âge : <?php echo $agent["agt_age"] ?></p>
                                <p>Sexe : <?php echo $agent["agt_sexe"] ?></p>
                                <p>Adresse : <?php echo $agent["agt_adresse"] ?></p>
                            </div>
                            <div class="col-md-6">

                                <p>Quartier : <?php echo $agent["agt_quartier"] ?></p>
                                <p>Mail : <?php echo $agent["agt-mail"] ?></p>
                                <p>Date de naissance : <?php echo $agent["dateNaiss_agt"] ?></p>
                            </div>
                        </div>


                    </td>
                    <td><?php echo $agent["date_agt"] ?></td>
                    <td><?php echo $agent["heure"] ?></td>

                    <td>

                        <a href="./GeneretePDF.php?id=<?php echo $agent["id_agent"] ?>" class="btn btn-success"
                            target="_blank"> <span class="glyphicon glyphicon-list-alt"> Génerer un rapport</a>
                        <hr>

                        <a href="./UpdateAgent.php?id=<?php echo $agent["id_agent"] ?>" class="btn btn-primary"> <span
                                class="glyphicon glyphicon-edit"> Modifier</a>
                        <hr>
                        <a href="./DeleteAgent.php?id=<?php echo $agent["id_agent"] ?>" class="btn btn-danger"><span
                                class="glyphicon glyphicon-trash"></span> Supprimer</a>

                    </td>
                </tr>
            </tbody>
            <?php
}
?>
    </div>

    </table>


</body>

</html>