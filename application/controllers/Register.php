<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'string')); 
        $this->load->library('email'); 
    }

    public function index() {
        $this->load->view('register_view.php');  
    }
	
    function simpanData(){
        $nik = $this->input->post('nik');
        $namaLengkap = $this->input->post('namaLengkap');
        $alamat = $this->input->post('alamat');
        $telp = $this->input->post('telp');
        $email = $this->input->post('email');
        $jenisAkun = $this->input->post('jenisAkun');
        $password = random_string('alnum', 8); 

      
       
        $data = array(
            'nik' => $nik,
            'namaLengkap' => $namaLengkap,
            'alamat' => $alamat,
            'telp' => $telp,
            'email' => $email,
            'jenisAkun' => $jenisAkun,
            'password' => $password,
            'statusAktivasi' => 'Pending'
        );

        $this->db->insert('tbdaftar', $data);
        $this->session->set_flashdata('message', 'Data Berhasil Disimpan');
        redirect('Halaman');



    }
}
?>
