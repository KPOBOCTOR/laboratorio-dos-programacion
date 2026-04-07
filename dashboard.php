<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>📋 Panel de Control</h1>

    <form action="guardar.php" method="POST">
        <input type="text" name="nombre" placeholder="👤 Nombre" required>
        <input type="number" name="edad" placeholder="🎂 Edad" required>
        <input type="email" name="correo" placeholder="📧 Correo" required>
        <button type="submit">💾 Guardar</button>
    </form>

    <a href="ver.php" class="btn">📊 Ver datos</a>
</div>
