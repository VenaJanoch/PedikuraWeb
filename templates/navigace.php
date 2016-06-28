<div class = "navigace">
	<ul class = "menu2">
	  
		<li><a href="index.php?web=stranky/home" class = "odkazyMenu2">Úvod</a></li>
	  	<li><a href="index.php?web=stranky/oNas" class = "odkazyMenu2">O nás</a></li>		
		<li><a href="index.php?web=stranky/cenik" class = "odkazyMenu2">Ceník</a></li>
		<li><a href="index.php?web=stranky/aktuality" class = "odkazyMenu2">Aktuality</a></li>
		<li><a href="index.php?web=stranky/fotky" class = "odkazyMenu2">Fotogalerie</a></li>
     </ul> 
     <hr style= "border-color: white">
	<ul class = "menu2">
	  
		<li ><a href="https://www.facebook.com/pedikurajanaurbankova/?fref=ts
		" class = "odkazyMenu2"><img alt="Odkaz fb" src="img/fb.png"></a></li>
     </ul> 
     
     
</div>

<div class = "navigaceSmall">
	<ul class = "menu2">
	  
		<li><a href="index.php?web=stranky/home" class = "odkazMenu">Úvod</a></li>
	  	<li><a href="index.php?web=stranky/oNas" class = "odkazMenu">O nás</a></li>		
		<li><a href="index.php?web=stranky/cenik" class = "odkazMenu">Ceník</a></li>
		<li><a href="index.php?web=stranky/aktuality" class = "odkazMenu">Aktuality</a></li>
		<li><a href="index.php?web=stranky/fotky" class = "odkazMenu">Fotogalerie</a></li>
     
     <?php if ($aktivni == 'pedikura'){ ?> <li>
		<?php  }  else {  ?>  <li> <?php } ?>
		<a href="index.php?web=stranky/pedikura" class="odkazMenu">Pedikúra</a></li>

					<?php if ($aktivni == 'terapie'){ ?> 
					
					<li>
		<?php  }  else {  ?>  <li> <?php } ?>
		<a href="index.php?web=stranky/terapie" class="odkazMenu">Reflexní terapie</a>
					
					</li>
					
		<?php if ($aktivni == 'zabal'){ ?> 
					
					<li>
		<?php  }  else {  ?>  
					
					<li> <?php } ?>
		<a href="index.php?web=stranky/zabal" class="odkazMenu">Parafínový zábal</a></li>
		
		<?php if ($aktivni == 'shellac'){ ?> 
					
					<li>
		<?php  }  else {  ?>  
					
					<li> <?php } ?>
		<a href="index.php?web=stranky/shellac" class="odkazMenu">Shellac</a></li>
		
     
     </ul> 
    
</div>
