<?php
if (isset($_GET['zobraz']))//Pokud je nastavená GET proměnná $zobraz
	{
	   include ($_GET['zobraz'].".php");//vloží $zobraz.php soubor
	}
else
	{		
		include ("uvod.php");//pokud není GET proměnná nastavená, vloží prehled-clanky.php
	}
?>
