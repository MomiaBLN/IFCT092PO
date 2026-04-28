<?php
class Cupon
{
    public int $minimoNumero = 1;
    public int $maximoNumero = 50;

    public $numerosDeLoteria;

    public function __construct(
                                int $numero1,
                                int $numero2,
                                int $numero3,
                                int $numero4,
                                int $numero5)
    {
        $this->numerosDeLoteria = [
            $numero1,
            $numero2,
            $numero3,
            $numero4,
            $numero5
            ];

        for($i = 0; $i < count($this->numerosDeLoteria); $i++)
        {
            //Si es menor que el mínimo, no vale
            if ($this->numerosDeLoteria[$i] < $this->minimoNumero)
            {
                echo "Todos los números deben ser mayores que $this->minimoNumero <br/>";
            }
            //Si es mayor que el máximo, no vale
            if($this->numerosDeLoteria[$i] > $this->maximoNumero)
            {
                echo "Todos los números deben ser menores que $this->maximoNumero <br/>";
            }
            //Si se repite, no vale
            //Comparamos con los anteriores en un bucle
            for($e = 0; $e < $i; $e++)
            {
                if($this->numerosDeLoteria[$i] == $this->numerosDeLoteria[$e])
                {
                    echo "Todos los números deben ser diferentes. <br/>";
                }
            }
        }
    }

    public function CompararCupones(Cupon $otroCupon) : bool
    {
        $numerosAcertados = 0;
        for ($i = 0; $i < count($this->numerosDeLoteria); $i++)
        {
            for ($e = 0; $e < count($otroCupon->numerosDeLoteria); $e++)
            {
                if ($this->numerosDeLoteria[$i] ==  $otroCupon->numerosDeLoteria[$e])
                {
                    $numerosAcertados = $numerosAcertados + 1;
                }
            }
        }

        return $numerosAcertados == 5;
    }
}
?>