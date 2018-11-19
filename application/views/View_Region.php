<?php 
                foreach ($lesRegions as $uneRegion)
                { 
                    echo "<input name='radioRegion' onclick=AfficherVilles(this.value) type='radio' value='". $uneRegion->idRegion ."'>".$uneRegion->nomRegion." - ".$uneRegion->scoreRegion."<br>";
                }
?>