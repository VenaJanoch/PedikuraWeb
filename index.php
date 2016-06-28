<?php



$dostupne = array("stranky/home", "stranky/pedikura", "stranky/terapie", "stranky/shellac", "stranky/zabal", "stranky/oNas", "stranky/aktuality", "stranky/fotky", "stranky/pedikuraFotky", "stranky/terapieFotky", "stranky/shellacFotky", "stranky/zabalFotky", "stranky/cenik","stranky/prihlaseni", "form/kontrola_prihlaseni", "stranky/odhlaseni", "stranky/registrace", "form/kontrola_registrace", "stranky/smazat", "stranky/novy_prispevek", "form/kontrola_novy_prispevek", "stranky/ukazat", "form/kontrola_hodnoceni", "form/kontrola_uprava_prispevku", "stranky/hodnoceni", "stranky/stahnout", "form/kontrola_pridatRev", "stranky/smazRev", "stranky/ukazat_adm", "stranky/rozhodnuti"); // dostupne stranky webu
$zobrazim = $dostupne[0]; // prvni de defaultni


// Prechod mezi strankami
 if(isset($_GET["web"]) && in_array($_GET["web"],$dostupne)){
   $zobrazim = $_GET["web"];    
 }

include($zobrazim.".php");
?>