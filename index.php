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
		<div class="section mainSection mainButton" data-type="background" data-speed="10">
			<!-- Text box for mobile site -->			
			<div id="mobileTextBox_main">
				<h2>Explore the fun things related to each story character.</h2>
			</div>
			<div id="name1_box" class="grid_4 morph" onclick="location.href='thirtyrule.php'">
				<a href="thirtyrule.php" rel="external"></a>
			</div>
			<a href="http://www.youtube.com/watch?v=2SfGUV0U62g"  rel="prettyPhoto external">
			<div id="name2_box" class="grid_4 morph">
			</div></a>
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
			<div id="ipadClear"></div>
			<div id="mobileTextBoxCS">
				<h2>More Coming Soon</h2>
			</div>
		</div>

		<div class="section storyButton" id="homeStory" data-type="background" data-speed="10">
			<div id="mobileTextBox">
				<h2>Read the Kids Get A Plan Stories</h2>
			</div>
			<div id="name1_story_box" class="grid_4">
				<button id="opener"></button>
				<h2>The 30/30 Rule</h2>
				  <div id="dialog" title="Basic dialog">
					  <a href="http://www.youtube.com/watch?v=2SfGUV0U62g"  rel="prettyPhoto" data-ajax="false">
					                              <img src="css/img/top_bolts_and_etching.png" width="804" height="36" alt="Top Bolts And Etching">
					                          </a>
					  <a href="index.php" style="float:left;" target="_blank" rel="prettyPhoto">Launch Game</a>
				    <p>Lorem ipsum dolor sit amet.. At vero eos et accusam et justo duo dolores et ea rebum. At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
				  </div>
			</div>
			<div id="name2_story_box" class="grid_4">
				<button id="opener2"></button>
				 <h2>The Oak Tree Club</h2>
				  <div id="dialog2" title="Basic dialog">
					  <img src="css/img/top_bolts_and_etching.png" width="804" height="36" alt="Top Bolts And Etching">
				    <p>Lorem ipsum dolor sit amet.. At vero eos et accusam et justo duo dolores et ea rebum. At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat </p>
				  </div>
			</div>
			<div id="name3_story_box" class="grid_4">
				<h2>The Wacky Whiz-Bang Weather Watching Wonder</h2>
			</div>
			<div id="name4_story_box" class="grid_4">
				<img src="css/img/coming_soon_story.png" width="293" height="230" alt="Coming Soon Story">
			</div>
			<div id="name5_story_box" class="grid_4">
				<h2>Mega Track HTW</h2>
			</div>
			<div id="name6_story_box" class="grid_4">
				<img src="css/img/coming_soon_story.png" width="293" height="230" alt="Coming Soon Story">
			</div>
			<div id="mobileTextBoxCS_story">
				<h2>More Coming Soon</h2>
			</div>
			<img src="css/img/Adults/bevel_top.png" width="996" height="23" alt="Bevel Top" class="bevelBottom">
		</div>

		<div class="section playButton" id="homePlay" data-type="background" data-speed="10">
			<div id="mobileTextBox">
				<h2>Interact with the Kids Get A Plan Activities</h2>
			</div>
			<div id="name1_play_box" class="grid_4" onclick="location.href='thirtyrule.php'">
				<h2>The 30/30 Game</h2>
			</div>
			<div id="name2_play_box" class="grid_4">
				 <h2>Disaster Supply Kit</h2>
			</div>
			<div id="name3_play_box" class="grid_4">
				<h2>The Whiz-Bang Quiz</h2>
			</div>
			<div id="name4_play_box" class="grid_4">
				<img src="css/img/coming_soon_play.png" width="296" height="232" alt="Coming Soon Play">
			</div>
			<div id="name5_play_box" class="grid_4">
				<h2>Firewise Simulator</h2>
			</div>
			<div id="name6_play_box" class="grid_4">
				<img src="css/img/coming_soon_play.png" width="296" height="232" alt="Coming Soon Play">
			</div>
			<div id="mobileTextBoxCS_story">
				<h2>More Coming Soon</h2>
			</div>
			<img src="css/img/Adults/bevel_yellow.png" width="999" height="22" alt="Bevel Yellow" class="bevelBottom">
		</div>

		<div class="section makeButton" id="homeMake" data-type="background" data-speed="10">
			<img src="css/img/Adults/bevel_bottom.png" width="996" height="23" alt="Bevel Bottom" class="makeBevelBottom">
			<div id="mobileTextBoxMake">
				<h2>Cut-Outs and Coloring Pages</h2>
			</div>
			<div id="name1_make_box" class="grid_4">
				<h2>The 30/30 Rule</h2>
			</div>
			<div id="name2_make_box" class="grid_4">
				 <h2>The Oak Tree Club</h2>
			</div>
			<div id="name3_make_box" class="grid_4">
				<h2>Tinkermeister</h2>
			</div>
			<img src="css/img/Adults/bevel_top.png" width="996" height="23" alt="Bevel Top" class="makeBevelBottom">
		</div>

		<div class="section factsButton" id="homeFacts" data-type="background" data-speed="10">
			<div id="mobileTextBox">
				<h2>Get to know your Emergency Preparation Facts</h2>
			</div>
			<div id="name1_facts_box" class="grid_4">
				<h2>The 30/30 Rule</h2>
			</div>
			<div id="name2_facts_box" class="grid_4">
				 <h2>The Oak Tree Club</h2>
			</div>
			<div id="name3_facts_box" class="grid_4">
				<h2>Tinkermeister</h2>
			</div>
			<div id="name4_facts_box" class="grid_4">
				<img src="css/img/wheel_left.png" width="300" height="236" alt="Wheel Left">
			</div>
			<div id="name5_facts_box" class="grid_4">
				<h2>Mega Track HTW</h2>
			</div>
			<div id="name6_facts_box" class="grid_4">
				<img src="css/img/wheel_right.png" width="296" height="236" alt="Wheel Right">
			</div>
		</div>
	
		<div class="section adultsButton" id="homeAdults" data-type="background" data-speed="10">
			<img src="css/img/Adults/bevel_bottom.png" width="996" height="23" alt="Bevel Bottom" class="adultsBevelBottom">
			<div id="mobileTextBoxAdults">
				<h2>Download the Teacher Guides and Purchase Books</h2>
			</div>
			<div id="ventLeftDiv"><img src="css/img/Adults/vents_left.png" width="57" height="215" alt="Vents Left" class="ventLeft"></div>
				<div id="name1_adults_box">
					<h2>Teacher Guides</h2>
				</div>
				<div id="name2_adults_box">
					<h2>Buy the Books</h2>
				</div>
			<div id="ventRightDiv"><img src="css/img/Adults/vents_right.png" width="57" height="215" alt="Vents Right" class="ventRight"></div>
			<img src="css/img/Adults/bevel_top.png" width="996" height="23" alt="Bevel Top" class="adultsBevelBottom">
		</div>
		<br class="clear">
	</div>
	
	<div class="rightSidebar">
		<div id="rightNotches">
		</div>
	</div>
	
	<div id="copyright">
		<div class="characterImg">
			<img src="css/img/FooterCharacters/footer_character<?php
