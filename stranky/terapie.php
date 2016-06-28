<?php

$title = 'Reflexní terapie';
$description = 'Reflexní terapie pedikura';
$tags = 'Pedikura, Plzen, Bory, Jana, Urbankova, Zizkova';

$aktivni = null;
$text = '<h2>Reflexní terapie a masáž plosek nohou</h2>
		<p class = "vnitrekObsahu"> Reflexní terapie je přírodní léčebná metoda, považována za cca 5 tisíc let starou metodu jako akupunktura. Vychází z toho, že na chodidlech jsou nervová zakončení všech lidských orgánů. Zakončení najdete i jinde na těle – uši, ruce…, ale největší citlivost mají tyto zakončení právě na chodidlech. Nervová zakončení reagují
		na podněty a prozradí svojí citlivostí jakýkoliv problém ve Vašem těle a funkčnost daného orgánu. </p>
		<p class = "vnitrekObsahu">Reflexní terapie Vám obnoví  životní energie ve Vašem těle, odplaví z organismu škodlivé a přisune obranné látky. Zmenší bolesti a zdravotní problémy daného orgánu. Odstraní nejen psychický blok, což má vliv na funkci a spolupráci celého organismu. Reflexní terapie se používá při léčbě poúrazových stavů, zažívacích potížích, bolesti zad a páteře, neplodnosti, migrény, únavového syndromu, poruchy spánku a kloubních potížích. Dále je také používána jako účinná pomoc v boji s chronickými a akutními onemocněními.
Léčba reflexní terapií  je vhodná pro všechny věkové kategorie, od malých dětí až po seniory, i v těhotenství  je příjemné a velice doporučováno docházet na reflexní terapii.
Reflexní terapie se nesmí provádět po transplantaci orgánů, kdy by mohla svým působením způsobit negativní  imunitní reakci organismu a způsobila by tak  komplikaci s přijetím transplantovaného orgánu.
		</p>
		<p class = "vnitrekObsahu">Léčba reflexní terapii se většinou skládá z více sezení, jejich počet ovlivní stav  klienta i reakce na terapii. Platí, že délku léčby ovlivní doba,  po kterou problém klienta trápí. Čím déle, tím delší léčbu si jeho stav vyžádá. Zpočátku je lépe docházet na terapii i několikrát týdně pro nastartování procesu léčby. Po nějakém čase léčby může klient navštěvovat terapii  jednou týdně. Vše záleží na potřebách a pocitech klienta. Zlepšení je postupné, počet návštěv se dle toho reguluje.
Po odeznění problémů se klient rozhoduje,  zda pokračovat. Doporučuje se  jednou měsíčně - k dosažení  tělesné  i duševní rovnováhy, ta je v současné uspěchané době velice důležitá.
		</p>
		<p class = "vnitrekObsahu">První reakce na léčbu mohou být různé. Někdo se cítí skvěle uvolněný, plný elánu a energie, někdo naopak. Je důležité si zapamatovat, že nepříjemná reakce netrvá dlouho. Je to znamení, že se tělo probudilo a začalo s regenerací.  Po ukončení léčby se klient bude cítit více zdráv. Reakce na terapii  jsou individuální. Čím starší nemoc, tím těžší cesta ke zdraví. Stává se, že se objeví  již dávno zapomenuté nemocí. Další problémy může být zvýšená únava, častější stolice, nadýmání, nervozita, zvýšené pocení, ekzémy, bolesti hlavy a rýma, občas horečka, neklidný a krátký spánek, bolest zubů, u žen se může objevit výtok a při potížích s páteří se po úlevě může stav dočasně zase zhoršit. Je třeba nezapomenout, že změna stavu upozorňuje, že byly aktivovány vnitřní léčivé síly těla a to začalo vylučovat škodlivé látky.
		Je dobré tento dočasný stav vydržet a  vychutnat si poté odměnu … zdraví a psychickou pohodu.</p>
		<h3>Průběh procedury</h3>
		<p class = "vnitrekObsahu">Při první návštěvě provedeme diagnostiku reflexních bodů. Najdeme energeticky oslabené orgány a oblasti těla. Definujeme příčiny Vašich problémů. Příčiny nemusí (většinou také nejsou) přímo v nemocném orgánu, ale někde jinde (například bolesti kolen mívají příčinu v ledvinách nebo žlučníku). Od výsledku diagnostiky se odvíjí následný postup a intenzita terapie při dalších návštěvách.
Na základě diagnostiky následuje vlastní reflexní masáž plosek nohou.</p>
		<p class = "vnitrekObsahu"> Při masáži provádíme uvolnění krční páteře a  uvolnění celých zad. Při tom dochází k obnovení toku energie, lymfy i krve, tím se urychluje a umocňuje regenerace organismu. Tato část terapie přináší výraznou úlevu a příjemné celkové uvolnění.
Je důležité vědět, že pro větší efekt terapie je dobrá vaše aktivní spolupráce. Vy sami (nebo někdo z vašich blízkých) budete pravidelně ošetřovat některé reflexní plošky. Skutečnost,  že se i vy zapojíte do léčby, bude znamenat výrazný vliv na celkový účinek terapie.
		</p>
		
		';

include 'class/Sablona.class.php';
$sablona = new Sablona();
$sablona->zobraz($title, $description, $tags, $aktivni, $text);

?>