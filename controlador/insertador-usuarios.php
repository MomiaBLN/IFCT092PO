<?php
class InsertadorUsuarios
{
    public string $nombreTabla = "usuarios";
    public PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function InsertarUsuario (Usuario $usuario)
    {
        $pid = $usuario->numeroDeIdentificacionPersonal;
        $mail = $usuario->contacto->mail;
        $telefono = $usuario->contacto->telefono;
        $direccion = $usuario->contacto->direccion;
        $listaDeRedesSociales =  $usuario->contacto->listaDeRedesSociales;

        $sql = "INSERT INTO $this->nombreTabla (numero_identificacion_personal, contacto_mail, contacto_telefono, contacto_direccion, contacto_redes_sociales)".
        "VALUES (\"$pid\", \"$mail\", \"$telefono\", \"$direccion\", \"$listaDeRedesSociales\")";

        $respuesta = $this->pdo->exec($sql);
    }
}
?>