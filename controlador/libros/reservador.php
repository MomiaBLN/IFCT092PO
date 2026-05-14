<?php
class ReservadorLibros
{
    public string $nombreTabla = "historial_libros";
    public PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function ReservarLibro (Libro $libro, Usuario $usuario)
    {
        $sql = "INSERT INTO $this->nombreTabla (id_usuario, id_libro) VALUES ($usuario->id, $libro->id)";
        return $this->pdo->exec($sql);
    }

    public function DevolverLibro (Libro $libro, Usuario $usuario)
    {
        $sql = "UPDATE $this->nombreTabla SET fecha_entrada = CURRENT_DATE WHERE id_usuario = $usuario->id AND id_libro = $libro->id AND fecha_entrada IS NULL";
        return $this->pdo->exec($sql);
    }
}
?>