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
				<td><a href = "img/Shellac/Shellac3.jpg" rel = "lightbox[shellac]" title="Shellac"><img alt="Shellac3" src="img/miniatury/Shellac/Shellac3.jpg"></a></td>
				<td><a href = "img/Shellac/Shellac4.jpg" rel = "lightbox[shellac]" title="Shellac"><img alt="Shellac4" src="img/miniatury/Shellac/Shellac4.jpg"></a></td>
			</tr>
			<tr>
				<td ><a href = "img/Shellac/Shellac5.jpg" rel = "lightbox[shellac]" title="Shellac"><img alt="Shellac5" src="img/miniatury/Shellac/Shellac5.jpg"></a></td>	
				<td><a href = "img/Shellac/Shellac6.jpg" rel = "lightbox[shellac]" title="Shellac"><img alt="Shellac6" src="img/miniatury/Shellac/Shellac6.jpg"></a></td>
			 	
			</tr>
			<tr>
				<td><a href = "img/Shellac/Shellac8.jpg" rel = "lightbox[shellac]" title="Shellac"><img alt="Shellac8" src="img/miniatury/Shellac/Shellac8.jpg"></a></td>	
			 	<td><a href = "img/Shellac/Shellac11.jpg" rel = "lightbox[shellac]" title="Shellac"><img alt="Shellac11" src="img/miniatury/Shellac/Shellac11.jpg"></a></td>
			 </tr>
			 <tr>
				<td><a href = "img/Shellac/Shellac9.jpg" rel = "lightbox[shellac]" title="Shellac"><img alt="Shellac9" src="img/miniatury/Shellac/Shellac9.jpg"></a></td>
				<td><a href = "img/Shellac/Shellac10.jpg" rel = "lightbox[shellac]" title="Vybaveni"><img alt="Shellac10" src="img/miniatury/Shellac/Shellac10.jpg"></a></td>
			</tr>
			<tr>
				<td><a href = "img/Shellac/Shellac7.jpg" rel = "lightbox[shellac]" title="Shellac"><img alt="Shellac7" src="img/miniatury/Shellac/Shellac7.jpg"></a></td>
			</tr>
		</table>
		
		';

include 'class/Sablona.class.php';
$sablona = new Sablona();
$sablona->zobraz($title, $description, $tags, $aktivni, $text);

?>