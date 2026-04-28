<?php
class Producto
{
    public string $nombre;
    public string $id;
    public string $descripcion;
    public int $cantidad;
    public string $fechaDeCaducidad;

    public function __construct(string $nombre, string $id)
    {
        $this->nombre = $nombre;
        $this->id = $id;
    }
}
$primerProducto = new Producto("papa", 6789);
echo $primerProducto->nombre;
echo " - ";
echo $primerProducto->id;

$listaProductosNueva = [
    new Producto("rúcula", 23432),
    new Producto("champú", 8232)
];
?>