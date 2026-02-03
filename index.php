<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Saya</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">MEII</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profil.php">PROFIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GALERI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">KARYA KU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BLOG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HUBUNGI SAYA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SOSMED</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->

<div class="container mt-5">

    <!-- Tombol Profil -->
    <div class="text-end mb-3">
        <a href="profil.php" class="btn btn-primary">Masuk ke Profil Saya</a>
    </div>

    <?php
    $nama = "Adinda Putri Shakilaa";
    $umur = 13;
    $sekolah = "MTs Negeri 1 Banjarnegara";

    $angka1 = 10;
    $angka2 = 30;
    $hasil  = $angka1 * $angka2;
    ?>

    <!-- Card Profil -->
    <div class="card shadow mb-4">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Profil Diri</h4>
        </div>
        <div class="card-body">
            <p><strong>Nama:</strong> <?= $nama ?></p>
            <p><strong>Umur:</strong> <?= $umur ?> tahun</p>
            <p><strong>Sekolah:</strong> <?= $sekolah ?></p>
        </div>
    </div>

    <!-- Card Perhitungan -->
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Perhitungan PHP</h4>
        </div>
        <div class="card-body">
            <p>Angka pertama: <strong><?= $angka1 ?></strong></p>
            <p>Angka kedua: <strong><?= $angka2 ?></strong></p>
            <hr>
            <h5 class="text-success">Hasil Perkalian: <?= $hasil ?></h5>
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
