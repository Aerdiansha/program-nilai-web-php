<?php
session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();

    header("location: login.php");
}

?>

<!-- Tampilan bagian atas -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="vendor/fontawesome-pro-6.5.1/css/all.css">
    <script src="vendor/fontawesome-pro-6.5.1/js/all.js" type="text/javascript"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- NAVBAR Name -->
        <?php if (isset($_SESSION['username'])): ?>
            <a href="dashboard.html" class="navbar-brand ps-3">Welcome <?= $_SESSION["username"] ?></a>
        <?php else: ?>
            <a href="dashboard.php" class="navbar-brand ps-3">Welcome</a>
        <?php endif; ?>
        <!-- NAVBAR -->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <div class="d-none d-md-inline-block ms-auto me-0 me-md-3 my-2 my-md-0">
        </div>
        <!-- Navbar-->
        <ul class=" navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <form action="dashboard.php" method="post">
                        <button type="submit" name="logout" class="dropdown-item">Logout</button>
                    </form>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark " id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <hr class="dropdown-divider">
                        <a class="nav-link" href="dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-gauge mr-2"></i></div>
                            Dashboard
                        </a>
                        <hr class="dropdown-divider">
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-chalkboard-user mr-2"></i></div>
                            Data Pendidik
                        </a>
                        <hr class="dropdown-divider">
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-book mr-2"></i></div>
                            Data Mata Pelajaran
                        </a>
                        <hr class="dropdown-divider">
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-users mr-2"></i></div>
                            Data Serdik
                        </a>
                        <hr class="dropdown-divider">
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-pencil mr-2"></i></div>
                            Data Nilai
                        </a>
                        <hr class="dropdown-divider">
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-newspaper mr-2"></i></div>
                            Cetak Nilai
                        </a>
                    </div>
            </nav>
        </div>