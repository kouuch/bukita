<?php
class About extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/login');
            exit;
        }
    }


    public function index()
    {
        $data['title'] = 'Halaman Tentang Saya';
        $data['nama'] = 'Rifky';
        $data['alamat'] = 'Jl. Permata Hijau';
        $data['no_hp'] = '082397992959';

        $this->view('templates/head', $data);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('kategori/index', $data);
        $this->view('templates/footer');
    }
}
