<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

    public function index() {
        $this->load->view('login_view.php');  
    }

    function proseslogin() {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');

        // Query untuk cek data nik di tabel tbLogin
        $sql = "SELECT * FROM tbLogin WHERE nik = ?";
        $query = $this->db->query($sql, array($nik));

        if ($query->num_rows() > 0) {
            $data = $query->row();
            
            // Pastikan password di database cocok dengan input pengguna
            if ($data->password == $password) { // Jika password tidak di-hash
       

                $array = array(
                    'idLogin'  => $data->idLogin,
                    'nik' => $data->nik,
                   
                    
                );  
                $this->session->set_userdata($array);  
                redirect('dashboard','refresh'); // Halaman admin
            } else {
                $this->session->set_flashdata('pesan', 'Nik atau Password Salah!');
                redirect('halaman','refresh'); // Kembali ke login
            }   
        } else {
            $this->session->set_flashdata('pesan', 'nik tidak ditemukan!');
            redirect('halaman','refresh');    
        }
    }
}
?>
