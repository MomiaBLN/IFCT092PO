<?php
class Contacto
{
    public string $mail;
    public string $direccion;
    public string $telefono;
    public $listaDeRedesSociales;

    public function __construct(string $mail,
                                string $direccion,
                                string $telefono,
                                $listaDeRedesSociales)
    {
        $this->mail = $mail;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->listaDeRedesSociales = $listaDeRedesSociales;
    }
}
?>