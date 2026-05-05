<?php
echo "$nombreDelMenuDesplegableParaMostrar: ";
echo "<select name=\"$nombreInternoDelMenuDesplegable\">";
for ($i = 0; $i < count($listaDeElementosDelMenu); $i++)
{
echo "<option value=\"$listaDeElementosDelMenu[$i]\">$listaDeElementosDelMenu[$i]</option>";
}
echo "</select>";
?>