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

    public function RestanteHastaElSiglo() : string
    {
        if ($this->edad >= 100)
        {
            return '¡Enhorabuena! ¡Por otros cien!';
        }
        else
        {
            $restanteHastaElSiglo = 100 - $this->edad;
            return "Te quedan $restanteHastaElSiglo para cumplir 100.";
        }
    }

    public function ResponderAlColor() : string
    {
        if ($this->colorFavorito == "Azul")
        {
            return "Como el agua clara que abaja der monte";
        }
        else if ($this->colorFavorito == "Rojo")
        {
            return "Como las rosas rojas";
        }
        else if ($this->colorFavorito == "Morado")
        {
            return "¡Me gusta tu estilo!";
        }
        else
        {
            return "¡La vida es de colores!";
        }
    }
}
?>