<?php
/*
CREATE TABLE `biblioteca`.`libros` (`id` INT NOT NULL AUTO_INCREMENT , `isbn` TEXT NOT NULL , `titulo` TEXT NOT NULL , `autor` TEXT NOT NULL , `fecha_de_publicacion` DATETIME NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
*/

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
        $sql = "INSERT INTO libros (isbn, titulo, autor, fecha_de_publicacion)".
        "VALUES (\"$libro->isbn\", \"$libro->titulo\", \"$libro->autor\", \"$fecha\")";

        $respuesta = $this->pdo->exec($sql);
    }
}
?>