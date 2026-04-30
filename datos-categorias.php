<?php
$listaDeAreas =
[
    new Area(1),
    new Area(2),
    new Area(3),
    new Area(4),
    new Area(5),
    new Area(6)
];
$listaDeGrupos =
[
    new Grupo("A"),
    new Grupo("B"),
    new Grupo("C"),
    new Grupo("D"),
    new Grupo("E")
];
$listaDeNiveles =
[
    new Nivel(1),
    new Nivel(2),
    new Nivel(3)
];

$listaDeCategorias =
[
    new Categoria($listaDeAreas[2], $listaDeGrupos[3], $listaDeNiveles[0], 20436.01),
    new Categoria($listaDeAreas[2], $listaDeGrupos[3], $listaDeNiveles[1], 18917.21),
    new Categoria($listaDeAreas[2], $listaDeGrupos[3], $listaDeNiveles[2], 18542.34)
];
?>