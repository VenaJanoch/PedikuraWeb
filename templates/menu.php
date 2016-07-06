<div class = "menu">
	<nav class="navbar navbar-default navbar-custom navbar-collapse">
		<div class="container-fluid">
			
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


<div class = "menuTlacitko">
	<nav class="navbar navbar-light bg-faded">
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#9776;
  </button>
  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
   
   <ul class = "seznamMenu">
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
		<a href="index.php?web=stranky/zabal" class="odkazMenu">Parafínoví zábal</a></li>
		
		<?php if ($aktivni == 'shellac'){ ?> 
					
					<li>
		<?php  }  else {  ?>  
					
					<li> <?php } ?>
		<a href="index.php?web=stranky/shellac" class="odkazMenu">Shellac</a></li>
		
     

    </ul>
  </div>
</nav></div>

