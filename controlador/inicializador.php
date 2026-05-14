<?php
//controlador
require_once("controlador/usuarios/insertador.php");
require_once("controlador/usuarios/consultador.php");
require_once("controlador/libros/insertador.php");
require_once("controlador/libros/consultador.php");
require_once("controlador/libros/reservador.php");

require_once("controlador/base-de-datos.php");

if (!isset($insertadorDeUsuarios))
{
    $insertadorDeUsuarios = new InsertadorUsuarios($pdo);
}
if (!isset($consultadorDeUsuarios))
{
    $consultadorDeUsuarios = new ConsultadorUsuarios($pdo);
}
if (!isset($insertadorDeLibros))
{
    $insertadorDeLibros = new InsertadorLibros($pdo);
}
if (!isset($consultadorDeLibros))
{
    $consultadorDeLibros = new ConsultadorLibros($pdo);
}
if (!isset($reservadorDeLibros))
{
    $reservadorDeLibros = new ReservadorLibros($pdo);
}
?>