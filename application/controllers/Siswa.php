<?php

class Siswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Siswa_model");
	}
	public function addform()
	{
        $this->load->view("addform");
    }
    public function add()
    {
            $addsiswa = $this->Siswa_model;
            $addsiswa->save();
            if($addsiswa)
            {
            $this->session->set_flashdata('success', 'Berhasil disimpan');
             $this->load->view("index/index");
            }
            else
            {
                $this->load->view("addform"); 
            }
    }

}