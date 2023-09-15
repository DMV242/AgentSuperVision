<!DOCTYPE html>
<html lang="en">

<?php


    require("../Isconnected.php");
    require("../bdd/bdd_connection.php");

    if(isset($_GET["id"]) && !empty($_GET["id"])){
        $id = $_GET["id"];
        $db = DataBase::connect();
        $requete = $db->prepare("SELECT * FROM agent where id_agent = ?");
        $requete->execute(array($id));
        $agent = $requete->fetch();
        if($requete->rowCount() == 0){
            header('Location:./accueilAdmin.php');
            exit(0);
        }
    }else{
        header('Location:./accueilAdmin.php');
        exit(0);
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="../css/agent/index.css">
</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">


                <form method="post" action="../traitement/agent/UpdateAgent.php<?php echo"?id=".$_GET["id"]?>"
                    enctype="multipart/form-data">
                    <h2 class="text-info">Modifier l'agent <?php echo $agent["agt_nom"] ." ". $agent["agt_prenom"]?>
                    </h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Nom
                            Agent</label>

                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username"
                            name="nom" value="<?php echo $agent["agt_nom"] ?>" required>


                    </div>
                    <div class="form-group">
                        <label for="prenom"> Prénom Agent</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Password" name="prenom"
                            value="<?php echo $agent["agt_prenom"] ?>" required>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dateNaiss"> Date de Naissance</label>
                                <input type="date" class="form-control" id="dateNaiss" placeholder="XXXX/XX/XX"
                                    name="dateNaiss" value="<?php echo $agent["dateNaiss_agt"] ?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="age"> Age</label>
                                <input type="number" class="form-control" id="age" placeholder="Exemple:19" name="age"
                                    value="<?php echo $agent["agt_age"]?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="sexe">Sexe</label>
                                <select class="form-control" id="sexe" name="sexe"
                                    value="<?php echo $agent["agt_sexe"] ?>" required>
                                    <option value="masculin">masculin</option>
                                    <option value="féminin">féminin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="InputPassword"> Téléphone Agent</label>
                                <input type="tel" class="form-control" id="InputPassword"
                                    placeholder="Exemple:+242 0X XXX XX XX" name="tel"
                                    value="<?php echo $agent["agt_telephone"] ?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="adresse"> Adresse</label>
                                <input type="text" class="form-control" id="adresse"
                                    placeholder="Exemple: Alkhar Derrière la station totale" name="adresse"
                                    value="<?php echo $agent["agt_adresse"] ?>" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quartier"> Quartier</label>
                                <input type="text" class="form-control" id="quarier" placeholder="Exemple: Tchiali"
                                    name="quartier" value="<?php echo $agent["agt_quartier"] ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mail"> Email:</label>
                                <input type="email" class="form-control" id="mail" placeholder="Exemple:user@gmail.com"
                                    name="mail" value="<?php echo $agent["agt-mail"] ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Image"> Image:</label>
                                <input type="text" class="form-control" id="Image" placeholder="Exemple:user@gmail.com"
                                    name="image" value="<?php echo $agent["agt_photo"] ?>" disabled>

                            </div>
                        </div>


                    </div>
                    <div class="form-group">
                        <label for="photo"> Photo : </label>
                        <input type="file" class="form-control" id="photo" name="photo">
                    </div>



                    <button type="submit" class="btn btn-success">Confirmer</button>
                    <a href="./accueilAdmin.php" class="btn btn-primary">Annuler</a>
                </form>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>

</body>



</html>