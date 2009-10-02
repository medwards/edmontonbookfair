<?php require_once("data/setting.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<title><?php show_content_area('WebSite Name'); ?> &raquo; <?php show_title(); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Our annual Edmonton Anarchist Bookfair gives anarchists, allies and other friendly people throughout western Canada and beyond a chance to meet, share stories and ideas, and gather new literature and learn, education being the heart and soul of anarchist projects." />
<meta name="keywords" content="edmonton, anarchist, bookfair, anarchist bookfair, edmonton anarchist bookfair, anarchy, books, zines, politics, anarchism, left, leftis, political, events, workshops" />
<meta name="author" content="Edmonton Anarchist Bookfair Collective" />
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="scriptaculous-1.8.2/prototype.js"></script>
<script src="scriptaculous-1.8.2/scriptaculous.js"></script>
<script src="scriptaculous-1.8.2/effects.js"></script>
<script src="friends.js"></script>
<?php runTweak('head'); ?>
</head>
<body onload="changeFriendLink();">
	<table style="width:100%">
		<tr>
			<td>
				<!-- put your navigation links and text here -->
				<ul id="navlist">
					<?php show_links('sidebar', '<li>%s &#9673; </li>'); ?>
        		</ul>
			</td>
			<td>
				<p align="right">
				<!-- Paypal donation button<br /> -->
				Our Friends: <a id="friendLink" href="http://www.thoughtcrimeink.com/">thoughtcrime ink</a>
				</p>
			</td>
		</tr>
	</table>
	<table style="width: 90%" align="center">
		<tr>
			<td style="vertical-align: top;">
				<a href="index.php">
					<img src="eabf_logo_small_2.jpg" />
				</a>
			</td>
			<td id="content">
<?php show_content_slug(); ?>
			</td>
		</tr>
	</table>
	<table style="width: 100%;">
		<tr>
			<td id="headercell" style=""><img src="headerbg.png" /></td>
		</tr>
	</table>
</body>
</html>
