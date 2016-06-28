<?php

$title = 'Pedikúra';
$description = 'Pedikura';
$tags = 'Pedikura, Plzen, Bory, Jana, Urbankova, Zizkova';

$aktivni = null;
$text = '<h2>Mokrá pedikúra</h2>
		<p class = "vnitrekObsahu">Procedura zabývající se péčí a relaxací nohou i chodidel. Je příjemná, pohodlná a uvolňující, proto je velice doporučována. Vzhledem k tomu, že jsou Vaše nohy dennodenně namáhány a zatěžovány. V důsledku toho se na chodidlech objevují otlaky, puchýře, suché a rozpraskané paty, a různé nemoci - dermatomykózy, případně kuří oka a bradavice, zarůstající nehty. Vzhledem k zátěži si Vaše nohy zaslouží důkladnou péči a relaxaci alespoň jedenkrát v měsíci, pedikúra může dopomoct k zahojení puchýřů a mozolů a zklidnění četných otlaků nebo problémů.

		</p><p class = "vnitrekObsahu">Procedura začíná koupelí nohou v lázni se změkčující solí, tato koupel trvá přibližně 10 – 15 minut dle stavu nohou klienta. Dojde ke změkčení zrohovatělé kůže, otoků, mozolů a nehtů, také se uvolní nečistoty z nehtových lůžek. Pak se nohy důkladně osuší, vydezinfikují a nanese se na chodidla kosmetická vazelína zabraňující vysychání již namočené kůže. Začne se s odstraňováním přebytečné kůže pomocí skalpelu, po odstranění následuje ostříhání nehtů, vyčištění nehtových lůžek a valů odstranění přebytečné kůžičky, zapilování nehtů a vyhlazení chodidel pemzou.
		Na závěr je provedena lehká základní masáž chodidla, která zvyšuje prokrvení, snižuje únavu a stimuluje reflexní body na ploskách nohou a to za pomoci vhodného krému nebo balzámu. Péči lze doplnit uvolňující a relaxační masáží chodidel, parafínovým zábalem nebo barevnou modelací nehtů.
Obvykle procedura trvá od 45 – do 60 minut.
Pedikúra je vhodná pro všechna pohlaví i věkové kategorie.
Domácí péče v mnoha případech nestačí, proto navštivte salon
		</p>
		
			<h2>Popraskané  bolavé  paty</h2>
		<p class = "vnitrekObsahu">
Bolí Vás paty – může být na vině genetika, věk, ale i roční období. V zimě i v létě kůže trpí vysoušením a příliš suchá kůže na patách praská a následně pak bolí. Paty pak nevypadají hezky a s přibývajícím časem jsou horší a horší. V zimě Vás sice vzhled Vašich chodidel moc netrápí, schováte je do ponožek, ale problém nastává na jaře s příchodem sluníčka. 
Samotná ztvrdlá kůže je většinou bezbolestná záležitost, ale opravdu jen do té doby než začne praskat. Do prasklin se pak dostává nečistota, která způsobuje různé mykózy a záněty ranek na chodidlech a ty pak bolí o to víc. A to už je sám o sebe problém, který by jste měli řešit. 
Hlavně na odstranění kůže nepoužívejte kleštičky nebo nůžky. Hlavně z důvodu, že kůže zase ztvrdne a navíc s ostrými výstupky.
		
		</p>
		
		<p class = "vnitrekObsahu">
Možná se ptáte proč  zrovna vy trpíte na popraskané paty, příčin může být celá řada. Popraskané paty  vznikají v důsledku zvýšené mechanické zátěže, kterou na ně vyvíjíte. Často se s nimi trápí ženy v těhotenství, osoby s nadváhou a lidé dlouhodobě stojící třeba v práci na nohou. Důvodem také může být špatná a nekvalitní obuv, nebo nadměrně silná kůže na patách a také sklon k vysoušení pokožky. Tento problém mívají často starší lidé, těm se všeobecně pokožka rychleji a více vysušuje.
Pokud se potřebujete zbavit tohoto problému je potřeba myslet na prevenci. Ztvrdlou kůži na patách by jste měli odstraňovat alespoň jednou týdně, nástrojů a způsobů je mnoho, nejúčinnější je přeci jen, aspoň pro začátek, odstranění skalpelem, kterým se odstraní  i ta opravdu nejztvrdlejší kůže. Se skalpelem se musí zacházet ovšem opatrně, kůže se snadno prořízne a proto je lepší tuto péči nechat na profesionální pedikérce.
Právě proto jsme zde my ,,Pedikúra Jana Urbánková“ a s tímto problémem Vám rádi a radikálně pomůžeme.
		
		</p>
		<h2>Prevence</h2>
		<p class = "vnitrekObsahu">
Když už budete mít nohy v pořádku,  nebo i během léčby, můžete sami doma svým chodidlům ulevit a pomoci.
Velmi důležité je nohy po odstranění ztvrdlé kůže dobře hydratovat a promazávat výživným krémem a to i vícekrát denně. Další možností jsou pilníky na paty a pemzy oboje koupíte v různých hrubostech (čím větší číslo hrubosti  tím jemnější péče). Chodidlům můžete také dopřát pravidelnou regenerační koupel. Koupel by měla být Vašim nohám příjemně teplá s přídavkem mořské soli, heřmánku nebo tea tree, levandulového nebo konopného olejíčku, ty pomůžou i s ošetřením ranek a prasklin. Můžete také vyzkoušet zábal ze sádla – chodidla namažete domácím sádlem bez přídavku soli a zabalíme je do igelitové fólie a teplých bavlněných ponožek. Podobné účinky má i zábal z tvarohu, ten navíc zmírňuje zánět a teplotu nebo z citronové šťávy, chodidla budou po citronu hydratovaná a jemná.
		
		</p>
		
		';
include 'class/Sablona.class.php';
$sablona = new Sablona();
$sablona->zobraz($title, $description, $tags, $aktivni, $text);

?>