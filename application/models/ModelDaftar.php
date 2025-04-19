<?php 
class ModelDaftar extends CI_Model {
    public function getDataDaftar() {
        $this->db->where('statusAktivasi', 'Belum');
        $query = $this->db->get('tbdaftar');
        return $query->result();
    }

    
}
?>