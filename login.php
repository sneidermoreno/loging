<?php
session_start();

// Datos de usuario y contraseña válidos (deberías usar una base de datos en un proyecto real)
$valid_username = "admin";
$valid_password_hash = password_hash("password", PASSWORD_DEFAULT); // Hash de la contraseña

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username === $valid_username && password_verify($password, $valid_password_hash)) {
        $_SESSION['loggedin'] = true;
        header("Location: home.php");
        exit();
    } else {
        echo "Credenciales inválidas.";
    }
}
?>