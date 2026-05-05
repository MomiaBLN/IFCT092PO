<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Tablas salariales en tecnología</title>
</head>
<body>
    <h1>Descubre el salario asignado por convenio según tu categoría</h1>
    <?php
        //Modelo
        require_once("modelo/area.php");
        require_once("modelo/grupo.php");
        require_once("modelo/nivel.php");
        require_once("modelo/categoria.php");
        require_once("modelo/datos-categorias.php");

        //Controlador
        require_once("controlador/controlador-categorias.php");
        $controlador = new ControladorCategorias($listaDeCategorias);

        //Vista
        require_once('vista/formulario.php');
    ?>
</body>
</html>