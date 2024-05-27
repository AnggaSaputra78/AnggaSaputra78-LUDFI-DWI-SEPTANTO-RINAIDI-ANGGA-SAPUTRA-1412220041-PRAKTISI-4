<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/vapor/bootstrap.min.css">
    <style>
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        body, html {
            height: 100%;
        }
        .d-flex-container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="d-flex-container">
        <?php $this->load->view('template/navbar', array('active_menu' => 'home')); ?> <!-- Memuat navbar -->

        <div class="container mt-5 content">
            <div class="jumbotron">
                <h1 class="display-4">Selamat Datang di Website Saya</h1>
                <p class="lead">Halo! Saya Ludfi Dwi Septanto Rinaidi Angga Saputra, seorang mahasiswa yang baru memulai perjalanan dalam dunia pemrograman web.</p>
                <hr class="my-4">
                <p>Website ini saya buat sebagai bagian dari latihan dan praktik untuk memperdalam pemahaman saya tentang pengembangan web. Saya berharap dapat terus belajar dan mengembangkan keterampilan saya di bidang ini.</p>
            </div>
        </div>

        <?php $this->load->view('template/footer'); ?> <!-- Memuat footer -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url('template/js/bootstrap.bundle.js'); ?>"></script>
</body>
</html>
