<?php

$title = 'Aktuality';
$description = 'Aktuality pedikura';
$tags = 'Pedikura, Plzen, Bory, Jana, Urbankova, Zizkova';

$aktivni = null;
$text = '<div class = "vypln"><p>Informace připravujeme</p></div>';

include 'class/Sablona.class.php';
$sablona = new Sablona();
$sablona->zobraz($title, $description, $tags, $aktivni, $text);

?>