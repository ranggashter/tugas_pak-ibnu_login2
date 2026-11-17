<?php
require 'auth.php';
cekRole('petugas');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-success">
    <div class="container">
        <span class="navbar-brand">Dashboard Petugas</span>
        <a href="logout.php" class="btn btn-light">Logout</a>
    </div>
</nav>
<div class="container mt-4">
    <div class="alert alert-success">Selamat datang, <b><?= htmlspecialchars($_SESSION['nama']) ?></b></div>
    <div class="card">
        <div class="card-body">
            <h4>Halaman Petugas</h4>
            <p>Anda dapat mengelola data operasional.</p>
        </div>
    </div>
</div>
</body>
</html>