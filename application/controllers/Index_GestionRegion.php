<?php

class indexAcceuilArthur extends CI_controller
{
    public function index(){
        $this->load->library("session");
        $this->load->view("View_Index");
    }
}
?>