<?php

// session_start();


// TO DO add to function in the controller to check if user is logged in

// if (isset($_POST['logout'])) {
//     session_unset();
//     session_destroy();

//     header("location: login.php");
// }

?>

<!-- Tampilan bagian atas -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Program Nilai</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="vendor/fontawesome-pro-6.5.1/css/all.css">
    <script src="vendor/fontawesome-pro-6.5.1/js/all.js" type="text/javascript"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- NAVBAR Name -->
        <?php // if (isset($_SESSION['username'])): ?>
        <a href="dashboard.html" class="navbar-brand ps-3">Welcome <?php //echo $_SESSION["username"]; ?></a>
        <?php // else: ?>
        <a href="dashboard.php" class="navbar-brand ps-3">Welcome</a>
        <?php // endif; ?>
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
                        <a class="nav-link" href="data_serdik/index.php">
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
        <!-- Main Content -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 mb-4">Dashboard</h1>
                    <hr class="pb-1">
                </div>
                <div class="row text-white p-4 pt-1">
                    <div class="card bg-success m-3" style="width: 18rem;">
                        <div class="card-body">
                            <div
                                style="position: absolute;z-index: 0;top: 1.5rem;right: 0.2rem;opacity: 0.4;font-size: 5rem;">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                            <h5 class="card-title">Jumlah Pendidik</h5>
                            <div class="display-4">1
                            </div>
                            <a href="#">
                                <p class="card-text text-white">Lihat Detail<i
                                        class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="card bg-danger m-3" style="width: 18rem;">
                        <div class="card-body">
                            <div
                                style="position: absolute;z-index: 0;top: 1.5rem;right: 0.2rem;opacity: 0.4;font-size: 5rem;">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <h5 class="card-title">Jumlah Serdik</h5>
                            <div class="display-4">1
                            </div>
                            <a href="#">
                                <p class="card-text text-white">Lihat Detail <i
                                        class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="card bg-info m-3" style="width: 18rem;">
                        <div class="card-body">
                            <div
                                style="position: absolute;z-index: 0;top: 1.5rem;right: 0.2rem;opacity: 0.4;font-size: 5rem;">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <h5 class="card-title">Jumlah Mata Pelajaran</h5>
                            <div class="display-4">1
                            </div>
                            <a href="#">
                                <p class="card-text text-white">Lihat Detail <i
                                        class="fa-solid fa-arrow-up-right-from-square ml-2"></i>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </main>

            <!-- FOOTER -->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-center small">
                        <div class="text-muted">Hak Cipta &copy; Pusdiktop</div>
                    </div>
                </div>
            </footer>

        </div> <!-- layoutSidenav -->
    </div> <!-- sb-nav-fixed -->

    <script src="vendor/bootstrap-5.3.3/js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
</body>

</html>