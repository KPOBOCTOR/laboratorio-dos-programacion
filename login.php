<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>🔐 Iniciar Sesión</h1>

    <form action="validar.php" method="POST">
        <input type="text" name="usuario" placeholder="👤 Usuario" required>
        <button type="submit">Ingresar</button>
    </form>
</div>

</body>
</html>