<?php
$conn = new mysqli("localhost", "root", "", "sistema_web");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'] ?? '';
    $edad = $_POST['edad'] ?? 0;
    $correo = $_POST['correo'] ?? '';

    if ($edad > 0) {

        $stmt = $conn->prepare("INSERT INTO datos(nombre, edad, correo) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $nombre, $edad, $correo);
        $stmt->execute();

        echo "✅ Datos guardados correctamente";

    } else {
        echo "❌ Edad inválida";
    }

} else {
    echo "⚠️ Acceso no válido";
}
?>