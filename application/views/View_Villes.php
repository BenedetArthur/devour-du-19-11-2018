<?php

foreach($lesVilles as $uneVille)
{  
    echo "<input type='checkbox' name='villes[]' value='".$uneVille->idVille."'>".$uneVille->nomVille ." - ".$uneVille->scoreVille."</input><br>";
}

    echo "<input type='button' value='Ajouter +5 à chaque ville' onclick='AjouterNote'></input>"
?>