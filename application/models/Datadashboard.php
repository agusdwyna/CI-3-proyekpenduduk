<?php
    class Datadashboard extends CI_Model {
        public function jumlahsuplier() {
            return $this->db->count_all('tb_suplier');
        }

        public function jumlahbarang() {
            return $this->db->count_all('tb_barang');
        }
        public function jumlahtransaksi(){
            return $this->db->count_all('tb_transaksi');
        }
        
    }



?>