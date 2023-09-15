<?php

require "../Isconnected.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">
    <link rel="stylesheet" href="../css/agent/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un agent</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <form method="post" action="../traitement/agent/AddAgent.php" enctype="multipart/form-data">
                    <h2 class="text-info">Ajouter un agent</h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Nom
                            Agent</label>

                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username"
                            name="nom" required>


                    </div>
                    <div class="form-group">
                        <label for="prenom"> Prénom Agent</label>
                        <input type="text" class="form-control" id="prenom" placeholder="Password" name="prenom"
                            required>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dateNaiss"> Date de Naissance</label>
                                <input type="date" class="form-control" id="dateNaiss" placeholder="XXXX/XX/XX"
                                    name="dateNaiss" required>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <div class="form-group">
                                <label for="age"> Age</label>
                                <input type="number" class="form-control" id="age" placeholder="Exemple:19" name="age"
                                    disabled value="">
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sexe">Sexe</label>
                                <select class="form-control" id="sexe" name="sexe" required>
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
                                    placeholder="Exemple:+242 0X XXX XX XX" name="tel" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="adresse"> Adresse</label>
                                <input type="text" class="form-control" id="adresse"
                                    placeholder="Exemple: Alkhar Derrière la station totale" name="adresse" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="quartier"> Quartier</label>
                                <input type="text" class="form-control" id="quarier" placeholder="Exemple: Tchiali"
                                    name="quartier" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mail"> Email:</label>
                                <input type="email" class="form-control" id="mail" placeholder="Exemple:user@gmail.com"
                                    name="mail" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Password"> Mot de passe</label>
                                <input type="password" class="form-control" id="Password" placeholder="Password"
                                    name="pass" required>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="photo"> Photo : </label>
                        <input type="file" class="form-control" id="photo" placeholder="Veuillez choisir une photo"
                            name="photo" required>
                    </div>



                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </form>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>

</body>

</html>
