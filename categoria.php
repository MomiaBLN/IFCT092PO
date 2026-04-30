<?php
class Categoria
{
    public Area $area;
    public Grupo $grupo;
    public Nivel $nivel;
    public float $salario;

    public function __construct(Area $area, Grupo $grupo, Nivel $nivel, float $salario)
    {
        $this->area = $area;
        $this->grupo = $grupo;
        $this->nivel = $nivel;
        $this->salario = $salario;
    }
}