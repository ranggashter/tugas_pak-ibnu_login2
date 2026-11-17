<?php
require 'auth.php';
cekRole('siswa');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-warning">
    <div class="container">
        <span class="navbar-brand text-dark">Dashboard Siswa</span>
        <a href="logout.php" class="btn btn-dark">Logout</a>
    </div>
</nav>
<div class="container mt-4">
    <div class="alert alert-warning">Selamat datang, <b><?= htmlspecialchars($_SESSION['nama']) ?></b></div>
    <div class="card">
        <div class="card-body">
            <h4>Halaman Siswa</h4>
            <p>Anda hanya dapat melihat informasi yang diperuntukkan bagi siswa.</p>
        </div>
    </div>
</div>
</body>
</html>