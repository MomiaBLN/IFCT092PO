<?php
require_once("controlador/libros/consultador.php");
require_once("controlador/base-de-datos.php");

require_once('modelo/inicializador.php');

require_once("vista/plantillas/boton.php");
require_once("vista/plantillas/input.php");
require_once("vista/plantillas/libro.php");

$consultadorDeLibros = new ConsultadorLibros($pdo);

//Volver al catálogo
echo "<a href=/index.php>Volver al catálogo</a><br><br>";

if (!isset($_GET["id"]))
{
    echo "ID del libro no especificado.";
    return;
}

$libro = $consultadorDeLibros->ConsultarLibrosDisponiblesConFiltros(
    $_GET["id"],
    null,
    null,
    null,
    null
);

if (empty($libro))
{
    echo "Libro no encontrado.";
    return;
}

$libro = new Libro($libro[0]["id"], $libro[0]["isbn"], $libro[0]["titulo"], $libro[0]["autor"], DateTime::createFromFormat('Y-m-d', $libro[0]["fecha_de_publicacion"]));
MostrarLibroEnFicha($libro);
?>
<form action="index.php" method="POST">
    <input type="hidden" name="id_libro_reservado" value="<?php echo $libro->id; ?>">
    <?php
    MostrarInputText("id_usuario_reserva", "ID del usuario", "usuario");
    MostrarBoton("Reservar libro", "submit");
    ?>
</form>