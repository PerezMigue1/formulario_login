<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user = $_POST['user'];
    $password = $_POST['password'];
    $age = $_POST['age'];

    $errors = [];

    if ($user != "luis" || $password != "mendoza") {
    $errors[] = "Usuario o contraseña incorrectos.";
    }

    if (!is_numeric($age) || $age < 18) {
        $errors[] = "Debe ingresar una edad válida y ser mayor de edad a 18";
    }

    if (empty($user) || empty($password) || empty($age)) {
    $errors[] = "Todos los campos deben ser llenados.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<p style='color:green;'>Login exitoso.</p>";
    }
}
?>