<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    private $_table = "tb_siswa";
    public $nis;
    public $nama;
    public $umur;
    public $agama;
    public $tempatlahir;
    public $tanggallahir;
    public $alamat;
    public $kabupaten;
    public $email;
    public $notelp;
    public $asalsekolah;
    public $prestasi;
    public $nem;
    public $persentase;
 
    
    public function rules()
    {
        return [
            ['field' => 'nis',
            'label' => 'nis',
            'rules' => 'numeric'],
            
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],
           
            ['field' => 'umur',
            'label' => 'umur',
            'rules' => 'numeric'],

            ['field' => 'agama',
            'label' => 'agama',
            'rules' => 'required'],
           
            ['field' => 'tempatlahir',
            'label' => 'tempatlahir',
            'rules' => 'required'],
            
            ['field' => 'tanggallahir',
            'label' => 'tanggallahir',
            'rules' => 'required'],
            
            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],
                
            ['field' => 'kabupaten',
            'label' => 'kabupaten',
            'rules' => 'required'],
           
            
            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],
            
            ['field' => 'notelp',
            'label' => 'notelp',
            'rules' => 'numeric'],
            
            ['field' => 'asalsekolah',
            'label' => 'asalsekolah',
            'rules' => 'required'],

            ['field' => 'nem',
            'label' => 'nem',
            'rules' => 'numeric'],

        ];
    }
  public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getByNis($nis)
    {
        return $this->db->get_where($this->_table, ["nis" => $nis])->row();
    }
    public function carigrafik($where)
    {
        // $this->db->select('tanggaldaftar');
        // $this->db->from('tb_siswa');
        // $this->db->like('tanggaldaftar',$where,'after');
        // $query = $this->db->query("select count (tanggaldaftar) where tanggaldaftar =".$where);
        $this->db->like('tanggaldaftar',$where,'after');
        return $this->db->get('tb_siswa')->num_rows();
        // $query = $this->db->num_rows();
        // return $query;
    }
    public function tanggaldaftar()
    {
       $query = $this->db->query("select count(tanggaldaftar) as total , MONTH(tanggaldaftar) as bulan , YEAR(tanggaldaftar) as tahun from tb_siswa where YEAR(tanggaldaftar) = '2020'");
     
        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }
    public function save()
    {
        $post = $this->input->post();
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->umur = $post["umur"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->agama = $post["agama"];
        $this->tempatlahir = $post["tempatlahir"];
        $this->tanggallahir = $post["tanggallahir"];
        $this->alamat = $post["alamat"];
        $this->kabupaten = $post["kabupaten"];
        $this->email = $post["email"];
        $this->notelp = $post["notelp"];
        $this->asalsekolah = $post["asalsekolah"];
        $this->prestasi = $post["prestasi"];
        $this->peringkat = $post["peringkat"];
        $this->jenisprestasi = $post["jenisprestasi"];
        $this->tingkatanprestasi = $post["tingkatanprestasi"];
        $this->nem = $post["nem"];
        $peringkat = $post["peringkat"];
        $jp = $post["jenisprestasi"];
        $tp = $post["tingkatanprestasi"];
        $n = $post["nem"];
        $k = $post["kabupaten"];
        $p = $post["prestasi"];
        if($p == null)
        {
            $p = '0';
        }
        else
        {
            $p= '100';
        }
        if($peringkat == null)
        {
            $peringkat = '0';
        }
        elseif($peringkat == 'Juara 1 Umum')
        {
            $peringkat= '100';
        }
        elseif($peringkat == 'Juara 2 Umum')
        {
            $peringkat= '90';
        }
        elseif($peringkat == 'Juara 3 Umum')
        {
            $peringkat= '80';
        }
        elseif($peringkat == 'Juara 1')
        {
            $peringkat= '75';
        }
        elseif($peringkat == 'Juara 2')
        {
            $peringkat= '70';
        }
        elseif($peringkat == 'Juara 3')
        {
            $peringkat= '65';
        }
        elseif($peringkat == 'Harapan 1')
        {
            $peringkat= '60';
        }
        elseif($peringkat == 'Harapan 2')
        {
            $peringkat= '55';
        }
        elseif($peringkat == 'Harapan 3')
        {
            $peringkat= '50';
        }
        elseif($peringkat == 'Lainnya')
        {
            $peringkat= '45';
        }
        if($jp == null)
        {
            $jp = '0';
        }
        else
        {
            $jp= '100';
        }
        if($tp == null)
        {
            $tp = '0';
        }
        elseif($tp == 'Kecamatan')
        {
            $tp= '50';
        }
        else if($tp == 'Kabupaten')
        {
            $tp= '75';
        }
        elseif($tp == 'Provinsi')
        {
            $tp= '100';
        }
        elseif($tp == 'Lainnya')
        {
            $tp= '100';
        }
        if($n <= '25.0')
        {
            $n = '0';
        }
        elseif($n >='25.0' and $n <'30.0')
        {
            $n= '70';
        }
        elseif($n >='30.0' and $n <'33.0')
        {
            $n= '75';
        }
        elseif($n >='33.0' and $n <'35.0')
        {
            $n= '80';
        }
        elseif($n >='35.0' and $n <'38.0')
        {
            $n= '90';
        }
        elseif($n >'38.0')
        {
            $n= '100';
        }
        if($k != 'Kabupaten Karangasem')
        {
            $k = '0';
        }
        else
        {
            $k= '100';
        }
        $total = $n + $k + $p + $peringkat + $jp + $tp;
        $totalakhir = $total / '6';
        $this->persentase = $totalakhir;
        $this->tanggaldaftar = date("Y-m-d");
        $this->status= "Memproses";
        return $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->nis = $post["nis"];
        $this->nama = $post["nama"];
        $this->umur = $post["umur"];
        $this->jeniskelamin = $post["jeniskelamin"];
        $this->agama = $post["agama"];
        $this->tempatlahir = $post["tempatlahir"];
        $this->tanggallahir = $post["tanggallahir"];
        $this->alamat = $post["alamat"];
        $this->kabupaten = $post["kabupaten"];
        $this->email = $post["email"];
        $this->notelp = $post["notelp"];
        $this->asalsekolah = $post["asalsekolah"];
        $this->prestasi = $post["prestasi"];
        $this->peringkat = $post["peringkat"];
        $this->jenisprestasi = $post["jenisprestasi"];
        $this->tingkatanprestasi = $post["tingkatanprestasi"];
        $this->nem = $post["nem"];
        $peringkat = $post["peringkat"];
        $jp = $post["jenisprestasi"];
        $tp = $post["tingkatanprestasi"];
        $n = $post["nem"];
        $k = $post["kabupaten"];
        $p = $post["prestasi"];
        if($p == null)
        {
            $p = '0';
        }
        else
        {
            $p= '100';
        }
        if($peringkat == null)
        {
            $peringkat = '0';
        }
        elseif($peringkat == 'Juara 1 Umum')
        {
            $prestasi= '100';
        }
        elseif($peringkat == 'Juara 2 Umum')
        {
            $prestasi= '90';
        }
        elseif($peringkat == 'Juara 3 Umum')
        {
            $prestasi= '80';
        }
        elseif($peringkat == 'Juara 1')
        {
            $prestasi= '75';
        }
        elseif($peringkat == 'Juara 2')
        {
            $prestasi= '70';
        }
        elseif($peringkat == 'Juara 3')
        {
            $prestasi= '65';
        }
        elseif($peringkat == 'Harapan 1')
        {
            $prestasi= '60';
        }
        elseif($peringkat == 'Harapan 2')
        {
            $prestasi= '55';
        }
        elseif($peringkat == 'Harapan 3')
        {
            $prestasi= '50';
        }
        elseif($peringkat == 'Lainnya')
        {
            $prestasi= '45';
        }
        if($jp == null)
        {
            $jp = '0';
        }
        else
        {
            $jp= '100';
        }
        if($tp == null)
        {
            $tp = '0';
        }
        elseif($tp == 'Kecamatan')
        {
            $tp= '50';
        }
        else if($tp == 'Kabupaten')
        {
            $tp= '75';
        }
        elseif($tp == 'Provinsi')
        {
            $tp= '100';
        }
        elseif($tp == 'Lainnya')
        {
            $tp= '100';
        }
        if($n <= '25.0')
        {
            $n = '0';
        }
        elseif($n >='25.0' and $n <'30.0')
        {
            $n= '70';
        }
        elseif($n >='30.0' and $n <'33.0')
        {
            $n= '75';
        }
        elseif($n >='33.0' and $n <'35.0')
        {
            $n= '80';
        }
        elseif($n >='35.0' and $n <'38.0')
        {
            $n= '90';
        }
        elseif($n >'38.0')
        {
            $n= '100';
        }
        if($k != 'Kabupaten Karangasem')
        {
            $k = '0';
        }
        else
        {
            $k= '100';
        }
        $total = $n + $k + $p + $peringkat + $jp + $tp;
        $totalakhir = $total / '6';
        $this->persentase = $totalakhir;
        $this->tanggaldaftar = $post["tanggaldaftar"];
        $this->status= $post["status"];
        return $this->db->update($this->_table, $this, array('nis' => $post['nis']));
    }

    public function delete($nis)
    {
        return $this->db->delete($this->_table, array("nis" => $nis));
    }
}
