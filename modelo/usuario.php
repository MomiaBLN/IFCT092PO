<?php
class Usuario
{
    public string $id;
    public string $numeroDeIdentificacionPersonal;
    public Contacto $contacto;

    public function __construct(string $id,
                                string $numeroDeIdentificacionPersonal,
                                string $mail,
                                string $direccion,
                                string $telefono,
                                $listaDeRedesSociales)
    {
        $this->id = $id;
        $this->numeroDeIdentificacionPersonal = $numeroDeIdentificacionPersonal;
        $this->contacto = new Contacto($mail,
                                        $direccion,
                                        $telefono,
                                        $listaDeRedesSociales);
    }
}
?>