<?php
require 'auth.php';
cekRole('admin');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-primary">
    <div class="container">
        <span class="navbar-brand">Dashboard Admin</span>
        <a href="logout.php" class="btn btn-light">Logout</a>
    </div>
</nav>
<div class="container mt-4">
    <div class="alert alert-primary">Selamat datang, <b><?= htmlspecialchars($_SESSION['nama']) ?></b></div>
    <div class="card shadow-sm">
        <div class="card-body">
            <h4>Halaman Administrator</h4>
            <p>Anda memiliki hak akses penuh untuk mengelola aplikasi.</p>
        </div>
    </div>
</div>
</body>
</html>