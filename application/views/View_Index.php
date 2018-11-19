<!DOCTYPE html>
<html>
    <head> <meta charset="utf-8">
        <title>Acceuil</title>
            <link rel="stylesheet" href="Bootstrap/css/bootstrap.css" />
            <link rel="stylesheet" href="JQuery/jquery-ui.css" />
        <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="JQuery/jquery-ui.js"></script>
        <script type="text/javascript" src="Bootstrap/js/bootstrap.bundle.js"></script>
        <script src="JS/MesFonctions.js"></script>    
    </head>
    <body>
    <h1>Votre Nom</h1>
    <form>
    <input name="login" type="text" class="form-control" id="login" aria-describedby="pseudo" placeholder="Entrer votre nom d'utilisateur">
    <button id="connexion" type="submit">Connexion</button>
    </form>
    <br>
    <div id="regions">
    </div>
    <script>
        $(document).ready(function() {
            $("#connexion").click(connexion);
         });
    </script>
    </body>