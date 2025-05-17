<?php
require 'config.php';
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5 text-center">
    <div class="card p-5">
        <h2>Selamat datang, <?= $_SESSION['username'] ?>!</h2>
        <a href="logout.php" class="btn btn-danger mt-4">-Logout-</a>
    </div>
</div>
</body>
</html>
