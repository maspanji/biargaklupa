<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Koordinator Dashboard</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />     
        <script>
            var site_url = "<?php echo site_url(); ?>";
        </script>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url() ?>index.php/koord/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Distribusi Pembimbing
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url() ?>index.php/koord/distribusi/baru" >Distribusi Baru</a>
                            <a class="dropdown-item" href="<?php echo base_url() ?>index.php/koord/distribusi/lihat" >Distribusi Per Dosen</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Registrasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url() ?>index.php/koord/registrasi" >Verifikasi Registrasi Baru</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pengaturan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url() ?>index.php/koord/periode" >Atur Periode Tugas Akhir</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url() ?>index.php/logout">Logout <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>

        </nav>