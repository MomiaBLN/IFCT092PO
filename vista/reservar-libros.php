<h1>Buscar</h1>
<form action="index.php" method="GET">
<?php
require_once("vista/plantillas/input.php");
require_once("vista/plantillas/boton.php");

MostrarInputText("id", "ID", "id");
MostrarInputText("isbn", "ISBN", "isbn");
MostrarInputText("titulo", "Título", "titulo");
MostrarInputText("autor", "Autor", "autor");
MostrarInputDateTime("fechaDePublicacion", "Fecha de publicación", "fecha");
MostrarBoton("Consultar", "submit");
?>
</form>

<?php
if (!
    (isset($_GET["id"])
    && isset($_GET["isbn"])
    && isset($_GET["titulo"])
    && isset($_GET["autor"])
    && isset($_GET["fechaDePublicacion"])))
{
    return;
}

$id = isset($_GET["id"]) ? $_GET["id"] : 0;
$isbn = isset($_GET["isbn"]) ? $_GET["isbn"] : "";
$titulo = isset($_GET["titulo"]) ? $_GET["titulo"] : "";
$autor = isset($_GET["autor"]) ? $_GET["autor"] : "";

$fechaObtenidaEnTexto = isset($_GET["fechaDePublicacion"]) ? $_GET["fechaDePublicacion"] : "31/12/9999";
var_dump($fechaObtenidaEnTexto);
$fechaDePublicacionEnDateTime = DateTime::createFromFormat( 'd/m/Y', $fechaObtenidaEnTexto);

$libroQueBuscamos = new Libro($id, $isbn, $titulo, $autor, $fechaDePublicacionEnDateTime);
?>