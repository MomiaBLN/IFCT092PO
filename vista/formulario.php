<?php
require_once("modelo/area.php");
require_once("modelo/grupo.php");
require_once("modelo/nivel.php");
require_once("modelo/categoria.php");
require_once("modelo/datos-categorias.php");
require_once("vista/plantillas/herramientas.php"); 
?>

<form action="index.php" method="GET">
<?php 
$data = [
    "nombreDelMenuDesplegableParaMostrar" => "Área",
    "nombreInternoDelMenuDesplegable" => "area",
    "listaDeElementosDelMenu" => [1, 2, 3, 4, 5, 6]
];
MostrarPlantilla("select", $data);
$data = [
    "nombreDelMenuDesplegableParaMostrar" => "Grupo",
    "nombreInternoDelMenuDesplegable" => "grupo",
    "listaDeElementosDelMenu" => ["A", "B", "C", "D", "E"]
];
MostrarPlantilla("select", $data);
$data = [
    "nombreDelMenuDesplegableParaMostrar" => "Nivel",
    "nombreInternoDelMenuDesplegable" => "nivel",
    "listaDeElementosDelMenu" => [1, 2, 3]
];
MostrarPlantilla("select", $data);
 ?>
    <button type="submit">Consultar</button>
</form>

<?php
if (!isset($_GET["area"])
    || !isset($_GET["grupo"])
    || !isset($_GET["nivel"]))
{
    return;
}

$valorArea = $_GET["area"];
$valorGrupo = $_GET["grupo"];
$valorNivel = $_GET["nivel"];

echo "Área: $valorArea => Grupo: $valorGrupo => Nivel: $valorNivel";

$areaConsulta = new Area($valorArea);
$grupoConsulta = new Grupo($valorGrupo);
$nivelConsulta = new Nivel($valorNivel);


?>