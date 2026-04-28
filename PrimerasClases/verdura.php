<?php
class Verdura
{
    public string $nombre;
    public int $id;
    public float $precio;

    public function __construct(string $nombre, int $id, float $precio)
    {
        $this->nombre = $nombre;
        $this->id = $id;
        $this->precio = $precio;
    }

    public function MeLoPermitir(float $cantidadDeDineroQueTengo) : bool
    {
        if ($cantidadDeDineroQueTengo >= $this->precio)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

$listaDeverduras = [
    new Verdura("Apio", 9823, 0.80),
    new Verdura("Col", 6734, 1),
    new Verdura("Cilantro", 9876, 0.30)
];

$dineroQueTengo = 0.80;

for ($i=0; $i < count($listaDeverduras); $i++) { 
    echo $listaDeverduras[$i]->nombre;

    if ($listaDeverduras[$i]->MeLoPermitir($dineroQueTengo))
    {
        echo " puedes... ";
    }
    else
    {
        echo " no puedes...";
    }
}
?>