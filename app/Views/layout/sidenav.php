<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akshar&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow&amp;display=swap">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fontawesome-all.min.css'); ?>">
    
</head>

<body id="page-top" style="font-family: Archivo, sans-serif;background: rgb(255,255,255);">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: linear-gradient(172deg, #175e16 13%, #27ae36 100%);">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-leaf"></i></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-size: 12px;">Green Batara</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="/dashboardKonsumen/"><i class="far fa-window-maximize"></i><span><span style="font-weight: normal !important;">Dashboard</span></span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="/reservasi_konsumen/"><i class="fas fa-calendar-alt"></i><span><span style="font-weight: normal !important;">Reservasi</span></span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="/konsultasiKonsumen/<?= session()->get('ses_email')?>"><i class="fas fa-calendar-alt"></i><span><span style="font-weight: normal !important;">Konsultasi</span></span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="/profil/<?= session()->get('ses_email')?>"><i class="far fa-user"></i><span><span style="font-weight: normal !important;">Profil</span></span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="/feedback/"><i class="fas fa-exchange-alt"></i><span><span style="font-weight: normal !important;">Feedback</span></span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="/logout/"><i class="fas fa-power-off"></i><span><span style="font-weight: normal !important;">Logout</span></span></a></li>
                    
                    <li class="nav-item"></li>
                </ul>
                <!-- <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div> -->
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content" style="background: #ffffff;">
                    <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                        
                    </nav>  
                <?= $this->renderSection('admin'); ?>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>SI Manajemen Hotel © Brand 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>