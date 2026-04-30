<?php
class Area
{
    public int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function CompararAreas(Area $otraArea) : bool
    {
        return $this->id == $otraArea->id;
    }
}
?>