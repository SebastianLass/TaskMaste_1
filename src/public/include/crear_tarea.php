<?php 
include_once ("/xampp/htdocs/TaskMaste/config/db_connection.php");

// Recibir los datos del formulario
$nombre_tarea = $_POST['nombre_tarea'];
$descripcion = $_POST['descripcion'];
$fecha_inicio = $_POST['fecha_inicio'];
$fecha_finalizacion = $_POST['fecha_finalizacion'];
$estado = $_POST['estado'];
$prioridad = $_POST['prioridad'];
$user_id = $_POST['user_id'];
$assigned_user_id = $_POST['assigned_user_id'];

// Insertar los datos en la tabla Tareas
$sql = "INSERT INTO Tareas (nombre_tarea, descripcion, fecha_inicio, fecha_finalizacion, estado, prioridad, user_id, assigned_user_id)
VALUES ('$nombre_tarea', '$descripcion', '$fecha_inicio', '$fecha_finalizacion', '$estado', '$prioridad', '$user_id', '$assigned_user_id')";

if ($conn->query($sql) === TRUE) {
    echo "Tarea creada exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>