<?php
class ReservadorLibros
{
    public string $nombreTabla = "libros";
    public PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function ConsultarLibro (Libro $libro)
    {
        //Encontrar todos los libros con alguna coincidencia que estén disponibles
    }

    public function ReservarLibro (Libro $libro, Usuario $usuario)
    {
        //Reservar el libro elegido para el usuario indicado
    }
}
?>