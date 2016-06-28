<?php

$title = 'Parafínový zábal';
$description = 'Parafínový zábal pedikura';
$tags = 'Pedikura, Plzen, Bory, Jana, Urbankova, Zizkova';

$aktivni = null;
$text = '<h2>Parafínový zábal</h2>
		
		<p class = "vnitrekObsahu">Parafínový zábal je velmi příjemná a účinná aplikace teplého kosmetického parafínu na ruce i nohy, díky kterému dochází k hydrataci pokožky. Pokud máte kůži suchou, nechte si svoje končetiny ošetřit teplým parafínem, který také prohřeje svaly a klouby. Parafín je speciální vosk obohacený o vitamín E, který se vyrábí z ropy. Využívá se pro své fyzikální vlastnosti, které spočívají v tom, že zahřátý parafín tuhnutím uvolňuje velké množství tepla.
		Toto teplo je jednou z forem pozitivní termoterapie.</p>
		
		<p class = "vnitrekObsahu">Účinky parafínového zábalu:</p>
		<ul class = "seznamObsah">
			<li>Zlepšuje prokrvení pokožky</li>
			<li>Zjemňuje pokožku</li>
			<li>Uvolňuje svaly a klouby</li>
			<li>Prohřívá pokožku</li>
			<li>Vyživuje a zpevňuje nehty</li>
			<li>Má omlazující účinek</li>
			<li>Zesvětluje pigmentové skvrny</li>
		
		</ul>
		<p class = "vnitrekObsahu">Zábal je velmi účinný pro vysušenou, popraskanou kůži a současně je výživný i pro nehty.  Aplikace zábalu není nijak omezena ani věkem ani pohlavím. Doporučuje se zábal aplikovat alespoň jednou měsíčně.</p>
		<h2>Co vás čeká?</h2>
		<p class = "vnitrekObsahu">Parafínový zábal – umyté končetiny ošetříme pomocí peelingového krému, odstraní se tak odumřelé šupinky kůže, následně se na končetiny nanese hydratační krém nebo mléko pro zjemnění pokožky a lepší otevření pórů kůže k vstřebání tepla z parafínového vosku. Následuje ponoření končetin do parafínové lázně, kde je parafín rozpuštěn s parafínovým olejem o teplotě asi 55 stupňů. Po opakovaném ponoření se ošetřená oblast překryje igelitem a zabalí do froté ručníku. Zhruba po 15-20 min odezní pocit tepla a zábal je jednoduchým způsobem sňat, končetiny jsou po aplikaci jemné a hydratované. Celá aplikace trvá zhruba 30 minut.</p>
		<p class = "vnitrekObsahu">Výsledkem je jemná, hydratovaná a na první pohled mladistvější pokožka.</p>
		';

include 'class/Sablona.class.php';
$sablona = new Sablona();
$sablona->zobraz($title, $description, $tags, $aktivni, $text);

?>