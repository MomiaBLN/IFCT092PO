<?php
if(isset($_POST["numeroDeIdentificacionPersonal"]))
{
    $usuario = new Usuario("",
                            $_POST["numeroDeIdentificacionPersonal"],
                            $_POST["mail"],
                            $_POST["direccion"],
                            $_POST["telefono"],
                            $_POST["redes"]);
    $insertadorDeUsuarios->InsertarUsuario($usuario);
}
?>

<h1>Nuevo usuario</h1>
<form action="index.php" method="POST">
<?php
require_once("vista/plantillas/input.php");
require_once("vista/plantillas/boton.php");

MostrarInputText("numeroDeIdentificacionPersonal",
                    "Número de identificación",
                    "numeroDeIdentificacionPersonal");
MostrarInputText("mail", "Mail", "mail");
MostrarInputText("direccion", "Dirección", "direccion");
MostrarInputText("telefono", "Teléfono", "telefono");
MostrarInputText("redes", "Redes Sociales", "redes");
MostrarBoton("Insertar", "submit");
?>
</form>