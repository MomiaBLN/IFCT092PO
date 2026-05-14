<?php
class InsertadorLibros
{
    public string $nombreTabla = "libros";
    public PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function InsertarLibro (Libro $libro)
    {
        $fecha = $libro->FechaDePublicacionATexto();
        $sql = "INSERT INTO $this->nombreTabla (isbn, titulo, autor, fecha_de_publicacion)".
        "VALUES (\"$libro->isbn\", \"$libro->titulo\", \"$libro->autor\", \"$fecha\")";

        $respuesta = $this->pdo->exec($sql);
    }
}
?>