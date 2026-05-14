<?php
if(!isset($_POST["id_libro_reservado"]) && !isset($_POST["id_usuario_reserva"]))
{
    return;
}

echo "Reservando libro con ID " . $_POST["id_libro_reservado"] . " para el usuario con ID " . $_POST["id_usuario_reserva"] . ".";

$respuesta = $consultadorDeUsuarios->ConsultarUsuario($_POST["id_usuario_reserva"]);
if (empty($respuesta))
{
    echo "Usuario no encontrado.";
    return;
}
//Usemos el primer resultado porque el ID es único para reservar el libro
$usuario = new Usuario($respuesta[0]["id"], "", "", "", "", null);
$respuesta = $consultadorDeLibros->ConsultarLibrosDisponiblesConFiltros($_POST["id_libro_reservado"], null, null, null, null);
if (empty($respuesta))
{
    echo "Libro no encontrado.";
    return;
}
//Usemos el primer resultado porque el ID es único para reservar el libro
$libro = new Libro($respuesta[0]["id"], $respuesta[0]["isbn"], $respuesta[0]["titulo"], $respuesta[0]["autor"], DateTime::createFromFormat('Y-m-d', $respuesta[0]["fecha_de_publicacion"]));

$reservadorDeLibros->ReservarLibro($libro, $usuario);

?>
