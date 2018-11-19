<?php

class Model_Villes extends CI_Model
{
    public function getVilles($idVilles)
    {
        $sql = $this->db->select('*')->from('villes as v')->join('Region as r','r.idVille=v.idVille','left')->where('r.idRegion',''.$idVilles.'');
        $sql = $this->db->get();
        $data = array();
        foreach ($sql->result() as $row)
        {
            $data[] = $row;
        }
        return $data;
    }
}
?>