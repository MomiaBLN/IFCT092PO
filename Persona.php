<?php
class Persona
{
    public string $nombre;
    public int $edad;
    public string $colorFavorito;

    public function __construct(string $nombre, int $edad, string $colorFavorito)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->colorFavorito = $colorFavorito;
    }

    public function PersonaATexto() : string
    {
        return "$this->nombre ($this->edad) [$this->colorFavorito]";
    }
}
?>