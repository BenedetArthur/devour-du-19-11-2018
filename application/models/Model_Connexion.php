<?php
class Model_Connexion extends CI_Model
{
    public function Connexion()
    {
        $sql = $this->db->query('SELECT nomUser FROM user
                                WHERE nomUser ="'.$_POST["login"].'"');
        if (count($sql->result())!=0) { 
            $this->session->isLogged = true;
            $this->session->username = $_POST["login"];
            $sql = $this->db->query('SELECT *
                                    FROM user
                                    WHERE nomUser ="'.$_POST["login"].'"');
            $this->session->nomUser = $sql->result()[0]->nomUser;
            $this->session->statutUser = $sql->result()[0]->statutUser;
            $this->session->idUser = $sql->result()[0]->idUser;
        if ($this->session->statutUser == "admin")
            $sql = $this->db->query('SELECT *
                                    from region');
        else
            $sql = $this->db->query('SELECT *
                                    from region
                                    WHERE nomRegion="Bourgogne"');
        return $sql->result();
        }
        else
            $this->session->isLogged = false;
    }
}
?>