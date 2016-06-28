<?php
class Sablona {
	
	/**
	 * Funkce zobrazi sablonu
	 *
	 * @param String $title
	 *        	titulek stranky
	 * @param String $description
	 *        	popis stranky
	 * @param String $tags
	 *        	tagy stranky
	 * @param String $aktivni
	 *        	aktivni stranka
	 * @param String $text
	 *        	text na strance
	 * @param String $uzivatel
	 *        	prihlseni uzivatel
	 */
	function zobraz($title, $description, $tags, $aktivni, $text) {
		?>
<!DOCTYPE html>
<html>
<head>
<?php include 'templates/udaje_hlavicka.php'; ?>
</head>
<body class="container-fluid text-center row content">

	<div class="Obal">

		<header class="Hlavicka">
			<div class="logo">
				<a href="index.php?web=stranky/home"><img alt="Pedikura Jana Urbánková" src="img/logo7.png"></a>
			</div>
			<div class="stopy">
				<img alt="stopy" src="img/stopy3.svg">
			</div>
		</header>

		<?php include 'templates/menu.php'; ?>
				
				
		<div class="Telo">
			<div class="container-fluid text-center">
				<div class="row content">
				
		<?php include 'templates/navigace.php'; ?>				
		
		</div>
			</div>
			<div class="obsah">
				<div class="container-fluid text-center">
					<div class="row content">
				<?php echo $text?>
			</div>

				</div>
			</div>
		</div>
		
		
	<?php include 'templates/paticka.php'; ?>
	
</div>

</body>
</html>
<?php
	}
}

?>
