<?php
require_once('includes/functions.inc.php');

page_header('Descriere soiuri - S.C. Aquaplant SRL, Oradea');
?>
<div id="main">
  <div id="header">
    <div id="headermenu">
    <?php display_menu(); ?>
    </div>
  </div>

  <div id="content">
  <h1 class="title">Descriere soiuri</h1>
  	<div id="speciesleft">
  	<ul id="maintab">
		<li class="selected"><a href="#" title="James Brydon" rel="jamesbrydon">James Brydon</a></li>
	  	<li><a href="#" title="Attraction" rel="attraction">Attraction</a></li>
	  	<li><a href="#" title="Firecrest" rel="firecrest">Firecrest</a></li>
	  	<li><a href="#" title="Hollandia" rel="hollandia">Hollandia</a></li>
	  	<li><a href="#" title="Charlles de Mervile" rel="charllesdemervile">Charlles de Mervile</a></li>
	  	<li><a href="#" title="Joey Tomocik" rel="joeytomocik">Joey Tomocik</a></li>
	  	<li><a href="#" title="Gonnere" rel="gonnere">Gonnere</a></li>
	  	<li><a href="#" title="Albatross" rel="albatross">Albatross</a></li>
  	</ul>
  	</div>
  
  	<div id="speciesright">
  	<noscript class="errormsg"><p>Trebuie sa aveti JavaScript activat pentru a vizuliza aceasta pagina!</p></noscript>
  	  <div id="jamesbrydon" class="tabcontent">
  	  <img src="images/jamesbrydon.jpg" alt="[picture]" />
  	  <h2 class="title">James Brydon</h2>
	  <p>Atrage privirile prin florile mari, rosu carmine cu stamine galbene, care contrasteaza
	  cu frunzele verde-maroniu. Infloreste cu succes chiar si in zone cu putin soare. Adaptabil
	  in toate tipurile de iaz.</p>
	  </div>
		
	  <div id="attraction" class="tabcontent">
	  <img src="images/attraction.jpg" alt="[picture]" />
	  <h2 class="title">Attraction</h2>
	  <p>Un nufar clasic, cu flori mari rosii si stamine galbene. Culoarea devine tot mai intensa
	  zi de zi. Printre cele mai viguroase varietati, ale carei performante sunt foarte bune in
	  iazuri adanci de 60 cm, dar se adapateaza cu succes si in iazuri mai putin adanci. Necesita
	  soare plin pana la partial umbros.</p>
	  </div>
	  
	  <div id="firecrest" class="tabcontent">
	  <img src="images/firecrest.jpg" alt="[picture]" />
	  <h2 class="title">Firecrest</h2>
	  <p>Special prin florile mari, roz-levantica cu stamine rosu-galben, care se inalta deasupra
	  luciului apei. Infloreste devreme. Potrivit pentru toate tipurile de iaz cu soare plin
	  sau partial umbros.</p>
	  </div>
	  
	  <div id="hollandia" class="tabcontent">
	  <img src="images/hollandia.jpg" alt="[picture]" />
	  <h2 class="title">Hollandia</h2>
	  <p>Un nufar gratios, cu flori duble mari, roz deschis care se inchid la culoare pe masura ce 
	  planta se maturizeaza. Inflorire abundenta de lunga durata. Ideal in iazuri medii si mari, 
	  cu adancimi de 40-60 cm, pentru a va bucura din plin de frumusetea sa. Prefera soare plin.</p>
	  </div>
	  
	  <div id="charllesdemervile" class="tabcontent">
	  <img src="images/charllesdemervile.jpg" alt="[picture]" />
	  <h2 class="title">Charlles de Mervile</h2>
	  <p>Frumusete prin contrast. Flori mari, roz inchis spre visiniu cu stamine roz-deschis, frunze
	  vargate. Ideal pentru iazuri medii si mari, 40-80 cm adancime. Soare plin.</p>
	  </div>
	  
	  <div id="joeytomocik" class="tabcontent">
	  <img src="images/joeytomocik.jpg" alt="[picture]" />
	  <h2 class="title">Joey Tomocik</h2>
	  <p>O varietate excelenta, flori duble care se inalta deasupra apei, culoare galben intens in
	  contrast cu frunzele verzi vargate. Inflorire abundenta in toate marimile de iaz cu soare
	  plin.</p>
	  </div>
	  
	  <div id="gonnere" class="tabcontent">
	  <img src="images/gonnere.jpg" alt="[picture]" />
	  <h2 class="title">Gonnere</h2>
	  <p>Supranumit si "Bulgare de zapada" datorita florilor mari de un alb pur. Frunzele de un 
	  verde inchis au o intindere redusa ceea ce il face potrivit si pentru iazuri mici. Perioada
	  lunga de inflorire in soare plin.</p>
	  </div>
	
	  <div id="albatross" class="tabcontent">
	  <img src="images/albatross.jpg" alt="[picture]" />
	  <h2 class="title">Albatross</h2>
	  <p>Flori alb intens si stamine galbene, cu petale ascutite si frunze rotunde verde inchis. 
	  Inflorire de durata in toate tipurile de iaz cu soare plin pana la partial umbros.</p>
	  </div>
  	</div>
	<script type="text/javascript">
	//<![CDATA[ 
	initializetabcontent("maintab")
	//]]>
	</script>
  </div>
  
  <div id="footer">
  Copyright &copy; 2008 S.C Aquaplant S.R.L<br/>
  </div>
</div>
<?php
page_footer();
?>