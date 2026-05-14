<?php
if(isset($_POST["titulo"]))
{
    $fecha = DateTime::createFromFormat( 'Y-m-d', $_POST["fechaDePublicacion"]);
    $libro = new Libro(0, $_POST["isbn"], $_POST["titulo"], $_POST["autor"], $fecha);
    $insertadorDeLibros->InsertarLibro($libro);
}
?>

<h1>Añadir libro</h1>
<form action="index.php" method="POST">
<?php
require_once("vista/plantillas/input.php");
require_once("vista/plantillas/boton.php");

MostrarInputText("isbn", "ISBN", "isbn");
MostrarInputText("titulo", "Título", "titulo");
MostrarInputText("autor", "Autor", "autor");
MostrarInputDate("fechaDePublicacion", "Fecha de publicación", "fecha");
MostrarBoton("Insertar", "submit");
?>
</form>