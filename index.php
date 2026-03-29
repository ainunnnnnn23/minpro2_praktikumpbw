<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">MyPortfolio</span>
    </div>
</nav>

<!-- Home -->
<div class="container text-center mt-5">
    <img src="https://via.placeholder.com/150" class="rounded-circle mb-3">
    <h1>Halo, Saya Ainun</h1>
    <p>Mahasiswa Sistem Informasi</p>
</div>

<!-- About -->
<div class="container mt-5 text-center">
    <h2>About Me</h2>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM about");
    $data = mysqli_fetch_assoc($query);
    ?>

    <p><?= $data['deskripsi']; ?></p>
</div>

<!-- Skills -->
<div class="container mt-5">
    <h2 class="text-center">Skills</h2>

    <?php
    $query = mysqli_query($conn, "SELECT * FROM skills");
    while ($row = mysqli_fetch_assoc($query)) {
    ?>
        <label><?= $row['nama_skill']; ?></label>
        <div class="progress mb-3">
            <div class="progress-bar" style="width: <?= $row['persen']; ?>%">
                <?= $row['persen']; ?>%
            </div>
        </div>
    <?php } ?>
</div>

<!-- Certificates -->
<div class="container mt-5">
    <h2 class="text-center">Certificates</h2>
    <div class="row">

    <?php
    $query = mysqli_query($conn, "SELECT * FROM certificates");
    while ($row = mysqli_fetch_assoc($query)) {
    ?>
        <div class="col-md-4 mt-3">
            <div class="card p-3 text-center">
                <h5><?= $row['judul']; ?></h5>
                <p><?= $row['deskripsi']; ?></p>
            </div>
        </div>
    <?php } ?>

    </div>
</div>

</body>
</html>