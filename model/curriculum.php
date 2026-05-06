<?php
/*
	- class CV
		- Resumen
		- Datos Personales
		- Habilidades
		- Experiencias
*/
class Curriculum
{
    //Pequeño resumen de quiénes somos y por qué nos interesa el puesto
    public string $resume;
    //Datos personales como nombre, formas de contacto...
    public PersonalInfo $personalInfo;
    //Experiencias laborales relacionadas, estudios...
    public $experiences;
    //Habilidades relevantes para el puesto
    public $skills;

    public function __construct(string $resume, PersonalInfo $personalInfo, $experiences, $skills)
    {
        $this->resume = $resume;
        $this->personalInfo = $personalInfo;
        $this->experiences = $experiences;
        $this->skills = $skills;
    }
}
?>