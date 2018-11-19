<?php 

class Model_Note extends CI_Model
{
    function UpdateNote($tabVilles,$tabVote,$idRegion){
        $tabVilles = explode(",",$tabAgents)
        $tabVote = explode(",",$tabPresences)

        for($i=0 ; $i < count($tabVilles); $i++)
        (
            $sql = $this->db->query("UPDATE ville 
                                    set scoreVille=scoreVille+ 5 
                                    WHERE idVille='".$tabVilles[$i]."'
                                    AND numRegion= '".$idRegion."'");
        )
        for($j=count($tabVilles); $j=count($tabVilles); $j++)
        (
            $sql = $this->db->query("UPDATE region 
                                    set scoreRegion=scoreRegion + count($tabVilles)*5
                                    WHERE idRegion='".$idRegion."'");
        )
    }
}

?>