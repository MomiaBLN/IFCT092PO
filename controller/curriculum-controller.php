<?php
class CurriculumController
{
    public Curriculum $curriculum;

    public function __construct(Curriculum $curriculum)
    {
        $this->curriculum = $curriculum;
    }
}
?>