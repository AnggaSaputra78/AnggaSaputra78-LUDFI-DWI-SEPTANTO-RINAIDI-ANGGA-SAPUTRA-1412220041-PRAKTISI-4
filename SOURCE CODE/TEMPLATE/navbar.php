<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- Link CSS dari Bootstrap -->
    <link rel="stylesheet" href="https://bootswatch.com/5/vapor/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if($active_menu == 'home') echo 'active'; ?>" href="<?php echo base_url() ?>home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($active_menu == 'barang') echo 'active'; ?>" href="<?php echo base_url() ?>barang">Data Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($active_menu == 'tentang') echo 'active'; ?>" href="<?php echo base_url() ?>tentang">Tentang</a>
                    </li>
                </ul>
                <!-- Search Form -->
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Your content here -->

    <!-- Link JavaScript dari Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
