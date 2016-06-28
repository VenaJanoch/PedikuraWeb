<?php

$title = 'Úvodni stránka';
$description = 'Uvodni stranka pedikura';
$tags = 'Pedikura, Plzen, Bory, Jana, Urbankova, Zizkova';

$aktivni = null;
$text = '<h2 class="Registrace">Vážení zákazníci vítejte na našich stránkách</h2>
		 <h3> Pedikúra Jana Urbánková Plzeň - Bory</h3>
		 <p class = "textUvod">Pedikúra je pohodlná a relaxační péče, která je pro nohy velice doporučována.</p>
		 <img alt = "Ukazka pece" src ="img/misa.jpg" class = "obrazekUvod">
		<p class = "vnitrekObsahu">Nabízíme služby pedikérské, klasickou mokrou pedikúru spojenou s masáží chodidel, reflexní terapii chodidel, parafínové zábaly na ruce a nohy, nehtovou modeláž. Aplikace klasických nebo gelových laků Shellac a Q-lac.<p>
		
		';

include 'class/Sablona.class.php';
$sablona = new Sablona();
$sablona->zobraz($title, $description, $tags, $aktivni, $text);

?>