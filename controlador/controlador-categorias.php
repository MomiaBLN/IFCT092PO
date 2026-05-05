<?php
class ControladorCategorias
{
    public $listaDeCategorias;
    public int $areaId;
    public string $grupoId;
    public int $nivelId;

    public function __construct($listaDeCategorias)
    {
        $this->listaDeCategorias = $listaDeCategorias;
    }

    public function ObtenerAreasDisponibles()
    {
        $listaDeIdsDeAreas = [];

        foreach ($this->listaDeCategorias as $categoria)
        {
            if (in_array($categoria->area->id, $listaDeIdsDeAreas))
            {
                continue;
            }
            
            $listaDeIdsDeAreas[] = $categoria->area->id;
        }

        return $listaDeIdsDeAreas;
    }

    public function ObtenerGruposDisponibles()
    {
        if (!isset($_GET["area"])) {
            return [];
        }

        $this->areaId = $_GET["area"];
        
        $listaDeIdsDeGrupos = [];
        foreach ($this->listaDeCategorias as $categoria)
        {
            if ($categoria->area->id == $this->areaId
                && !in_array($categoria->grupo->id, $listaDeIdsDeGrupos))
            {
                $listaDeIdsDeGrupos[] = $categoria->grupo->id;
            }
        }

        return $listaDeIdsDeGrupos;
    }
    
    public function ObtenerNivelesDisponibles()
    {
        if (!isset($_GET["grupo"]))
        {
            return [];
        }

        $this->grupoId = $_GET["grupo"];

        $listaDeIdsDeNiveles = [];
        foreach ($this->listaDeCategorias as $categoria)
        {
            if ($categoria->area->id == $this->areaId
                && $categoria->grupo->id == $this->grupoId
                && !in_array($categoria->grupo->id, $listaDeIdsDeNiveles))
            {
                $listaDeIdsDeNiveles[] = $categoria->nivel->id;
            }
        }

        return $listaDeIdsDeNiveles;
    }

    public function ConsultarSalario() : string
    {
        if (!isset($_GET["nivel"]))
        {
            return "Nivel no incluido...";
        }

        $this->nivelId = $_GET["nivel"];
        foreach ($this->listaDeCategorias as $categoria)
            {
            if ($categoria->area->id == $this->areaId
                && $categoria->grupo->id == $this->grupoId
                && $categoria->nivel->id == $this->nivelId)
                {
                return $categoria->salario;
            }
        }
        return "Salario no disponible...";
    }
}
?>