<?php
function MostrarPlantilla(string $nombreDePlantilla, array $data = [])
{
    extract($data);
    require("vista/plantillas/$nombreDePlantilla.php");
}
?>