<?php
/*
	- class Habilidad
		- Nombre
		- Nivel
*/
class Skill
{
    public string $name;
    public string $level;

    public function __construct(string $name, string $level)
    {
        $this->name = $name;
        $this->level = $level;
    }

    public function HasLevel() : bool
    {
        return isset($this->level)
        && !is_null($this->level)
        && strlen(trim($this->level)) > 0;
    }
}
?>