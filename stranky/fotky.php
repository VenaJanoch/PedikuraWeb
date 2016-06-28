<?php
$title = 'Fotogalerie';
$description = 'Fotogalerie pedikura';
$tags = 'Pedikura, Plzen, Bory, Jana, Urbankova, Zizkova';

$aktivni = null;
$text = '
		<h1>Interiér</h1>
		<table class = "tabulkaFotky" style = "margin-left:13%">
			<tr>
				<td><a href = "img/Vybaveni2.jpg" rel = "lightbox[vybaveni]" title="Vybaveni"><img alt="Vybaveni2" src="img/miniatury/Vybaveni2.jpg"></a></td>	
			 	<td><a href = "img/Interier1_1.jpg" rel = "lightbox[vybaveni]" title="Vybaveni"><img alt="Vybaveni1" src="img/miniatury/Interier1.jpg"></a></td>
			 </tr>
			 <tr>
				<td><a href = "img/Interier3_3.jpg" rel = "lightbox[vybaveni]" title="Vybaveni"><img alt="Vybaveni1" src="img/miniatury/Interier3.jpg"></a></td>
				<td><a href = "img/Interier4_4.jpg" rel = "lightbox[vybaveni]" title="Vybaveni"><img alt="Vybaveni2" src="img/miniatury/Interier4.jpg"></a></td>
			</tr>
			<tr>
				<td ><a href = "img/Interier2_2.jpg" rel = "lightbox[vybaveni]" title="Vybaveni"><img alt="Vybaveni2" src="img/miniatury/Interier2.jpg"></a></td>	
			</tr>
		</table>
		
		 <hr>
		<h1>Ukázky práce</h1>
		<h2>Shellac</h2>	
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
		
		
		
		<!--
		<table class = "tabulkaFotky" style = "margin-left:13%">
			<tr>
			 	<td><a href="index.php?web=stranky/pedikuraFotky"><img src = "img/logo3.png" alt = "Pedikura"></a></td>
			 	<td><a href="index.php?web=stranky/terapieFotky"><img src = "img/logo2.png" alt = "Reflexni terapiie"></a></td>
			 </tr>
			 <tr>
			 	<td><a href="index.php?web=stranky/pedikuraFotky" class="odkazMenu">Pedikúra</a></td>
			 	<td><a href="index.php?web=stranky/terapieFotky" class="odkazMenu">Reflexní terapie</a></td>
			 </tr>
		-->
		</table>
		<br>
		
		';

include 'class/Sablona.class.php';
$sablona = new Sablona ();
$sablona->zobraz ( $title, $description, $tags, $aktivni, $text );

?>