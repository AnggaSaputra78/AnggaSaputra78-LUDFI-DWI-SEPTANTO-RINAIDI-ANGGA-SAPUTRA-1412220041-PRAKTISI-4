<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_model'); // Memuat model Mahasiswa_model
        $this->load->helper('url'); // Memuat helper URL
    }

    public function index() {
        $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa(); // Mendapatkan data
        $this->load->view('mahasiswa_view', $data); // Menampilkan data mahasiswa ke view
    }

    public function search() {
        $keyword = $this->input->post('keyword'); // Ambil kata kunci pencarian dari form
        $data['mahasiswa'] = $this->Mahasiswa_model->search_mahasiswa($keyword); // Cari
        $this->load->view('mahasiswa_view', $data); // Menampilkan hasil pencarian ke view
    }
    public function input_data()
{
    $this->load->view('input_data');
}
    public function tampilkan_data() {
        $this->form_validation->set_rules('nama','Nama','trim|required|regex_match[/^[a-zA-Z\s]+$/]',array('required' => 'Nama harus diisi.','regex_match' => 'Nama harus berupa huruf dan tidak boleh mengandung angka.'));
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric', array('required' => 'NPM harus diisi.', 'numeric' => 'NPM harus berupa angka.'));
        $this->form_validation->set_rules('angkatan', 'Angkatan', 'required|exact_length[4]|numeric|callback_check_angkatan', array('required' => 'Angkatan harus diisi.','exact_length' => 'Angkatan harus berformat tahun (4 digit).','numeric' => 'Angkatan harus berupa angka.','check_angkatan' => 'Angkatan harus berada dalam rentang 2000 sampai 2023.'));
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|exact_length[1]|alpha', array('required' => 'Kelas harus diisi.', 'exact_length' => 'Kelas harus berupa 1 huruf.', 'alpha' => 'Kelas harus berupa huruf.','required|exact_length[1]|numeric', array('required' => 'Kelas harus diisi.', 'numeric' => 'Kelas tidak bisa berupa angka.')));         
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[20]', array('required' => 'Alamat harus diisi.', 'min_length' => 'Alamat harus memiliki minimal 20 karakter.'));
        $this->form_validation->set_rules('mata_kuliah', 'Mata Kuliah Favorit', 'required|callback_check_mata_kuliah', array('required' => 'Mata Kuliah Favorit harus diisi.','check_mata_kuliah' => 'Mata Kuliah Favorit tidak boleh berupa angka.'));
    // Jalankan validasi
    if ($this->form_validation->run() == false) {
        // Jika validasi gagal, tampilkan kembali form input data
        $this->load->view('input_data');
    } else {
        // Ambil data dari form jika validasi berhasil
        $data['nama'] = $this->input->post('nama');
        $data['npm'] = $this->input->post('npm');
        $data['angkatan'] = $this->input->post('angkatan');
        $data['kelas'] = $this->input->post('kelas');
        $data['alamat'] = $this->input->post('alamat');
        $data['mata_kuliah'] = $this->input->post('mata_kuliah');
        // Tampilkan data di halaman lain
        $this->load->view('hasil_data', $data);
    }
  }
    public function check_angkatan($angkatan) {
        // Mengambil tahun dari angkatan (4 digit pertama)
        $year = substr($angkatan, 0, 4);
        // Memeriksa apakah tahun berada dalam rentang yang diinginkan
        if ($year < 2000 || $year > 2023) {
            $this->form_validation->set_message('check_angkatan', 'Angkatan harus berada dalam rentang 2000 sampai 2023.');
            return false;
        } else {
            return true;
        }
    }
    public function check_mata_kuliah($mata_kuliah) {
    // Cek apakah mata_kuliah tidak berupa angka
    if (is_numeric($mata_kuliah)) {
        // Jika berupa angka, atur pesan kesalahan
        $this->form_validation->set_message('check_mata_kuliah', 'Mata Kuliah Favorit tidak boleh berupa angka.');
        return false;
    } else {
        return true;
    }
}
public function data_mahasiswa()
{
$data['title'] = 'Data Mahasiwa';
$data['active_menu'] = 'data_mahasiswa';
$data['mahasiswa'] = $this->Mahasiswa_model->get_all_mahasiswa();
$data['content'] = $this->load->view('mahasiswa/list_mahasiswa', $data, true);
$this->load->view('template/template', $data);
}
public function search_mahasiswa()
{
$keyword = $this->input->post('keyword');
$data['title'] = 'Data Mahasiwa';
$data['active_menu'] = 'data_mahasiswa';
$data['mahasiswa'] = $this->Mahasiswa_model->search_data_mahasiswa($keyword);
$data['keyword'] = $keyword;
$data['content'] = $this->load->view('mahasiswa/list_mahasiswa', $data, true);
$this->load->view('template/template', $data);
}
}