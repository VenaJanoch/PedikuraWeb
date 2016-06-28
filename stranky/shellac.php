<?php

$title = 'Shellac';
$description = 'Shellac pedikura';
$tags = 'Pedikura, Plzen, Bory, Jana, Urbankova, Zizkova';

$aktivni = null;
$text = '<h2>Shellac</h2>	
		<table class = "tabulkaFotky" style = "margin-left:13%">
			<tr>
				<td><a href = "img/Shellac/Shellac1.jpg" rel = "lightbox[shellac]" title="Shellac"><img alt="Shellac1" src="img/miniatury/Shellac/Shellac1.jpg"></a></td>	
			 	<td><a href = "img/Shellac/Shellac2.jpg" rel = "lightbox[shellac]" title="Shellac"><img alt="Shellac2" src="img/miniatury/Shellac/Shellac2.jpg"></a></td>
			 </tr>
			 <tr>
				<td><a href = "img/Shellac/Shellac3.jpg" rel = "lightbox[shellac]" title="Vybaveni"><img alt="Shellac3" src="img/miniatury/Shellac/Shellac3.jpg"></a></td>
				<td><a href = "img/Shellac/Shellac4.jpg" rel = "lightbox[shellac]" title="Vybaveni"><img alt="Shellac4" src="img/miniatury/Shellac/Shellac4.jpg"></a></td>
			</tr>
			<tr>
				<td ><a href = "img/Shellac/Shellac5.jpg" rel = "lightbox[shellac]" title="Vybaveni"><img alt="Shellac5" src="img/miniatury/Shellac/Shellac5.jpg"></a></td>	
			</tr>
		</table>
		<br>
		';

include 'class/Sablona.class.php';
$sablona = new Sablona();
$sablona->zobraz($title, $description, $tags, $aktivni, $text);

?>