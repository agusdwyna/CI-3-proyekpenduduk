<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendataan Penduduk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
    <style>
        .sidebar-nav .sidebar-link {
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        /* Hover effect for main menu items */
        .sidebar-item:not(.sidebar-header) > .sidebar-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            padding-left: 10px;
        }

        /* Styling for dropdown menu items */
        .sidebar-dropdown .sidebar-link {
            font-size: 0.95rem; /* Lebih kecil dari menu utama */
            padding-left: 25px; /* Memberikan indentasi */
        }

        /* Hover effect for dropdown menu items */
        .sidebar-dropdown .sidebar-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            padding-left: 30px;
        }

        /* Active item styling */
        .sidebar-item > .sidebar-link.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        /* Icon color change on hover */
        .sidebar-link:hover i {
            color: #fff;
        }

        /* Dropdown arrow animation */
        .sidebar-link[aria-expanded="true"]::after {
            transform: rotate(90deg);
        }

        /* Smooth dropdown transition */
        .sidebar-dropdown {
            transition: all 0.3s ease;
        }

        /* Style for the sidebar navigation header */
        .sidebar-header {
            color: rgba(255, 255, 255, 0.6); /* Lebih redup */
            font-size: 0.85rem; /* Lebih kecil */
            text-transform: uppercase; /* Kapitalisasi */
            letter-spacing: 0.05em; /* Sedikit spasi antar huruf */
            padding: 1.5rem 1rem 0.5rem; /* Sesuaikan padding */
        }

        /* Style for the sidebar logo (header di pojok kiri atas) */
        .sidebar-logo {
            padding: 1.75rem 1rem; /* Increased top and bottom padding even more */
            text-align: center; /* Center the logo text */
            border-bottom: 1px solid rgba(255, 255, 255, 0.15); /* Slightly darker bottom border */
            background-color: rgba(0, 0, 0, 0.1); /* Subtle background for emphasis */
        }

        .sidebar-logo a {
            font-size: 1.6rem; /* Increased font size */
            font-weight: 700; /* Bold font weight */
            color: #fff; /* White text color */
            text-decoration: none; /* Remove underline */
            display: block; /* Make it a block-level element */
            letter-spacing: 0.05em; /* More noticeable letter spacing */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); /* Subtle text shadow */
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">SIPENDUK</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Navigasi
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="fa-solid fa-gauge pe-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?php echo base_url('Verifikasi'); ?>" class="sidebar-link">
                            <i class="fa-solid fa-user-check pe-2"></i> Verifikasi Akun
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#masterdata" data-bs-toggle="collapse"
                            aria-expanded="false">
                            <i class="fa-solid fa-folder-tree pe-2"></i> Masterdata
                        </a>
                        <ul id="masterdata" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><i class="fa-solid fa-map-location-dot pe-2 fs-6"></i> Data Kaling</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><i class="fa-solid fa-users pe-2 fs-6" ></i> Data Penanggung Jawab</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><i class="fa-solid fa-id-card pe-2 fs-6"></i> Data Penduduk</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="image/profile.jpg" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item"><i class="fa-solid fa-user pe-2"></i> Profile</a>
                                <a href="#" class="dropdown-item"><i class="fa-solid fa-gear pe-2"></i> Setting</a>
                                <a href="#" class="dropdown-item"><i class="fa-solid fa-right-from-bracket pe-2"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                    <?php
                        if (empty($konten)){
                            echo "";}
                        else{
                            echo $konten;
                        }
                    ?>

                    <?php
                        if (empty($tabel)){
                            echo "";}
                        else{
                            echo $tabel;
                        }
                    ?>
                    </div>
                </div>
            </main>

            <a href="#" class="theme-toggle">
                <i class="fa-regular fa-moon"></i>
                <i class="fa-regular fa-sun"></i>
            </a>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>SIPENDUK</strong>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>js/script.js"></script>
</body>
</html>