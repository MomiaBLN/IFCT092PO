<?php
class Libro
{
    public string $id;
    public string $isbn;
    public string $titulo;
    public string $autor;
    public DateTime $fechaDePublicacion;

    public function __construct(string $id,
                                string $isbn,
                                string $titulo,
                                string $autor,
                                DateTime $fechaDePublicacion)
    {
        $this->id = $id;
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->fechaDePublicacion = $fechaDePublicacion;
    }
}
?>