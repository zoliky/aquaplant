<?php
function page_header($title)
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php print $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<?php if ($title == 'Aquaplant - S.C. Aquaplant SRL, Oradea') { print '<meta name="description" content="Aquaplant - producator si importator de nuferi pentru amenajari iazuri. Calitate garantata,inflorire abundenta,preturi promotionale!" />' . "\n"; } ?>
<meta name="keywords" content="aquaplant,nymphaea,nufar,iaz,perene,apa,gradina,plante,flori,amenajari,verde,buchete,ghiveci,soare,acvatic,water lily,flowers,botanic,lotus" />
<meta name="robots" content="index,follow" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="misc/tabcontent.js"></script>
</head>
<body>
<?php
}

function page_footer() 
{
?>
<!-- Google analytics start -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-132293-8");
pageTracker._trackPageview();
</script>
<!-- Google analytics end -->
</body>
</html>
<?php
}

// Implementarea functiei contact_form()
function contact_form($errormsg, $nume, $telefon, $email, $mesaj) 
{
?>
<div id="contactform">
<?php print $errormsg ? '<p class="cpfix"><span class="errormsg">' . $errormsg . '</span></p>' : ""; ?>
<form action="contact.php" method="post">
<p class="cpfix">Nume:<span class="asterisk">*</span><br /><input type="text" class="frmbox" name="nume" value="<?php print $nume; ?>" /></p>
<p>Telefon:<span class="asterisk">*</span><br /><input type="text" class="frmbox" name="telefon" value="<?php print $telefon; ?>" /></p>
<p>E-mail:<span class="asterisk">*</span><br /><input type="text" class="frmbox" name="email" value="<?php print $email; ?>"/></p>
<p>Mesaj:<span class="asterisk">*</span><br /><textarea name="mesaj" cols="40" rows="8"><?php print $mesaj; ?></textarea></p>
<p>Introduceti codul din imagine:<span class="asterisk">*</span><br /><input type="text" class="frmbox" name="imagetext" /></p>
<p><img src="securimage_show.php" alt="[captcha]" /></p>
<p><input type="submit" name="submitbtn" value="Trimite" /><p>
</form>

</div>
<div id="contactright">
<p class="cpfix">Oradea, Bihor</p>
<p>Tel./Fax: 0259 - 427.054</p>
<p>Mobil: 0722 - 421.252</p>
<p>E-mail: aquaplantgarden [at] hotmail.com</p><br />
</div>
<?php
}

// Afiseaza meniul
function display_menu()
{
	$items = array(
		'index.php'     => 'Acasa',
		'intretinere.php' => 'Intretinere nuferi',
		'soiuri.php' 	=> 'Descriere soiuri',
		'contact.php'  	=> 'Contact'
    );
    
    $request = basename($_SERVER['PHP_SELF']);
    
    print '<ul class="items">' . "\n";
    foreach ($items AS $filename => $item)
    {
		print "\t" . '<li><a href="' .$filename. '" title="'.$item.'"' . ($request == $filename ? ' class="selected"' : null) . '>' . $item . '</a></li>' . "\n";
    }
    print "\t</ul>\n";
}

// Filtreaza intrarile din formular
function filterInput($input, $sql = FALSE)
{
	$input = strip_tags($input);
	if(get_magic_quotes_gpc())
	{
		$input = stripslashes($input); 
	}
	if ($sql)
	{
		$input = mysql_real_escape_string($input);
	} 
          
	return $input;
}
?>