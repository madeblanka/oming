<?php

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Siswa_model");
	}
	public function index()
	{
        $this->load->view("index/index");
    }
    public function login()
    {
        $this->load->view('login');
    }
 
    public function datasiswa()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $this->load->view("dashboard", $data);
    }
    public function dashboard()
    {
        $models = array(
            'Admin_model' => 'admin',
           );
           // Load Multiple Models
           foreach ($models as $file => $object_name)
           {
            $this->load->model($file, $object_name);
           }
        $data["admin"] = $this->admin->getAll();
        $this->load->view("tabeladmin", $data);
    }
    public function edit($nis = null)
    {
        if (!isset($nis)) redirect('dashboard');
            $siswa = $this->Siswa_model;
            $data["siswa"] = $siswa->getByNis($nis);
        if (!$data["siswa"]) show_404();
        
        $this->load->view("editform", $data);
    }
    
    public function simpanupdate(){
        $siswa = $this->Siswa_model;
        $siswa->update();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect(site_url('admin/dashboard'));
    }
    
    public function delete($nis=null)
    {
        if (!isset($nis)) show_404();
        
        if ($this->Siswa_model->delete($nis)) {
            redirect(site_url('admin/dashboard'));
        }
    }
    public function grafik()
    {
        $this->load->view("grafik");
    }
    public function pilihprint()
    {
        $data["siswa"] = $this->Siswa_model->getAll();
        $this->load->view("pilihprint", $data);
    }
    public function print()
    {
        $data['siswa'] = $this->Siswa_model->getByPrint();
        $this->load->view('print',$data);
    }
}