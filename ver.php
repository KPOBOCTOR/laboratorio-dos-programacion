<?php
$conn = new mysqli("localhost", "root", "", "sistema_web");
$result = $conn->query("SELECT * FROM datos");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Datos Guardados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h1>📊 Datos Registrados</h1>

    <a href="dashboard.php" class="btn">➕ Agregar más</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Correo</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><?php echo $row['correo']; ?></td>
        </tr>
        <?php } ?>

    </table>
</div>

</body>
</html>