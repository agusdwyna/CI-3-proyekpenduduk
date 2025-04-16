<?php
    class Barangdata extends CI_Model{
        public function getJenisBarang() {
            $query = $this->db->select('namaJenis')->from('tb_jenisbarang')->get();
            return $query->result();
        }
        public function getSatuanBarang() {
            $query = $this->db->select('namaSatuan')->from('tb_satuanbarang')->get();
            return $query->result();
        }
        function getJumlahBarang() {
            return $this->db->count_all('tb_barang');
        }
        function getBarang() {
            $sql = "
                SELECT 
                    tb_barang.id_barang,
                    tb_barang.namaBarang,
                    tb_barang.jumlah,
                    tb_jenisbarang.namaJenis,
                    tb_barang.id_jenisbarang,
                    tb_barang.id_satuan,
                    tb_satuanbarang.namaSatuan, 
                    tb_barang.harga,    
                    tb_barang.tanggalExpired
                FROM
                    tb_barang
                INNER JOIN
                    tb_jenisbarang ON tb_barang.id_jenisbarang = tb_jenisbarang.id_jenisbarang
                INNER JOIN
                    tb_satuanbarang ON tb_barang.id_satuan = tb_satuanbarang.id_satuan
                ORDER BY id_barang
            ";
            return $this->db->query($sql)->result();
        }
        
        
        
    }










?>