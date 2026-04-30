<?php
class Nivel
{
    public int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function CompararNiveles(Nivel $otroNivel) : bool
    {
        return $this->id == $otroNivel->id;
    }
}
?>