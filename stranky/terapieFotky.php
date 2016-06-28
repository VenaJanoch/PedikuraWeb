<?php

$title = 'Foto Reflexni terapie';
$description = 'Fotogalerie pedikura';
$tags = 'Pedikura, Plzen, Bory, Jana, Urbankova, Zizkova';

$aktivni = null;
$text = '
		
		<table class = "tabulkaFotky" style = "margin-left:13%">
			<tr>
			 	<td><a href="index.php?web=stranky/pedikuraFotky"><img src = "img/logo3.png" alt = "Pedikura"></a></td>
			 	<td><a href="index.php?web=stranky/terapieFotky"><img src = "img/logo2.png" alt = "Reflexni terapiie"></a></td>
			 </tr>
			 <tr>
			 	<td><a href="index.php?web=stranky/pedikuraFotky" class="odkazMenu">Pedikúra</a></td>
			 	<td><a href="index.php?web=stranky/terapieFotky" class="odkazMenu">Reflexní terapie</a></td>
			 </tr>
			 <tr>
			 	<td><a href="index.php?web=stranky/zabalFotky"><img src = "img/logo3.png" alt = "Parafinovy zabal"></a></td>
			 	<td><a href="index.php?web=stranky/shellacFotky"><img src = "img/logo2.png" alt = "Shellac"></a></td>
			 </tr>
			 <tr>
			 	<td><a href="index.php?web=stranky/zabalFotky" class="odkazMenu">Parafínový zábal</a></td>
			 	<td><a href="index.php?web=stranky/shellacFotky" class="odkazMenu">Shellac</a></td>
			 </tr>
			</table>
		
		';

include 'class/Sablona.class.php';
$sablona = new Sablona();
$sablona->zobraz($title, $description, $tags, $aktivni, $text);

?>