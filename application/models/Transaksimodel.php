<?php 

class Transaksimodel extends CI_Model {
    public function getTMasuk() {
        $this->db->select('tb_transaksi.*, tb_barang.namaBarang, tb_suplier.namaSuplier');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_barang', 'tb_transaksi.id_barang = tb_barang.id_barang');
        $this->db->join('tb_suplier', 'tb_transaksi.id_suplier = tb_suplier.id_suplier');
        $this->db->where('jenisTransaksi', 'Masuk'); 
        $this->db->order_by('id_transaksi', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getTkeluar() {
        $this->db->select('tb_transaksi.*, tb_barang.namaBarang');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_barang', 'tb_transaksi.id_barang = tb_barang.id_barang');
        $this->db->where('jenisTransaksi !=', 'Masuk'); 
        $this->db->order_by('id_transaksi', 'desc');    
        $query = $this->db->get();
        return $query->result();
    }
}

?>
