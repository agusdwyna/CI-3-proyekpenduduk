<?php
class Satuanambildata extends CI_Model
{
    public function getJenisBarang() {
        $this->db->select('namaSatuan');
        $this->db->from('tb_satuanbarang'); 
        $query = $this->db->get();
        return $query->result();
    }
}
?>
