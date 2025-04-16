<?php
class Carilaporan extends CI_Model {
   //Fungsi mengambil jumlah bari berdasarkan filter tangal
    public function getLaporanJumlah($tanggalAwal = '', $tanggalAkhir = '') {
        $this->db->select('COUNT(*) as total');  
        $this->db->from('tb_transaksi');
        $this->db->join('tb_barang', 'tb_transaksi.id_barang = tb_barang.id_barang');
        $this->db->join('tb_suplier', 'tb_transaksi.id_suplier = tb_suplier.id_suplier', 'left');
        
        
      
        if (!empty($tanggalAwal)) {
            $this->db->where('tb_transaksi.tanggalTransaksi >=', $tanggalAwal);
        }
        if (!empty($tanggalAkhir)) {
            $this->db->where('tb_transaksi.tanggalTransaksi <=', $tanggalAkhir);
        }
        
        $query = $this->db->get();
        return $query->row() ? $query->row()->total : 0;  // Mengembalikan jumlah baris (total)
    }
    
    
    // Fungsi untuk mengambil data untuk tampil pagination
    public function getLaporan($start, $limit, $tanggalAwal = '', $tanggalAkhir = '') {
        $this->db->select('tb_transaksi.*, tb_barang.namaBarang, tb_suplier.namaSuplier');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_barang', 'tb_transaksi.id_barang = tb_barang.id_barang');
        $this->db->join('tb_suplier', 'tb_transaksi.id_suplier = tb_suplier.id_suplier', 'left');

        
        // Tambahkan kondisi untuk filter tanggal
        if (!empty($tanggalAwal)) {
            $this->db->where('tb_transaksi.tanggalTransaksi >=', $tanggalAwal);
        }
        if (!empty($tanggalAkhir)) {
            $this->db->where('tb_transaksi.tanggalTransaksi <=', $tanggalAkhir);
        }
        
        $this->db->limit($limit, $start);  
        $query = $this->db->get();
        return $query->result();  // Mengembalikan data laporan
    }


}
?>