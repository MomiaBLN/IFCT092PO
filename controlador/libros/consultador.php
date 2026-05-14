<?php
class ConsultadorLibros
{
    public string $nombreTabla = "libros";
    public PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function ConsultarLibrosDisponiblesConFiltros(int $id,
                                                ?string $isbn,
                                                ?string $titulo,
                                                ?string $autor,
                                                ?string $fechaDePublicacion)
    {
        $sql = "SELECT l.* FROM libros AS l WHERE 1=1";

        if ($id != 0)
            $sql .= " AND id = $id";
        if ($isbn != null)
            $sql .= " AND isbn = \"$isbn\"";
        if ($titulo != null)
            $sql .= " AND titulo LIKE \"$titulo\"";
        if ($autor != null)
            $sql .= " AND autor LIKE \"$autor\"";
        if ($fechaDePublicacion != null)
            $sql .= " AND fecha_de_publicacion = \"$fechaDePublicacion\"";

        $sql .= " AND NOT EXISTS (SELECT 1 FROM historial_libros AS h WHERE h.fecha_entrada IS NULL AND h.id_libro = l.id);";

        $respuesta = $this->pdo->query($sql)->fetchAll();
        return $respuesta;
    }

    public function ConsultarLibrosPrestadosConFiltros(int $id,
                                                ?string $isbn,
                                                ?string $titulo,
                                                ?string $autor,
                                                ?string $fechaDePublicacion)
    {
        $sql = "SELECT l.* FROM libros AS l WHERE 1=1";

        if ($id != 0)
            $sql .= " AND id = $id";
        if ($isbn != null)
            $sql .= " AND isbn = \"$isbn\"";
        if ($titulo != null)
            $sql .= " AND titulo LIKE \"$titulo\"";
        if ($autor != null)
            $sql .= " AND autor LIKE \"$autor\"";
        if ($fechaDePublicacion != null)
            $sql .= " AND fecha_de_publicacion = \"$fechaDePublicacion\"";

        $sql .= " AND EXISTS (SELECT 1 FROM historial_libros AS h WHERE h.fecha_entrada IS NULL AND h.id_libro = l.id);";

        $respuesta = $this->pdo->query($sql)->fetchAll();
        return $respuesta;
    }
}
?>