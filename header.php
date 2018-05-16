

<!DOCTYPE html>
<html lang="no">
<head>
	<meta charset ="utf-8">

	<title>
		<?php 
		echo $page_title;
		?>
			
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">


		<!-- CSS with path -->
		<?php

		echo '<link rel="stylesheet" href="'.$toRoot.'css/normalize.css" type="text/css">';

		echo '<link rel="stylesheet" href="'.$toRoot.'css/style.css" type="text/css">';
		?>

		<!-- Geomanist is loaded through css -->
		<!-- Script is loaded call upon in footer -->
</head>

<body>
	<header>
		<div class="menu_logo">Meny</div>
		<div class="logo logo-visible"><a href="index.php">RHellenes</a></div>

		<div id="menu_icon">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
		<nav>

			<ul>
				<?php
					// Om meg
				echo '<li';

				if($page_title == "Om meg")
				{
					echo ' class="active">';
				}
				else
				{
					echo ">\r\n";
				}

				echo '<a href="'.$toRoot.'om_meg.php">Om meg.</a>';

				echo "</li>\r\n";

				// Portfolio

				echo '<li';

				if($page_title == "Portfolio")
				{
					echo ' class="active">';
				}
				else
				{
					echo ">\r\n";
				}

				echo '<a href="'.$toRoot.'portfolio.php">Portfolio.</a>';

				echo "</li>\r\n";

				// Kontakt

				echo '<li';

				if($page_title == "Kontakt")
				{
					echo ' class="active">';
				}
				else
				{
					echo ">\r\n";
				}

				echo '<a href="'.$toRoot.'kontakt.php">Kontakt.</a>';

				echo "</li>\r\n";

				?>
			</ul>
		</nav>

	</header>
