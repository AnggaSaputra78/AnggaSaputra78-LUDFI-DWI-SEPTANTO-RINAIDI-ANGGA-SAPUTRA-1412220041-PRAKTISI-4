<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/vapor/bootstrap.min.css">
    <style>
        .h1{
            text-align: center;
        }
        /* Custom CSS for footer */
        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
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
        <?php $this->load->view('template/navbar', array('active_menu' => 'barang')); ?> <!-- Memuat navbar -->

        <div class="container mt-5 content">
            <h1 class="h1">Data Barang</h1>
            <table class="table table-hover">
                <thead>
                        <tr class="table-dark">
                        <th>ID Barang</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Stok Barang</th>
                        <th>Supplier Barang</th>
                        <th>Tanggal Masuk</th>
                        </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang as $item): ?>
                        <tr>
                            <td class="table-primary"><?= $item['id_barang'] ?></td>
                            <td><?= $item['kode_barang'] ?></td>
                            <td class="table-primary"><?= $item['nama_barang'] ?></td>
                            <td><?= $item['kategori_barang'] ?></td>
                            <td class="table-primary"><?= $item['deskripsi_barang'] ?></td>
                            <td><?= $item['harga_beli'] ?></td>
                            <td class="table-primary"><?= $item['harga_jual'] ?></td>
                            <td><?= $item['stok_barang'] ?></td>
                            <td class="table-primary"><?= $item['supplier_barang'] ?></td>
                            <td><?= $item['tanggal_masuk'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?php $this->load->view('template/footer'); ?> <!-- Memuat footer -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url('template/js/bootstrap.bundle.js'); ?>"></script>
</body>
</html>
