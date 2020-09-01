<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    private $_table = "tb_admin";
    public $id_admin;
    public $username;
    public $password;
    public $nama;
    
    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'username',
            'rules' => 'numeric'],
            
            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required']
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_admin)
    {
        return $this->db->get_where($this->_table, ["id_admin" => $id_admin])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_admin = uniqid();
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->nama = $post["nama"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_admin = $post["id_admin"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->nama = $post["nama"];
        return $this->db->update($this->_table, $this, array('id_admin' => $post['id_admin']));
    }

    public function delete($id_admin)
    {
        return $this->db->delete($this->_table, array("id_admin" => $id_admin));
    }
    
    public function cek_login($_table,$where){		
        return $this->db->get_where($_table,$where);
    }	
    

}