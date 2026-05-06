<?php echo $controller->curriculum->personalInfo->name; ?>
<br/>
<?php echo sprintf('Contact: %s', $controller->curriculum->personalInfo->phone); ?>
<br/>
<?php echo $controller->curriculum->resume; ?>
<br/>
<br/>
<?php
foreach ($controller->curriculum->skills as $skill)
{
    echo sprintf('%s', $skill->name);
    if ($skill->HasLevel())
    {
        echo sprintf(' (%s)<br/>', $skill->level);
    }
    else
    {
        echo '<br/>';
    }
}
?>
<br/>
<?php
foreach ($controller->curriculum->experiences as $experience)
{
    echo sprintf('%1$s in %2$s for %3$s<br/>', $experience->position, $experience->location, $experience->GetTotalTimeLapse());
    if ($experience->HasDescription())
    {
        echo $experience->description . "<br/>";
    }
    echo "<br/>";
}
?>