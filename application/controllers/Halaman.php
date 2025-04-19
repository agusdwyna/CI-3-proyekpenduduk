<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

    public function index() {
        $this->load->view('login_view.php');  
    }

    function proseslogin() {
        $nik = $this->input->post('nik');
        $password = $this->input->post('password');

        $sql = "SELECT * FROM tbLogin WHERE nik = ?";
        $query = $this->db->query($sql, array($nik));

        if ($query->num_rows() > 0) {
            $data = $query->row();
            
 
            if ($data->password == $password) { // Jika password tidak di-hash
       

                $array = array(
                    'kodeLogin'  => $data->kodeLogin,
                    'password' =>$data->password,
                    'nik' => $data->nik,
                    'namaLengkap' => $data->namaLengkap,
                    'level' => $data->level
                   
                    
                );  
                $this->session->set_userdata($array);  
                redirect('dashboard','refresh');
            } else {
                $this->session->set_flashdata('pesanLogin', 'NIK atau Password Salah!');
                redirect('halaman','refresh'); 
            }   
        } else {
            $this->session->set_flashdata('pesanLogin', 'NIK atau Password Salah!');
            redirect('halaman','refresh');    
        }
    }
}
?>
