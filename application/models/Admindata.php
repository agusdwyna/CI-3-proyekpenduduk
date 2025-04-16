<?php 

    class Admindata extends CI_Model{
        public function getAdmin(){
            $query = $this->db->get('tb_login');
            return $query->result();
        }
    }


?>