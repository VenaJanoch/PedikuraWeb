<div class = "menu">
	<nav class="navbar navbar-default navbar-custom">
		<div class="container-fluid">
			
		<button onclick="prepnoutTridu(this.parentNode, 'zobrazit')">≡</button>
				<ul class="nav navbar-nav zobrazit">
	  
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
</nav>
</div>