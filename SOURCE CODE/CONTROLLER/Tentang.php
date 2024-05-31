<?php
// Tentang.php

class Tentang extends CI_Controller {
    public function index() {
        $data['active_menu'] = 'tentang'; // Define the $data variable
        $this->load->view('template/navbar', $data); // Load navbar view and pass $data
        $this->load->view('tentang'); // Load tentang view without passing $data
    }
}
?>
