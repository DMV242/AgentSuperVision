<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap-theme.css">
    <link rel="stylesheet" href="./css/admin/index.css">


</head>

<body>

    <?php
 
        if(
         isset($_GET["message"] ) &&
         isset($_GET["error"]) &&
         !empty($_GET["message"])&&
         $_GET["error"] == true
         )
        echo "<h1 class='error-message'>" . $_GET["message"] . "</h1>";
      
    
        ?>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <form method="post" action="./traitement/admin/connexionAdmin.php">
                    <h2 class="text-info">Bienvenue sur le Système de Gestion des agents</h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> <span class="glyphicon glyphicon-user"></span> Nom
                            utilisateur</label>

                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username"
                            name="name">


                    </div>
                    <div class="form-group">
                        <label for="InputPassword"> <span class="glyphicon glyphicon-lock"></span> Mot De passe</label>
                        <input type="password" class="form-control" id="InputPassword" placeholder="Password"
                            name="pass">
                    </div>

                    <button type="submit" class="btn btn-success">Se connecter</button>
                </form>
            </div>
            <div class="col-md-2"></div>

        </div>
    </div>


</body>

</html>