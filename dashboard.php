<?php
include 'layout/header.php';
?>

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
                    <div style="position: absolute;z-index: 0;top: 1.5rem;right: 0.2rem;opacity: 0.4;font-size: 5rem;">
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
                    <div style="position: absolute;z-index: 0;top: 1.5rem;right: 0.2rem;opacity: 0.4;font-size: 5rem;">
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
                    <div style="position: absolute;z-index: 0;top: 1.5rem;right: 0.2rem;opacity: 0.4;font-size: 5rem;">
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
    <?php
    include 'layout/footer.php';
    ?>