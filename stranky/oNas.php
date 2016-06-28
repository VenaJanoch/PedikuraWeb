<?php

$title = 'O nás';
$description = 'O nás pedikura';
$tags = 'Pedikura, Plzen, Bory, Jana, Urbankova, Zizkova';

$aktivni = null;
$text = '
		<h2>Moje služby a rady</h2>
		<p class = "vnitrekObsahu">Rádi bychom Vám nabídli své služby. Pedikúra je procedura zabývající se péčí a prevencí
		o Vaše nohy i chodidla. Je to příjemná, pohodlná a relaxační péče, která je pro nohy velice doporučována,
		neboť jsou Vaše nohy dennodenně namáhány. Přes den jsou uzavřené v botách, celý den jsou zatěžovány,
		v důsledku toho se na chodidlech objevují otlaky, puchýře, suché a rozpraskané paty, dermatomykózy.
		Proto si Vaše nohy zaslouží důkladnou péči alespoň jedenkrát v měsíci, která může dopomoct k zahojení puchýřů, mozolů
		a zklidnění četných otlaků.
		K našim nabízeným službám zejména patří péče o Vaše unavená chodidla a jejich regeneraci formou mokré pedikúry,
		další péče jako zábaly, reflexní terapie a masáž nebo úpravy nehtů je na Vaší volbě, potřebě a vkusu.</p>
		<hr>
		<h2>Kontakt</h2>
		<ul class = "seznamObsah">
			<li>Tel.: +420 736 420 127</li>
			<li>Email: urbankova1234@gmail.com</li>
			<li>Adresa:</li>
				<ul>
						<li>Plzeň Žižkova 2491/66 </li>
						<li>Měcholupy 54,335 01 Nepomuk</li>
		
				</ul>
			<li>Otevírací doba</li>
				<ul>
						<li>Po-Pá: 8-18 hod</li>
						<li>Dle objednávek</li>
		
				</ul>
		
		</ul>
		<hr>
		<h2>Kde nás najdete</h2>
		
		<p class = "vnitrekObsahu">Sídlím v ulici <b>Žižkova 2491/66, 30100 Plzeň, Jižní Předměstí. </b>
Bývalý hotel Plzeň Bory naproti rozhlasu. </p>
		<table style = "margin-left:10%">
			 <tr>
			 	<td><a href = "img/mapa.png" rel = "lightbox[mapa]" title="Mapa s polohou"><img alt="UmisteniMapa" src="img/miniatury/mapa.png"> </a></td>
			 	<td><a href = "img/umisteni.jpg" rel = "lightbox[mapa]" title="Umisteni studia"><img alt="Umisteni" src="img/miniatury/umisteni.jpg"></a></td>
			 </tr>
			</table>
		
		<hr>
		<h2>Vybavení</h2>
		<table style = "margin-left:30%">
			 <tr>
			 	<td><a href = "img/Vybaveni1.jpg" rel = "lightbox[vybaveni]" title="Kreslo"><img alt="Vybaveni1" src="img/miniatury/Vybaveni1.jpg"></a></td>
				<td><a href = "img/Vybaveni2.jpg" rel = "lightbox[vybaveni]" title="Vybaveni"><img alt="Vybaveni2" src="img/miniatury/Vybaveni2.jpg"></a></td>	
			 	
			 </tr>
			</table>
		<br>
		';

include 'class/Sablona.class.php';
$sablona = new Sablona();
$sablona->zobraz($title, $description, $tags, $aktivni, $text);

?>