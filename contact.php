<?php
require_once('includes/functions.inc.php');

require_once('securimage.php');
$img = new Securimage();

page_header('Contact - S.C. Aquaplant SRL, Oradea');
?>
<div id="main">
  <div id="header">
	<div id="headermenu">
	<?php display_menu(); ?>
	</div>
  </div>
  
  <div id="content">
  <h1 class="title">Contact</h1>
<?php
  if (isset($_POST['submitbtn']))
  {
  	$errormsg = "";
  	
  	// Verifica - Nume
  	if (empty($_POST['nume']))
  	{
  		$errormsg = "Nu ati introdus numele dumneavoastra!<br />";
  		$nume	  = "";
  	}
  	else 
  	{
  		$nume 	  = filterInput($_POST['nume']);
  	}
  	
  	// Verifica - Telefon
  	if (empty($_POST['telefon'])) 
  	{
  		$errormsg .= "Nu ati introdus un numar de telefon!<br />";
  		$telefon   = "";
  	}
  	elseif (!is_numeric($_POST['telefon']))
  	{
  		$errormsg .= "Numar de telefon incorect!<br />";
  		$telefon   = "";
  		
  	}
  	else 
  	{
  		$telefon   = filterInput($_POST['telefon']);
  	}
  	
  	// Verifica E-mail
  	if (!ereg('^[a-z0-9\-_\.]{1,32}@[a-z0-9\-\.]{1,64}\.[a-z0-9]{2,5}', $_POST['email'])) 
  	{
  		$errormsg .= "Nu ati specificat o adresa valida de e-mail!<br />";
  		$email	   = "";
  	} 
  	else
  	{
  		$email	   = filterInput($_POST['email']);
  	}
  	
  	// Verifica Mesaj
  	if (empty($_POST['mesaj'])) 
  	{
  		$errormsg .= "Nu ati scris nici un mesaj!<br />";
  		$mesaj	   = "";
  	}
  	else
  	{
  		$mesaj	   = filterInput($_POST['mesaj']);
  	}
  	
  	// Verifica Captcha
  	if (empty($_POST['imagetext']))
  	{
  		$errormsg .= "Nu ati introdus codul din imagine!<br />";
  		$imagetext = "";
  	}
  	else
  	{
  		$valid = $img->check($_POST['imagetext']); 
  		
  		if (!$valid) {
  			$errormsg .= "Ati introdus gresit codul din imagine!<br />";
  		}
  	}
  	
	if ($errormsg == "")
	{ 
		// Datele sunt corecte - trimite mail
		$to       = "aquaplant@nuferi.ro";
		$header	  = "From: $nume <$email>\n";
		$header	 .= "Reply-To: $nume <$email>\n";
		$header	 .= "Return-Path: $nume <$email>\n";
		$header	 .= 'Sender-IP: '.$_SERVER["REMOTE_ADDR"]."\n";
		$subject  = "Mesaj nou!"; 
		$content  = "$mesaj\n\n$nume\nTel.: $telefon";
  	
  		@mail($to, $subject, $content, $header);
  		print '<p>Mesajul dvs. a fost trimis!<br />Veti fi contactat cat mai curand! Va multumim!</p>';
	}
	else
	{
		// Datele NU sunt corecte - afiseaza formularul
		contact_form($errormsg, $nume, $telefon, $email, $mesaj);
	}
  }
  else
  {
  	contact_form("", "", "", "", "");
  }
?>
</div>
  <div id="footer">
  Copyright &copy; 2008 S.C Aquaplant S.R.L<br/>
  </div>
</div>
<?php 
  page_footer(); 
?>