<?php
class HistorialLibro
{
    //alcance (public) tipo (Libro) $nombreDeLaVariable ($libro)
    public Libro $libro;
    //No podemos indicar un tipo para registros porque PHP no tiene tipos para listas
    public $registros;

    //Los puntos suspensivos (...) sirven para aceptar multiples entradas del mismo tipo 
    public function __construct(Libro $libro, Registro ...$registros)
    {
        $this->libro = $libro;
        $this->registros = $registros;
    }
}
?>