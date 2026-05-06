<?php
/*
	- class Experiencia (laboral o académica)
		- Fecha inicio
		- Fecha fin
		- Puesto
		- Lugar
		- Descripción
*/
class Experience
{
    public DateTime $startDate;
    public DateTime $endDate;
    public string $position;
    public string $location;
    public string $description;

    public function __construct(DateTime $startDate,
                                DateTime $endDate,
                                string $position,
                                string $location,
                                string $description)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->position = $position;
        $this->location = $location;
        $this->description = $description;
    }

    public function HasDescription() : bool
    {
        return isset($this->description)
        && !is_null($this->description)
        && strlen(trim($this->description)) > 0;
    }

    public function GetTotalTimeLapse() :  string
    {
        $interval = $this->endDate->diff($this->startDate);
        $format = "";

        if ($interval->y > 0)
        {
            $format .= '%y years';
        }

        if ($interval->m > 0)
        {
            $format .= ' %m months';
        }

        return trim($interval->format($format));
    }
}
?>