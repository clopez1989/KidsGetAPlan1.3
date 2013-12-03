<!DOCTYPE html>
<html>

<!-- include Header -->
<?php include 'header.php'; ?>

<body onload="window.scrollTo(0,100);">

<!-- include Navigation -->
<?php include 'nav.php'; ?>

	<div class="section homeButton" id="homeMain">
		<div id="topLeftArt" class="grid_4">
			<img src="css/img/top_left_panel_art.png" alt=""/>
		</div>
		<div class="logoContainer" class="grid_4">
			<a href="index.php" data-ajax="false"><img src="css/img/Kids-Get-A-Plan-Logo-Horiz-2013-900x100-opt.png" width="500" height="95" alt="Kids Get A Plan Logo Horiz 2013 900x100 Opt" class="logoImage" /></a>
		</div>
		<div id="topRightArt" class="grid_4">
			<img src="css/img/Header_element_right.png" alt=""/>
		</div>
		<div id="topMobileMenuBar" class="grid_4">
			<a href="#myPanel"><img src="css/img/mobile_top_menu.png" width="672" height="107" alt="Mobile Top Menu"></a>
		</div>
		<div data-role="panel" id="myPanel" data-theme="b" data-display="push" data-position="left" data-position-fixed="true" style="background-color:#7c846b; background-image:none;">
			<a href="" data-rel="close" id="closePanelButton"><img src="css/img/close_m_panel.png" width="665" height="184" alt="Close M Panel"></a>
			<a href="#homeMain" id="homePanelButton" class="subNavBtn" data-ajax="false"><img src="css/img/btn_home_normal.png" width="580" height="164" alt="Btn Home Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#homeStory" id="storyPanelButton" class="subNavBtn" data-ajax="false"><img src="css/img/btn_read_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#homePlay" id="playPanelButton" class="subNavBtn" data-ajax="false"><img src="css/img/btn_play_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#homeMake" id="makePanelButton" class="subNavBtn" data-ajax="false"><img src="css/img/btn_make_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#homeFacts" id="factsPanelButton" class="subNavBtn" data-ajax="false"><img src="css/img/btn_facts_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#homeAdults" id="adultsPanelButton" class="subNavBtn" data-ajax="false"><img src="css/img/btn_adults_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
		</div>
		<br class="clear">
	</div>
	
	<div class="leftSidebar">
		<div id="leftNotches">
		</div>
	</div>
	
	
	<div class="mainWrapper">
		<div class="section mainSection mainButton">
			<!-- Text box for mobile site -->
			<div id="mobileTextBox">
				<h2>Explore the Stories</h2>
				<p>See all the fun things related to each of the stories</p>
			</div>
			<div id="name1_box" class="grid_4 morph">
				<a href="thirtyrule.php" rel="external"></a>
			</div>
			<div id="name2_box" class="grid_4 morph">
				<a href="tinkermeister.php"></a>
			</div>
			<div id="name3_box" class="grid_4 morph">
				<a href="oaktree.php"></a>
			</div>
			<div id="name4_box" class="grid_2 morph">
				<h2>Coming Soon</h2>
			</div>
			<div id="name5_box" class="grid_2 morph">
				<a href="megatrack.php"></a>
			</div>
			<div id="name6_box" class="grid_2 morph">
				<h2>Coming Soon</h2>
			</div>
			<div id="bottomMainEtching">

			</div>
		</div>

		<div class="section storyButton" id="homeStory">
			<div id="name1_story_box" class="grid_4" onclick="location.href='thirtyrule.php'">
				<h2>The 30/30 Rule</h2>
			</div>
			<div id="name2_story_box" class="grid_4">
				 <h2>The Oak Tree Club</h2>
			</div>
			<div id="name3_story_box" class="grid_4">
				<h2>Tinkermeister</h2>
			</div>
			<div id="name4_story_box" class="grid_4">
				<img src="css/img/Sub_Story/sub_story_d_megatrack.png" width="295" height="231" alt="Sub Story D Megatrack">
				<h2></h2>
			</div>
			<div id="name5_story_box" class="grid_4">
				<h2>Mega Track HTW</h2>
			</div>
			<div id="name6_story_box" class="grid_4">
				<img src="css/img/Sub_Story/sub_story_d_megatrack.png" width="295" height="231" alt="Sub Story D Megatrack">
				<h2></h2>
			</div>
		</div>

		<div class="section playButton" id="homePlay">
			<div id="name1_play_box" class="grid_4" onclick="location.href='thirtyrule.php'">
				<h2>The 30/30 Rule</h2>
			</div>
			<div id="name2_play_box" class="grid_4">
				 <h2>The Oak Tree Club</h2>
			</div>
			<div id="name3_play_box" class="grid_4">
				<h2>Tinkermeister</h2>
			</div>
			<div id="name4_play_box" class="grid_4">
				<img src="css/img/Sub_Story/sub_story_d_megatrack.png" width="295" height="231" alt="Sub Story D Megatrack">
				<h2></h2>
			</div>
			<div id="name5_play_box" class="grid_4">
				<h2>Mega Track HTW</h2>
			</div>
			<div id="name6_play_box" class="grid_4">
				<img src="css/img/Sub_Story/sub_story_d_megatrack.png" width="295" height="231" alt="Sub Story D Megatrack">
				<h2></h2>
			</div>
		</div>

		<div class="section makeButton" id="homeMake">
			<div id="mainMakeDownload">
				<img src="css/img/main_make_d_m.png" width="643" height="326" alt="Main Make D M">
			</div>
			<div id="mainMakeColoring">
				<img src="css/img/main_make_c_m.png" width="643" height="326" alt="Main Make D M">
			</div>
		</div>

		<div class="section factsButton" id="homeFacts">
			<div id="facts1image" class="grid_4">
				  <a href="thirtyrule.php#thirtyMake" rel="external" data-ajax="false"><img src="css/img/facts_lightning_m.png" width="596" height="244" alt="Facts Lightning M"></a>
			</div>
			<div id="facts2image" class="grid_4">
				 <img src="css/img/facts_tornado_m.png" width="595" height="245" alt="Facts Tornado M">
			</div>
			<div id="facts3image" class="grid_4">
				 <img src="css/img/facts_hurricane_m.png" width="595" height="245" alt="Facts Hurricane M">
			</div>
			<div id="facts4image" class="grid_4">
				 <img src="css/img/facts_wildfire_m.png" width="595" height="245" alt="Facts Wildfire M">
			</div>
		</div>
	
		<div class="section adultsButton" id="contentContainer">
		</div>
	</div>
	
	<div class="rightSidebar">
		<div id="rightNotches">
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
			<a href="https://www.facebook.com/kidsgetaplan"><img src="css/img/fb_icon.png" width="33" height="33" alt="Fb Icon" class="fbicon"></a>
		</div>
		
	</div>
	
	<script type="text/javascript">
		$(document).ready(function () { var anchor_id = window.location.hash; if (anchor_id != "") {
		             var new_position = $(anchor_id).offset(); 
		             window.scrollTo(new_position.left,new_position.top); 
		} });
	</script>
	
	
	<script type="text/javascript">	
		$(document).ready( function() {
	    	$('.subMenu').smint({
	    		'scrollSpeed' : 1000
	    	});
		});
	</script>
			
</body>
</html>