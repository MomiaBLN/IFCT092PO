<?php
class Grupo
{
    public string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function CompararGrupos(Grupo $otroGrupo) : bool
    {
        return $this->id == $otroGrupo->id;
    }
}
?>