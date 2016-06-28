<?php

$title = 'Ceník';
$description = 'Cenik pedikura';
$tags = 'Pedikura, Plzen, Bory, Jana, Urbankova, Zizkova';

$aktivni = null;
$text = '
		<h3>Ceník služeb</h3>
		<table class = "tabulkaCenik">
	<tr>
		<th class="tabRadek1Ukon">Úkon</th>
		<th class="tabRadek1Cena">Cena</th>
	</tr>
	<tr>
		<td class="tabRadek2Ukon">Mokrá pedikúra   /klasik/ </td>
		<td class="tabRadek2Cena">230,- kč</td>
	</tr>
	<tr>
		<td class="tabRadek1Ukon">Pedikúra Footlogix   /medicinální/</td>
		<td class="tabRadek1Cena">480,- kč</td>
	</tr>
	
	</table>
	
		<h3>Lakování nehtů</h3>
	
			<table class = "tabulkaCenik">
	<tr>
		<th class="tabRadek1Ukon">Úkon</th>
		<th class="tabRadek1Cena">Cena</th>
	</tr>
	<tr>
		<td class="tabRadek2Ukon">Oriflame</td>
		<td class="tabRadek2Cena">60,- kč</td>
	</tr>
	<tr>
		<td class="tabRadek1Ukon">CND Vinylux</td>
		<td class="tabRadek1Cena">95,- kč</td>
	</tr>
	<tr>
		<td class="tabRadek2Ukon">Gelový lak - CND Shellac   /tvrzený v LED lampě/</td>
		<td class="tabRadek2Cena">330,- kč</td>
	</tr>
	</table>
    
	<h3>Balíčky</h3>
	
			<table class = "tabulkaCenik">
	<tr>
		<th class="tabRadek1Ukon">Úkon</th>
		<th class="tabRadek1Cena">Cena</th>
	</tr>
	<tr>
		<td class="tabRadek2Ukon">Pedikúra /klasik/ + Shellac</td>
		<td class="tabRadek2Cena">510,- kč</td>
	</tr>
	
	<tr>
		<td class="tabRadek1Ukon">Pedikúra /Footlogix/ + Shellac</td>
		<td class="tabRadek1Cena">740,- kč</td>
	</tr>
	<tr>
		<td class="tabRadek2Ukon">Pedikúra /klasik/ + Parafínový zábal /ruce/</td>
		<td class="tabRadek2Cena">315,- kč</td>
	</tr>
	<tr>
		<td class="tabRadek1Ukon">Pedikúra /Footlogix/ + Parafínový zábal /ruce/</td>
		<td class="tabRadek1Cena">550,- kč</td>
	</tr>
	</table>
	
	<h3>Další péče</h3>
	
			<table class = "tabulkaCenik">
	<tr>
		<th class="tabRadek1Ukon">Úkon</th>
		<th class="tabRadek1Cena">Cena</th>
	</tr>
	<tr>
		<td class="tabRadek2Ukon">Parafínový zábal</td>
		<td class="tabRadek2Cena">120,- kč</td>
	</tr>
	<tr>
		<td class="tabRadek1Ukon">Reflexní masáž chodidel</td>
		<td class="tabRadek1Cena">250,- kč</td>
	</tr>
	</table>	
		
	<h3>Odstranění</h3>
	
			<table class = "tabulkaCenik">
	<tr>
		<th class="tabRadek1Ukon">Úkon</th>
		<th class="tabRadek1Cena">Cena</th>
	</tr>
	<tr>
		<td class="tabRadek2Ukon">Lak</td>
		<td class="tabRadek2Cena">30,- kč</td>
	</tr>
	<tr>
		<td class="tabRadek1Ukon">Cnd Shellac</td>
		<td class="tabRadek1Cena">80,- kč</td>
	</tr>
	</table>
    <h3>Zdobení</h3>
	
			<table class = "tabulkaCenik">
	<tr>
		<th class="tabRadek1Ukon">Úkon</th>
		<th class="tabRadek1Cena">Cena</th>
	</tr>
	<tr>
		<td class="tabRadek2Ukon">Dle náročnosti a použitého materiálu</td>
		<td class="tabRadek2Cena">30,- až 80,-  kč</td>
	</tr>
	
	</table>
	
	<h3>Ostatní</h3>
	
			<table class = "tabulkaCenik">
	<tr>
		<th class="tabRadek1Ukon">Úkon</th>
		<th class="tabRadek1Cena">Cena</th>
	</tr>
	<tr>
		<td class="tabRadek2Ukon">Odstranění kuřího oka</td>
		<td class="tabRadek2Cena">20,- kč</td>
	</tr>
	</table>	
		<br>
		';
include 'class/Sablona.class.php';
$sablona = new Sablona();
$sablona->zobraz($title, $description, $tags, $aktivni, $text);

?>
