<?php require_once("vista/plantillas/herramientas.php"); ?>

<form action="index.php" method="GET" name="formulario">
<?php 
$data = [
    "nombreDelMenuDesplegableParaMostrar" => "Área",
    "nombreInternoDelMenuDesplegable" => "area",
    "listaDeElementosDelMenu" => $controlador->ObtenerAreasDisponibles()
];
MostrarPlantilla("select", $data);
$data = [
    "nombreDelMenuDesplegableParaMostrar" => "Grupo",
    "nombreInternoDelMenuDesplegable" => "grupo",
    "listaDeElementosDelMenu" => $controlador->ObtenerGruposDisponibles()
];
MostrarPlantilla("select", $data);
$data = [
    "nombreDelMenuDesplegableParaMostrar" => "Nivel",
    "nombreInternoDelMenuDesplegable" => "nivel",
    "listaDeElementosDelMenu" => $controlador->ObtenerNivelesDisponibles()
];
MostrarPlantilla("select", $data);
 ?>
    <button type="submit">Consultar</button>
</form>
<?php echo $controlador->ConsultarSalario(); ?>