<?php 
class ChartModel extends CI_Model {
    public function getData() {
        $this->db->select('tb_barang.namaBarang as label, COUNT(*) AS value');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_barang', 'tb_transaksi.id_barang = tb_barang.id_barang');
        $this->db->group_by('tb_barang.namaBarang');
        $query = $this->db->get();

        // Convert result to an array of objects with 'label' and 'value'
        return $query->result();
    }
}




?>