<!DOCTYPE html>
<html>

<?php include 'header.php'; ?>

<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">

<?php include 'nav.php'; ?>

	<div class="section homeButton">
		<div id="topLeftArt" class="grid_4">
			<img src="css/img/top_left_panel_art.png" />
		</div>
		<div class="logoContainer" class="grid_4" id="storyKGAPLogo">
			<a href="index.php"><img src="css/img/Kids-Get-A-Plan-Logo-Horiz-2013-900x100-opt.png" width="500" height="95" alt="Kids Get A Plan Logo Horiz 2013 900x100 Opt" class="logoImage" /></a>
			<img src="css/img/top_bolts_and_etching.png" class="topBolts" width="804" height="36" alt="Top Bolts And Etching">
		</div>
		<div id="topRightArt" class="grid_4">
			<img src="css/img/top_right_panel_art.png" />
		</div>
		<div id="topMobileMenuBar" class="grid_4">
			<a href="#myPanel"><img src="css/img/mobile_top_menu.png" width="672" height="107" alt="Mobile Top Menu"></a>
		</div>
		<div data-role="panel" id="myPanel" data-theme="b" data-display="push" data-position="left" data-position-fixed="true">
			<a href="" data-role="button" data-rel="close">Close</a>
			<a href="index.php" id="homePanelButton" class="subNavBtn" data-ajax="false">Home</a>
			<a href="#megatrackStory" id="storyPanelButton" class="subNavBtn" data-ajax="false">Story</a>
		</div>
		<br class="clear">
	</div>
	
	<div class="leftSidebar">
		<div id="leftNotches">
			<img src="css/img/wrapper_notches_left.png" width="20" height="459" alt="Wrapper Notches Left">
		</div>
	</div>
	
	
	<div class="mainWrapper">
		<div class="section mainButton" id="megatrackMain">
			<object width="800" height="800">
			    <param name="movie" value="30_game.swf">
				<param name="allowFullScreen" value="true" />
			    <embed src="30_game.swf" width="400" height="400">
			    </embed>
			</object>
			<div class="bookTitle">
				<img src="css/img/megatrack_m_title.png" width="536" height="408" alt="Megatrack M Title">
				<p style="color:#000 !important;">A book about fire safety</p>
			</div>
		</div>

		<div class="section storyButton" id="megatrackStory">
			
		</div>

		<div class="section playButton" id="megatrackPlay">
			<a href="http://onelink.to/f5csuw" target="itunes_store">KGAP - Firewise Megatrack - IDEAS Orlando</a>
		</div>

		<div class="section makeButton">
			<h1>Make Section</h1>
		</div>

		<div class="section factsButton">
			<h1>Facts Section</h1>
		</div>
	
		<div class="section adultsButton" id="contentContainer">
			<h1>Adults Section</h1>
		</div>
	</div>
	
	<div class="rightSidebar">
		<div id="rightNotches">
			<img src="css/img/wrapper_notches_right.png" width="20" height="459" alt="Wrapper Notches Right">
		</div>
	</div>
	
	<div id="copyright">
		<div class="characterImg">
			 <img src="css/img/tinker_left.png" width="147" height="150" alt="Tinker Left">
		</div>
		<div class="contestImg">
			 <img src="css/img/tinker_panel_footer_left.png" width="147" height="82" alt="Tinker Panel Footer Left">
		</div>
		<ul class="bottomMenu">
			<li><a href="#">Copyright Information</a></li>
			<li><a href="#">Other Information</a></li>
			<li><a href="#">Site Map</a></li>
			<li><a href="#">Contests</a></li>
		</ul>
		<div class="machineImg">
			<img src="css/img/pump_footer_right.png" width="150" height="152" alt="Pump Footer Right">
		</div>
		<div class="socialButtons">
			<a href="#"><img src="css/img/sert_logo.png" width="71" height="49" alt="Sert Logo"></a>
			<a href="#"><img src="css/img/fb_icon.png" width="33" height="33" alt="Fb Icon" class="fbicon"></a>
		</div>
		
	</div>		
</body>
</html>