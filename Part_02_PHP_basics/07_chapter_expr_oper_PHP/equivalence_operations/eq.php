<?php ## Операторы равенства и эквивалентности.
    $yep = array("реальность", true);
    $nein = array("реальность", "иллюзорна");
    if ($yep == $nein) echo "Два массива равны";
    if ($yep === $nein) echo "Два массива эквивалентны";
?>