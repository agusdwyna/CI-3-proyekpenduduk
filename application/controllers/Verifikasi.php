<?php

class Verifikasi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelDaftar');
        $this->load->library('email');
    }

    public function index()
    {
        // Model tbdaftar
        $datalist = $this->ModelDaftar->getDataDaftar();
        $data['konten'] = $this->load->view('verifikasi_view', '', TRUE);
        $data['tabel'] = $this->load->view('verifikasi_tabel', ['datalist' => $datalist], TRUE);
        $this->load->view('admin.php', $data);
    }

    public function terimaAktivasi() {
        $kodeDaftar = $this->input->post('kodeDaftar'); 
        $this->db->where('kodeDaftar', $kodeDaftar);
        $query = $this->db->get('tbdaftar');  
    
        if ($query->num_rows() > 0) {
            $dataDaftar = $query->row_array();
    
            $this->db->where('kodeDaftar', $kodeDaftar);
            $this->db->update('tbdaftar', ['statusAktivasi' => 'Aktif']);
    
       
            $cekLogin = $this->db->get_where('tblogin', ['kodeDaftar' => $kodeDaftar]);
            if ($cekLogin->num_rows() == 0) {
         
                $dataLogin = [
                    'kodeDaftar' => $kodeDaftar,
                    'nik' => $dataDaftar['nik'],
                    'namaLengkap' => $dataDaftar['namaLengkap'],
                    'password' => $dataDaftar['password'],
                    'level' => $dataDaftar['jenisAkun']
                ];
                $this->db->insert('tblogin', $dataLogin);
    
        
                $this->email->from('gusgazz01@gmail.com', 'Admin Sistem');
                $this->email->to($dataDaftar['email']);
    
                $this->email->subject('Akun Anda Telah Diaktivasi');
                $this->email->message(
                    'Halo <b>' . $dataDaftar['namaLengkap'] . "</b>,<br><br>" .
                    "Akun Anda telah berhasil diaktivasi.<br><br>" .
                    "<b>Username:</b> " . $dataDaftar['nik'] . "<br>" .
                    "<b>Password:</b> " . $dataDaftar['password'] . "<br><br>" .
                    "Silakan login ke sistem menggunakan akun di atas.<br><br>" .
                    "Terima kasih."
                );
    
                // Kirim email
                if ($this->email->send()) {
                    $this->session->set_flashdata('pesanVerifikasi', 'Status aktivasi berhasil diubah dan akun login telah dibuat. Email telah dikirim.');
                } else {
                    // Debugging jika gagal
                    $this->session->set_flashdata('error', 'Email gagal dikirim. Silakan periksa konfigurasi.');
                    echo $this->email->print_debugger(); // Tampilkan debug info
                    exit;
                }
            } else {
                $this->session->set_flashdata('pesanVerifikasi', 'Status aktivasi berhasil diubah. Akun login sudah ada.');
            }
    
            redirect('verifikasi');
        } else {
            $this->session->set_flashdata('error', 'Data tidak ditemukan.');
            redirect('verifikasi');
        }
    }
    
    
}
?>
