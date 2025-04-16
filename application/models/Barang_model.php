<?php

class Barang_model extends CI_Model {
    public function getStokBarang($id_barang) {
        $this->db->select('jumlah');
        $this->db->from('tb_barang'); 
        $this->db->where('id_barang', $id_barang);
        $query = $this->db->get();

      
        if ($query->num_rows() > 0) {
            return $query->row()->jumlah; 
        } else {
            return 0; 
        }
    }
}

?>
