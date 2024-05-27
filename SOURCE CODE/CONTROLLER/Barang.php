<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Memuat model BarangModel
        $this->load->model('BarangModel');
    }

    public function index()
    {
        $data['title'] = 'Data Barang';
        $data['active_menu'] = 'data_barang';  // Menambahkan active_menu untuk menghindari undefined variable
        $data['barang'] = []; // Ganti dengan data barang yang sebenarnya
        $data['content'] = $this->load->view('data_barang', $data, true);
        // Menggunakan model BarangModel untuk mengambil data barang
        $data['barang'] = $this->BarangModel->get_all();
        
        // Menampilkan view 'barang' dengan data barang yang telah diambil
        $this->load->view('BarangView', $data);
    }
}
