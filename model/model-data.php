<?php
$myResume = "+10 years of experience as game dev";
$myPersonalInfo = new PersonalInfo("Iván Cerezo Vivas", 2);

$myExperiences = [
    new Experience(DateTime::createFromFormat('d/m/Y', '14/12/2020'),
                    DateTime::createFromFormat('d/m/Y', '14/12/2025'),
                    "Game dev",
                    "Supersolid",
                    "Started maintaining projects for 6 months and moved to lead Cook&Merge with a team of up to 6 devs."),
    new Experience(DateTime::createFromFormat('d/m/Y', '03/08/2020'),
                    DateTime::createFromFormat('d/m/Y', '14/12/2020'),
                    "Game dev",
                    "Voxel Labs",
                    "Developed a work for hire educational game for PC"),
    new Experience(DateTime::createFromFormat('d/m/Y', '01/09/2007'),
                    DateTime::createFromFormat('d/m/Y', '14/06/2011'),
                    "Magisterio de Primaria",
                    "Universidad de Huelva",
                    "It took one extra year cause I worked and studied at the same and took the opportunity to learn some Deutch"
                    )
];
$mySkills = [
    new Skill("Español", "Native"),
    new Skill("English", "B2 - certified"),
    new Skill("Mentoring", " ")
];

$myCV = new Curriculum($myResume, $myPersonalInfo, $myExperiences, $mySkills);
?>