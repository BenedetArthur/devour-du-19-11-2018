<?php

class index_GestionRegion extends CI_controller
{
    public function index(){
        $this->load->library("session");
        $this->load->view("View_Index");
    }

    public function Connexion(){
        $this->load->library("session");
        $this->load->model("Model_Connexion");
        $data['lesRegions']=$this->Model_Connexion->Connexion();
        $this->load->view("View_Index", $data);
    }
}
?>