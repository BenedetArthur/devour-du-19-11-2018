<?php 

class Model_Note extends CI_Model
{
    function UpdateNote($tabVilles,$tabVote,$idRegion){
        $tabVilles = explode(",",$tabAgents)
        $tabVote = explode(",",$tabPresences)

        for($i=0 ; $i < count($tabVilles); $i++)
        (
        $sql = $this->db->query("UPDATE ville set scoreVille=scoreVille+ 5 WHERE idVille='".$tabVilles[$i]."'AND numRegion= '".$idRegion."'")
        )
    }
}

?>