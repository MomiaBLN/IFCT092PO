<h1>Buscar</h1>
<form action="index.php" method="GET">
<?php
require_once("vista/plantillas/input.php");
require_once("vista/plantillas/boton.php");

MostrarInputNumero("id", "ID", "id");
MostrarInputText("isbn", "ISBN", "isbn");
MostrarInputText("titulo", "Título", "titulo");
MostrarInputText("autor", "Autor", "autor");
MostrarInputDate("fechaDePublicacion", "Fecha de publicación", "fecha");
MostrarBoton("Consultar", "submit");
?>
</form>

