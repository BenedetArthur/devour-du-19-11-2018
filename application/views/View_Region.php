<?php 
                foreach ($lesRegions as $uneRegion)
                { 
                    echo "<input name='radioRegion' onclick=AfficherVilles('".$uneRegion->idRegion."') type='radio' value='". $uneRegion->idRegion ."'>".$uneRegion->nomRegion." - ".$uneRegion->scoreRegion."<br>";
                }
?>