

<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "textilexbase");

// Verificar la conexión
if (mysqli_connect_errno()) {
    echo "Error en la conexión a la base de datos: " . mysqli_connect_error();
    exit();
}

// Recuperar datos del formulario
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
// Insertar en la tabla usuarios
$query = "INSERT INTO usuarios (nombre, usuario, contraseña, id_cargo) VALUES ('$nombre', '$usuario', '$contrasena', 2)";
$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    echo "Registro exitoso. Ahora puedes iniciar sesión.";
} else {
    echo "Error en el registro: " . mysqli_error($conexion);
}

// Cerrar conexión
mysqli_close($conexion);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Registro</title>
</head>
<body>

<h2>Registro de Usuario</h2>

<form action="procesar_registro.php" method="post">
  <label for="nombre">Nombre completo:</label><br>
  <input type="text" id="nombre" name="nombre" required><br><br>

  <label for="usuario">Nombre de usuario:</label><br>
  <input type="text" id="usuario" name="usuario" required><br><br>

  <label for="contrasena">Contraseña:</label><br>
  <input type="password" id="contrasena" name="contrasena" required><br><br>

  <input type="submit" value="Registrarse">
</form>


</body>
</html>