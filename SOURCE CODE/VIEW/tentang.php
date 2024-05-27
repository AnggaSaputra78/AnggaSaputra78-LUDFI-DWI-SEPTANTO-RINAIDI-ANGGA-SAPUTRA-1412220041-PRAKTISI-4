<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tentang</title>
    <style>
        /* Custom CSS */
        .profile-picture {
            max-width: 200px;
            height: auto;
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
<link rel="stylesheet" href="https://bootswatch.com/5/vapor/bootstrap.min.css">
    <div class="d-flex-container">
        <div class="container mt-5 content">
            <div class="row">
                <div class="col-md-8">
                    <h1>NAMA : Ludfi Dwi Septanto Rinaidi Angga Saputra</h1>
                    <p>UMUR : 20 tahun</p>
                    <p>NPM: 1412220041</p>
                    <p>Alamat : DSN.bogor DS.Tlogowaru KEC.Merakurak KAB.Tuban</p>
                    <p>PROGRAM STUDI: Teknik Informatika</p>
                    <!-- About Me -->
                    <h2>TENTANG SAYA</h2>
                    <p>Saya adalah seorang mahasiswa semester 4 di jurusan Teknik Informatika. Saya memiliki minat dalam pengembangan web dan pemrograman game.</p>
                </div>
            </div>
        </div>
        <?php $this->load->view('template/footer'); ?> <!-- Memuat footer -->
    </div>
</body>
</html>
