<?php
//modelo
require_once("modelo/libro.php");
require_once("modelo/contacto.php");
require_once("modelo/usuario.php");
require_once("modelo/registro.php");
require_once("modelo/historial-libro.php");

//controlador
require_once("controlador/insertador-libros.php");
require_once("controlador/insertador-usuarios.php");

$dsn = 'mysql:host=localhost;dbname=biblioteca;charset=utf8mb4';
$pdo = new PDO($dsn, "root", "", [
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);
if (!isset($insertadorDeLibros))
{
    $insertadorDeLibros = new InsertadorLibros($pdo);
}
if (!isset($insertadorDeUsuarios))
{
    $insertadorDeUsuarios = new InsertadorUsuarios($pdo);
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Biblioteca</title>
</head>
<body>
    <?php
    //Vista
    require_once('vista/insertar-libro.php');
    
    //La vista para insertar usuarios
    require_once('vista/insertar-usuario.php');
    ?>
</body>
</html>