echo(mt_rand(1,4)); ?>.png" width="106" height="141" alt="Footer Character">
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
	
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
	    $("a[rel^='prettyPhoto']").prettyPhoto();
	});
	</script>
	
	<script type="text/javascript">
		$(document).ready(function () { var anchor_id = window.location.hash; if (anchor_id != "") {
		             var new_position = $(anchor_id).offset(); 
		             window.scrollTo(new_position.left,new_position.top); 
		} });
	</script>
	
	<script>
	  $(function() {
	    $( "#dialog" ).dialog({
	      autoOpen: false,
	      show: {
	        effect: "slide",
	        duration: 1000
	      },
	      hide: {
	        effect: "slide",
	        duration: 1000
	      },
		  autoOpen: false,
          width: 'auto', // overcomes width:'auto' and maxWidth bug
          modal: true,
          fluid: true, //new option
          resizable: false
	    });
 
 	   $('div.ui-resizable-handle').hide();
	   
 
	    $( "#opener" ).click(function() {
	      $( "#dialog" ).dialog( "open" );
	    });
		
		
		
	  });
	  
	  $(function() {
	    $( "#dialog2" ).dialog({
	      autoOpen: false,
	      show: {
	        effect: "slide",
	        duration: 1000
	      },
	      hide: {
	        effect: "slide",
	        duration: 1000
	      },
		  autoOpen: false,
          width: 'auto', // overcomes width:'auto' and maxWidth bug
          modal: true,
          fluid: true, //new option
          resizable: false
	    });
 
 	   $('div.ui-resizable-handle').hide();
	   
 
	    $( "#opener2" ).click(function() {
	      $( "#dialog2" ).dialog( "open" );
	    });
		
		
		
	  });
	  
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