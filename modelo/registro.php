<?php
class Registro
{
    public Usuario $usuario;
    public DateTime $fechaDeSalida;
    public DateTime $fechaDeEntrada;
    
    public function __construct(Usuario $usuario, DateTime $fechaDeSalida, DateTime $fechaDeEntrada)
    {
        $this->usuario = $usuario;
        $this->fechaDeSalida = $fechaDeSalida;
        $this->fechaDeEntrada = $fechaDeEntrada;
    }
}
?>