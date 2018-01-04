<?php

class Model_package extends CI_Model
{
    var $tablename;
    var $tablesoal;
    var $tablepass;
    var $tablesiswa;
    public function __construct()
    {
        parent::__construct();
        $this->tablename    = "guru_tes";
        $this->tablesoal    = "soal";
        $this->tablepass    = "ujian";
        $this->tablesiswa   = "murid";
    }

    public function package_by_category($data = array())
    {
        $this->db->where($data);
        $query  = $this->db->get($this->tablename);
        return $query->result();
    }

    public function package_detail($data = array())
    {
        $this->db->where($data);
        $query  = $this->db->get($this->tablename);
        return $query->row();
    }

    public function question_by_package($data = array())
    {
        $this->db->where($data);
        $query  = $this->db->get($this->tablesoal);
        return $query->result();
    }
    public function package_latest()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(10);
        $query  = $this->db->get($this->tablename);
        return $query->result();
    }
    public function package_pass($data = array())
    {
        $this->db->where($data);
        $query  = $this->db->get($this->tablepass);
        return $query->result();
    }
    public function history_pass($data = array()){
        $this->db->select('*');
        $this->db->from($this->tablepass);
        $this->db->join($this->tablesiswa, "ujian.id_user = murid.id");
        $this->db->join("guru_tes", "ujian.id_tes = guru_tes.id");
        $this->db->where($data);
        $this->db->order_by('jml_benar','DESC');
        $query  = $this->db->get();
        return $query->result();
        
    }
}