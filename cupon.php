<?php
class Cupon
{
    public int $minimoNumero = 1;
    public int $maximoNumero = 50;

    public $numerosDeLoteria;

    public function __construct(int $numero1,
                                int $numero2,
                                int $numero3,
                                int $numero4,
                                int $numero5)
    {
        if (!$this->SonNumerosUnicos($numero1, $numero2, $numero3, $numero4, $numero5))
        {
            echo "Todos los números deben ser diferentes. <br/>";
        }

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
            if ($this->numerosDeLoteria[$i] > $this->maximoNumero)
            {
                echo "Todos los números deben ser menores que $this->maximoNumero <br/>";
            }
        }
    }

    public function SonNumerosUnicos(int $numero1, int $numero2, int $numero3,
                                    int $numero4, int $numero5  ) 
                                    : bool
    {
        $numerosDeLoteria = [$numero1, $numero2, $numero3, $numero4, $numero5 ];

        for($i = 0; $i < count($numerosDeLoteria); $i++)
        {
            //Comparamos con los anteriores en un bucle y si se repite, es falso
            for($e = 0; $e < $i; $e++)
            {
                if ($numerosDeLoteria[$i] == $numerosDeLoteria[$e])
                {
                    return false;
                }
            }
        }
        return true;
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

    public function CrearCuponAleatorio() : Cupon
    {
        $listaAleatoria = [0, 0, 0, 0, 0];
        do
        {
            $listaAleatoria[0] = random_int($this->minimoNumero, $this->maximoNumero);
            $listaAleatoria[1] = random_int($this->minimoNumero, $this->maximoNumero);
            $listaAleatoria[2] = random_int($this->minimoNumero, $this->maximoNumero);
            $listaAleatoria[3] = random_int($this->minimoNumero, $this->maximoNumero);
            $listaAleatoria[4] = random_int($this->minimoNumero, $this->maximoNumero);
        } while (!$this->SonNumerosUnicos($listaAleatoria[0], $listaAleatoria[1],
                                            $listaAleatoria[2], $listaAleatoria[3],
                                            $listaAleatoria[4]));

         $cuponAleatorio = new Cupon($listaAleatoria[0], $listaAleatoria[1],
                                            $listaAleatoria[2], $listaAleatoria[3],
                                            $listaAleatoria[4]);
        return $cuponAleatorio;
    }

    public function CuponATexto() : string
    {
        return $this->numerosDeLoteria[0] . ", " . $this->numerosDeLoteria[1] . ", " . $this->numerosDeLoteria[2] . ", " . $this->numerosDeLoteria[3] . ", " . $this->numerosDeLoteria[4];
    }
}
?>