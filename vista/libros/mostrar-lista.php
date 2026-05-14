<?php
require_once("vista/plantillas/libro.php");

$respuesta = null;

if (!isset($_GET["id"])
    && !isset($_GET["isbn"])
    && !isset($_GET["titulo"])
    && !isset($_GET["autor"])
    && !isset($_GET["fechaDePublicacion"]))
{
    return;
}
else
{
    $respuesta = $consultadorDeLibros->ConsultarLibrosDisponiblesConFiltros(
        isset($_GET["id"]) && $_GET["id"] != null ? $_GET["id"] : 0,
        $_GET["isbn"] ?? null,
        $_GET["titulo"] ?? null,
        $_GET["autor"] ?? null,
        $_GET["fechaDePublicacion"] ?? null
    );
}

if ($respuesta == null)
{
    echo "No se han encontrado resultados.";
    return;
}

?>

<h1>Catálogo</h1>

<?php
foreach ($respuesta as $entrada)
{
    $libro = new Libro($entrada["id"], $entrada["isbn"], $entrada["titulo"], $entrada["autor"], DateTime::createFromFormat( 'Y-m-d', $entrada["fecha_de_publicacion"]));
    MostrarLibroEnLista($libro, true);
}

?>