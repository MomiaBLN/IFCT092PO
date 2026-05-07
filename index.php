<?php
require_once ("constants.php");
require_once ("movie-controller.php");
?>


<h1><?php echo $title;?></h1>
<p><?php echo "Estreno el día $release_date";?></p>
<br/>
<img src=<?php echo $poster_url;?> alt="Poster de <?php echo $title;?>" height="256">
<p><?php echo $overview;?></p>
