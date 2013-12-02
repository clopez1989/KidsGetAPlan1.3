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
		<div class="section mainButton" id="thirtyMain">
			<object width="800" height="800">
			    <param name="movie" value="30_game.swf">
				<param name="allowFullScreen" value="true" />
			    <embed src="30_game.swf" width="400" height="400">
			    </embed>
			</object>
			<div class="bookTitle">
				<img src="css/img/3030rule_m_title.png" width="552" height="420" alt="3030rule M Title" >
				<p>A book about lightening awareness</p>
			</div>
		</div>

		<div class="section storyButton" id="thirtyStory">
			<a href="#thirtyFacts"><img src="css/img/thirty_m_read.png" width="600" height="426" alt="Thirty M Read"></a>
		</div>

		<div class="section playButton" id="thirtyPlay">
			<a href="http://onelink.to/f5csuw" target="itunes_store"><img src="css/img/thirty_m_play.png" width="598" height="546" alt="Thirty M Play"></a>
		</div>

		<div class="section makeButton" id="thirtyMake">
			<div id="accordion">
			  <p>Section 1</p>
			  <div>
			    <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget.
			    Integer ut neque. Vivamus nisi metus, molestie vel, gravida in,
			    condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros.
			    Nam mi. Proin viverra leo ut odio.</p>
			  </div>
		  	</div>
		</div>

		<div class="section factsButton" id="thirtyFacts">
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