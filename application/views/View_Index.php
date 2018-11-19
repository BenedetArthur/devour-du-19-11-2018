<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <title>Acceuil</title>
            <link rel="stylesheet" href="JQuery/jquery-ui.css" />
        <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="JQuery/jquery-ui.js"></script>
        <script src="JS/MesFonctions.js"></script>    
    </head>
    <body>
    <h1>Votre Nom</h1>
    <input name="login" type="text" class="form-control" id="login" placeholder="Entrer votre nom d'utilisateur">
    <button id="connexion">Connexion</button>
    <br>
    <div id="regions">
    </div>
    <br>
    <br>
    <div id="villes">
    </div>
    <script>
        $(document).ready(function() {
            $("#connexion").click(function()
            {
            console.log("A QUE COUCOU"); 
            connexionRegion()
            }
            )
         });
    </script>
    </body>