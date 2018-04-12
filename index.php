<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-2" />
<meta name="keywords" content="tapicerzy mi�sk mazowiecki, zak�ady tapicerskie, tapicerka, us�ugi tapicerskie, tapicerstwo samochodowe, tapicerowanie, tapicerstwo meblowe, mi�sk mazowiecki" />
<meta name="description" content="Renowacja mebli tapicerskich, meble tapicerowane na zam�wienie, tapicerstwo samochodowe, obijanie drzwi." />
<title>Zak�ad Tapicerski Arkadiusz Perzanowski</title>

<link rel="stylesheet" href="js/lightbox.css" type="text/css" media="screen" />
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>
<link rel="stylesheet" href="style.css" type="text/css"/>


</head>

<body>

	<div id="calosc">

		<div id="baner"><a href="?id=glowna"></a></div>

		<div id="lewoprawo">
			<div id="lewa">

			<div id="m1"><a href="?id=glowna"></a></div>
			<div id="m2"><a href="?id=galeria"></a></div>
			<div id="m3"><a href="?id=kontakt"></a></div>

			</div>

			<div id="prawa">
				<div style="height:530px; float:left;"></div>
				<div id="prawa_inside">

		<?php

		if ($_GET['id']) {
			include($_GET['id'] . ".html");
		} else {
			include("glowna.html");
		}

		?>

				</div><!--prawa_inside-->
			</div><!--prawa-->
		</div><!--lewoprawo-->
		<div id="stopka">
			&copy;Copright 2011. Wszelkie prawa zastrze�one. Wykonanie - <a href="mailto:kalinowskixmarcin@o2.pl">Marcin Kalinowski</a><br />
			<a href="?id=glowna">Tapicerstwo Mi�sk Mazowiecki</a>, <a href="?id=glowna">Renowacja mebli tapicerskich</a>,	<a href="?id=glowna">Meble tapicerskie na zam�wienie</a>, <a href="?id=glowna">Tapicerka samochodowa</a>,	<a href="?id=glowna">Obijanie drzwi</a>



		</div>
	</div><!--calosc-->



</body>

</html>
