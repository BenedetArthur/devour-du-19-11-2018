<?php

class Model_Villes extends CI_Model
{
    public function getVilles($idRegion)
    {
        $sql = $this->db->query("SELECT ville.nomVille, ville.scoreVille, ville.idVille 
                                 FROM ville, region
                                 WHERE region.idRegion = ville.numRegion
                                 AND ville.numRegion = '".$idRegion."'");
        return $sql->result();
    }
}
?>