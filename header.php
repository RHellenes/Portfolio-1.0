

<!DOCTYPE html>
<html lang="no">
<head>
	<meta charset ="utf-8">

	<title>
		<?php 
		echo 'RHellenes -'.$page_title;
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

		<link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500" rel="stylesheet">

		<!-- Favicon -->

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $toRoot.'images/favicons/apple-touch-icon.png'?>">

		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $toRoot.'images/favicons/favicon-32x32.png'?>">

		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $toRoot.'images/favicons/favicon-16x16.png'?>">

		<link rel="manifest" href="<?php echo $toRoot.'images/favicons/site.webmanifest'?>">

		<link rel="mask-icon" href="<?php echo $toRoot.'images/favicons/safari-pinned-tab.svg'?>" color="#5bbad5">

		<meta name="msapplication-TileColor" content="#da532c">

		<meta name="theme-color" content="#f5f5f5">
</head>

<body>
	<header>
		<div class="header-container">
			<div class="menu_logo">Meny</div>
			<div class="logo logo-visible"><a href="
				<?php echo $toRoot.'index.php'?>">RHellenes</a></div>

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

					echo '<a href="'.$toRoot.'index.php#portfolio">Portfolio.</a>';

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
		</div>
	</header>
