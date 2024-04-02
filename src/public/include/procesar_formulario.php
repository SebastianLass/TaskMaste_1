<?php

// Incluir el archivo de conexión a la base de datos
include_once ("/xampp/htdocs/TaskMaste/config/db_connection.php");

// Inicia la sesión
session_start();


// Función para limpiar los datos de entrada
function limpiar_entrada($entrada) {
    $entrada = trim($entrada);
    $entrada = stripslashes($entrada);
    $entrada = htmlspecialchars($entrada);
    return $entrada;
}


// Procesamiento del formulario de registro
if(isset($_POST['registro-submit'])) {
    // Verificar si se proporcionan campos obligatorios
    if(empty($_POST['nombre_usuario']) || empty($_POST['correo_electronico']) || empty($_POST['contrasena'])) {
        echo "Todos los campos son obligatorios";
        exit();
    }

    // Limpiar y obtener datos del formulario de registro
    $nombre_usuario = limpiar_entrada($_POST['nombre_usuario']);
    $correo_electronico = limpiar_entrada($_POST['correo_electronico']);
    $contrasena = limpiar_entrada($_POST['contrasena']);

    // Verificar el formato del correo electrónico
    if (!filter_var($correo_electronico, FILTER_VALIDATE_EMAIL)) {
        echo "El formato del correo electrónico es inválido";
        exit();
    }

    // Consulta SQL para verificar si el usuario ya existe
    $sql_check_user = "SELECT * FROM Usuarios WHERE nombre_usuario='$nombre_usuario' OR correo_electronico='$correo_electronico'";
    $result_check_user = $conn->query($sql_check_user);

    if ($result_check_user->num_rows > 0) {
        echo "El usuario ya está registrado";
    } else {
        // Hash de la contraseña
        $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

        // Consulta SQL para insertar el nuevo usuario en la tabla Usuarios
        $sql_insert_user = "INSERT INTO Usuarios (nombre_usuario, correo_electronico, contrasena) VALUES ('$nombre_usuario', '$correo_electronico', '$hashed_password')";

        if ($conn->query($sql_insert_user) === TRUE) {
            echo "Registro exitoso";
            header("Location: ../formulario.html");
            exit(); // Termina el script después de redirigir al usuario
        } else {
            echo "Error al registrar al usuario: " . $conn->error;
        }
    }
}

// Procesamiento del formulario de inicio de sesión
if(isset($_POST['login-submit'])) {
    // Limpiar y obtener datos del formulario de inicio de sesión
    $nombre_usuario = limpiar_entrada($_POST['nombre_usuario']);
    $contrasena = limpiar_entrada($_POST['contrasena']);

    // Consulta SQL para verificar si el usuario y la contraseña coinciden
    $sql = "SELECT * FROM Usuarios WHERE nombre_usuario='$nombre_usuario'";
    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($contrasena, $row['contrasena'])) {
            // Establece una variable de sesión para el nombre de usuario
            $_SESSION['nombre_usuario'] = $nombre_usuario;
            // Establece una variable de sesión para indicar que el usuario ha iniciado sesión
            $_SESSION['autenticado'] = true;
            // Redirige al usuario a la página después del inicio de sesión
            header("Location: ../taskmaste/taskmaste.php");
            exit(); // Termina el script después de redirigir al usuario
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
}
?>