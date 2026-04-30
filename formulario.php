<form action="index.php" method="GET">
    Área: <select name="area">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>
    Grupo: <select name="grupo">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
    </select>
    Nivel: <select name="nivel">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
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

require_once("area.php");
$areaConsulta = new Area($valorArea);
require_once("grupo.php");
$grupoConsulta = new Grupo($valorGrupo);
require_once("nivel.php");
$nivelConsulta = new Nivel($valorNivel);


?>