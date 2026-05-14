<?php
if(isset($_POST["id_libro_devuelto"]) && isset($_POST["id_usuario_devuelve"]))
{
    echo "Devolviendo libro con ID " . $_POST["id_libro_devuelto"] . " para el usuario con ID " . $_POST["id_usuario_devuelve"] . ".";

    $respuesta = $consultadorDeUsuarios->ConsultarUsuario($_POST["id_usuario_devuelve"]);
    if (empty($respuesta))
    {
        echo "Usuario no encontrado.";
        return;
    }
    //Usemos el primer resultado porque el ID es único para devolver el libro
    $usuario = new Usuario($respuesta[0]["id"], "", "", "", "", null);
    $respuesta = $consultadorDeLibros->ConsultarLibrosPrestadosConFiltros($_POST["id_libro_devuelto"], null, null, null, null);
    if (empty($respuesta))
    {
        echo "Libro no encontrado.";
        return;
    }
    //Usemos el primer resultado porque el ID es único para devolver el libro
    $libro = new Libro($respuesta[0]["id"], $respuesta[0]["isbn"], $respuesta[0]["titulo"], $respuesta[0]["autor"], DateTime::createFromFormat('Y-m-d', $respuesta[0]["fecha_de_publicacion"]));

    $reservadorDeLibros->DevolverLibro($libro, $usuario);
}
?>

<h1>Devolver libro</h1>
<form action="index.php" method="POST">
<?php
require_once("vista/plantillas/input.php");
require_once("vista/plantillas/boton.php");

MostrarInputText("id_libro_devuelto", "ID del libro", "id");
MostrarInputText("id_usuario_devuelve", "ID del usuario", "usuario");
MostrarBoton("Devolver", "submit");
?>
</form>