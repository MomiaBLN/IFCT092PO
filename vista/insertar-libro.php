<?php
if(isset($_POST["titulo"]))
{
    $fecha = DateTime::createFromFormat( 'd/m/y', $_POST["fechaDePublicacion"]);
    $libro = new Libro("", $_POST["isbn"], $_POST["titulo"], $_POST["autor"], $fecha);
    $insertadorDeLibros->InsertarLibro($libro);
}
?>

<form action="index.php" method="POST">
<?php
require_once("vista/plantillas/input.php");
require_once("vista/plantillas/boton.php");

MostrarInputText("isbn", "ISBN", "isbn");
MostrarInputText("titulo", "Título", "titulo");
MostrarInputText("autor", "Autor", "autor");
MostrarInputText("fechaDePublicacion", "Fecha de publicación", "fecha");
MostrarBoton("Insertar", "submit");
?>
</form>