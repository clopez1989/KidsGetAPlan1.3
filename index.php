<!DOCTYPE html>
<html>

<!-- include Header -->
<?php include 'header.php'; ?>

<body onload="window.scrollTo(0,100); init();" style="background-color:#D4D4D4">
<!-- include Navigation -->
<?php include 'nav.php'; ?>
	<div class="section homeButton" id="homeMain">
		<div id="topLeftArt" class="grid_4">
			<img src="images/top_left_panel_art.png" alt=""/>
		</div>
		<div class="logoContainer" class="grid_4">
			<a href="index.php" data-ajax="false"><img src="images/Kids-Get-A-Plan-Logo-Horiz-2013-900x100-opt.png" width="500" height="95" alt="Kids Get A Plan Logo Horiz 2013 900x100 Opt" class="logoImage" /></a>
		</div>
		<div id="topRightArt" class="grid_4">
			<img src="images/Header_element_right.png" alt=""/>
		</div>
		<div id="topMobileMenuBar" class="grid_4">
			<a href="#myPanel" data-ajax="false"><img src="images/mobile_top_menu.png" width="672" height="107" alt="Mobile Top Menu"></a>
		</div>
		<div data-role="panel" id="myPanel" data-theme="b" data-display="push" data-position="right" data-position-fixed="true" style="background-color:#7c846b; background-image:none; z-index:3000!important;">
			<a href="" data-rel="close" id="closePanelButton"><img src="images/close_m_panel.png" width="665" height="184" alt="Close M Panel"></a>
			<a href="#homeMain" id="homePanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_home_normal.png" width="580" height="164" alt="Btn Home Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#homeStory" id="storyPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_read_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#homePlay" id="playPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_play_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#homeMake" id="makePanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_make_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#homeFacts" id="factsPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_facts_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#homeAdults" id="adultsPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_adults_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
		</div>
		<br class="clear">
	</div>
	
	<div class="leftSidebar">
		<div id="leftNotches">
		</div>
	</div>
	
	
	<div class="mainWrapper">
			<canvas id="canvas" width="1667" height="734"></canvas>
		<div class="section mainSection mainButton" data-type="background" data-speed="10">
			<!-- Text box for mobile site -->			
			<div id="mobileTextBox_main">
				<h2>Explore the fun things related to each story character.</h2>
			</div>
			<div id="name1_box" class="grid_4 morph" onclick="location.href='thirtyrule.php'">
				<a href="thirtyrule.php" rel="external"></a>
			</div>
			<div id="name2_box" class="grid_4 morph">
			</div>
			<div id="name3_box" class="grid_4 morph">
			</div>
			<div id="name4_box" class="grid_2 morph">
				<h2>Coming Soon</h2>
			</div>
			<div id="name5_box" class="grid_2 morph">
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
			<img src="images/Adults/bevel_bottom.png" width="996" height="23" alt="Bevel Bottom" class="storyBevelFix">
			<div id="mobileTextBox">
				<h2>Read the Kids Get A Plan Stories</h2>
			</div>
			<div id="name1_story_box" class="grid_4">
				<button id="opener"></button>
				<h2>The 30/30 Rule</h2>
				  <div id="dialog" title="The 30/30 Rule Story" style="background:#9554c4;">	
					  <div id="dialogEtchingLeft">
						   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
					  </div>
						<div id="dialogButtons">
							<p class="desktopOnly">For Desktop:</p>  
					  		<a href="30_game.swf?width=800&height=800" class="dialogRead desktopOnly" rel="prettyPhoto[flash]">Read the Story</a>
							<br>
							<p>For Mobile & Tablet Devices:</p>
							<div id="appStores">
					  			<a href="https://itunes.apple.com/us/app/kids-get-plan-30-30-rule-ebook/id619446496?mt=8&uo=4" target="itunes_store"style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
								<a href="https://play.google.com/store/apps/details?id=air.com.ideasorlando.ebook1" target="_blank">
						  			<img alt="Get it on Google Play" src="images/googleplay.png" style="width: 36%; margin-top: 3px; float:left; margin-bottom:5px;"/>
								</a>
								<a href="http://www.amazon.com/KGAP-The-30-rule/dp/B00BWS0GPI/ref=sr_1_5?ie=UTF8&qid=1387316808&sr=8-5&keywords=kids+get+a+plan+30%2F30" target="_blank"><img src="images/6a0148c71fb71b970c014e8a07bf5a970d-pi.png" alt="Amazon Store Download" style="width: 42%; text-align: center; float: left; margin-left: 65px;"></a>
							</div>
					</div>
				  <div id="dialogEtchingRight">
					  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
				  </div>
				  </div>
			</div>
			<div id="name2_story_box" class="grid_4">
				 <h2>The Oak Tree Club</h2>
			</div>
			<div id="name3_story_box" class="grid_4">
				<h2>The Wacky Whiz-Bang Weather Watching Wonder</h2>
			</div>
			<div id="name4_story_box" class="grid_4">
				<img src="images/coming_soon_story.png" width="293" height="230" alt="Coming Soon Story">
			</div>
			<div id="name5_story_box" class="grid_4">
				<h2>Mega Track HTW</h2>
			</div>
			<div id="name6_story_box" class="grid_4">
				<img src="images/coming_soon_story.png" width="293" height="230" alt="Coming Soon Story">
			</div>
			<div id="mobileTextBoxCS_story">
				<h2>More Coming Soon</h2>
			</div>
			<img src="images/Adults/bevel_top.png" width="996" height="23" alt="Bevel Top" class="bevelBottom">
		</div>

		<div class="section playButton" id="homePlay" data-type="background" data-speed="10">
			<img src="images/Adults/bevel_yellow.png" width="999" height="22" alt="Bevel Yellow" class="storyBevelFix" style="-moz-transform: scaleY(-1); -o-transform: scaleY(-1); -webkit-transform: scaleY(-1);">
			<div id="mobileTextBox_main">
				<h2>Interact with the Kids Get A Plan Activities</h2>
			</div>
			<div id="name1_play_box" class="grid_4">
				<button id="opener3"></button>
				<h2>The 30/30 Game</h2>
				<div id="dialog3" title="The 30/30 Rule Game" style="background:#9554c4;">	
				  <div id="dialogEtchingLeft">
					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
				  </div>
				  <div id="dialogButtons">
					   <p class="desktopOnly">For Desktop:</p>  
				  	   <a href="30_game.swf?width=800&height=800" class="dialogRead desktopOnly" rel="prettyPhoto[flash]">Play the Game</a>
					   <br>
					   <p>For Mobile & Tablet Devices:</p>
					   <div id="appStores">
				  			<a href="https://itunes.apple.com/us/app/kids-get-plan-30-30-rule-ebook/id619446496?mt=8&uo=4" target="itunes_store"style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
							<a href="https://play.google.com/store/apps/details?id=air.com.ideasorlando.ebook1" target="_blank">
					  			<img alt="Get it on Google Play" src="images/googleplay.png" style="width: 36%; margin-top: 3px; float:left; margin-bottom:5px;"/></a>
							<a href="http://www.amazon.com/KGAP-The-30-rule/dp/B00BWS0GPI/ref=sr_1_5?ie=UTF8&qid=1387316808&sr=8-5&keywords=kids+get+a+plan+30%2F30" target="_blank"><img src="images/6a0148c71fb71b970c014e8a07bf5a970d-pi.png" alt="Amazon Store Download" style="width: 42%; text-align: center; float: left; margin-left: 65px;"></a>
					  </div>
				</div>
			    <div id="dialogEtchingRight">
				  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
			    </div>
			  </div>
			</div>
			<div id="name2_play_box" class="grid_4">
				 <h2>Disaster Supply Kit</h2>
			</div>
			<div id="name3_play_box" class="grid_4">
				<h2>The Whiz-Bang Quiz</h2>
			</div>
			<div id="name4_play_box" class="grid_4">
				<img src="images/coming_soon_play.png" width="296" height="232" alt="Coming Soon Play">
			</div>
			<div id="name5_play_box" class="grid_4">
				<h2>Firewise Simulator</h2>
			</div>
			<div id="name6_play_box" class="grid_4">
				<img src="images/coming_soon_play.png" width="296" height="232" alt="Coming Soon Play">
			</div>
			<div id="mobileTextBoxCS_story">
				<h2>More Coming Soon</h2>
			</div>
			<img src="images/Adults/bevel_yellow.png" width="999" height="22" alt="Bevel Yellow" class="bevelBottom">
		</div>
		<div class="section makeButton" id="homeMake" data-type="background" data-speed="10">
			<img src="images/Adults/bevel_bottom.png" width="996" height="23" alt="Bevel Bottom" class="makeBevelBottom">
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
			<img src="images/Adults/bevel_top.png" width="996" height="23" alt="Bevel Top" class="makeBevelBottom">
		</div>

		<div class="section factsButton" id="homeFacts" data-type="background" data-speed="10">
			<img src="images/Adults/bevel_bottom.png" width="996" height="23" alt="Bevel Bottom" class="makeBevelBottom">
			<div id="mobileTextBoxMake">
				<h2>Get to know your Emergency Preparation Facts</h2>
			</div>
			<div id="name1_facts_box" class="grid_4">
				<button id="opener4"></button>
				<h2>The 30/30 Rule</h2>
				<div id="dialog4" title="The 30/30 Rule Lightning Facts" style="background:#9554c4; text-shadow: none;
color: white;">	
					<a href="#" class="factView">View PDF</a>
					<ul>
						<li><h4>Lightning Safety Actions</h4>
					<ul>
						<li>Avoid open high ground and isolated large trees.</li>
						<li>Avoid water (swimming pools, lakes and rivers), beaches and boats.</li>
						<li>Seek shelter inside a building or an automobile, but not a convertible or golf cart.</li>
						<li>Stay away from doors, windows, and metal objects such as pipes or faucets.</li>
						<li>Stay off corded telephones and away from electrical devices.</li>
					</ul>
					</li>
						<li><h4>Lightning Facts</h4>
					<ul>
						<li>Lightning heats the air up to 50,000 degrees Fahrenheit. This rapid heating of the air produces the shock wave that results in thunder.</li>
						<li>A ground stoke can produce somewhere between 100 million to one billion volts of electricity.</li>
						<li>The length of an average cloud-to-ground lightning channel can range from two to ten miles.</li>
						<li>You can tell how far away lightning is by counting the seconds between seeing the lightning flash and hearing thunder. For every give seconds you count-lightning is one mile away.</li>
					</ul>
					</li>
						<li><h4>Florida-Lightning Capital of the U.S.A</h4> <i>(Map of Florida with lightning bolts)</i>
					<ul>
						<li>More people die from lightning strikes in Florida every year than in any other state. Why? It's simple really. We have more lightning, and we are fourth largest in populations. On average, 10 people die each year from lightning. Statistics show that teenage boys are most vulnerable. People in their 30's are the next most likely victims, followed by those in their 20's.</li>
						<li>Florida's unique location, surrounded by warm water, provides the necessary ingredients for thunderstorms to form. It has earned us the title of, "Lightning Capital of the U.S.A" Other places in the world have even more lightning though. According to a NASA study, there are areas in the tropics of Africa, Asia, and South and Central America that have more lightning than Florida does. Rwanda, a country in Africa, is known as the, "Lightning Capital of the World."</li>
					</ul>
					</li>
						<li><h4>July- The Cruelest Month</h4>
					<ul>
						<li>July is the worst month for lightning deaths. Summer brings thunderstorms. In July, kids are not usually in school. They are more likely to be outside when a thunderstorm approaches. The Fourth-of-July holiday weekend is particularly dangerous. With many outdoor activities taking place during the afternoon and evening, a prime time for summer thunderstorms, it is easy to see why it can be dangerous.</li>
					</ul>
					</li>
						<li><h4>Location...Location...Location</h4>
					<ul>
						<li>Being safe from lightning is all about being in the right place. The most likely place to be struck by lightning in Florida is near water. Boating, beach going, or fishing in a canal can all be deadly activities when lightning is near. The second deadliest location is being near or under a tree. Trees may give some shelter from rain, but are often deadly locations during lightning. Group sporting events such as baseball, football and soccer are particularly hazardous. Tragically, persons in charge of such events often wait too long before "calling" the game so that people can take refuge. Perhaps this is the reason young people are most often the victims of lightning strikes.</li>
						<li>If you can see lightning or head thunder, even in the distance, you are in danger. Go indoors or into a vehicle and remain there until 30 minutes after the last thunder is heard.</li>
					</ul>
					</li>
						<li><h4>If Someone Is Struck By Lightning, What Should You Do?</h4>
					<ul>
						<li>In the event that a person is struck by lightning, medical care may be needed immediately to save the person's life. With proper treatment, including CPR if necessary, most victims survive a lightning strike.
					<ul>
						<li>Call 9-1-1. Provide directions and information about the likely number of lightning strike victims.</li>
						<li>The first rule of emergency care is "make no more causalities." Rescuers must stay aware of the continuing danger that a lightning storm poses, both to the rescuers as well as to the victim(s).</li>
					</ul>
					</li>
					</ul>
					</li>
						<li><h4>The 30-30 Rule</h4>
					<ul>
						<li>Use the '30-30 RULE' to determine the threat of lightning in your area.
					<ul>
						<li>30 Seconds:
					<ul>
						<li>Count the seconds between seeing lightning and hearing thunder. If this time is less than 30 seconds, lightning is still a potential threat. Seek shelter immediately.</li><br>
						<li>30 Minutes:
					<ul>
						<li>After hearing the last thunder, wait 30 minutes before leaving shelter. Many lightning deaths occur after the storm passes. Stay in a safe area until you are sure the threat has passed.</li>
					</ul>
					</li>
					</ul>
					</li>
					</ul>
					</li>
					</ul>
					</li>
					</ul>
			  	</div>
			</div>
			<div id="name2_facts_box" class="grid_4">
				 <h2>The Oak Tree Club</h2>
			</div>
			<div id="name3_facts_box" class="grid_4">
				<h2>Tinkermeister</h2>
			</div>
			<div id="name4_facts_box" class="grid_4">
				<img src="images/wheel_left.png" width="300" height="236" alt="Wheel Left">
			</div>
			<div id="name5_facts_box" class="grid_4">
				<h2>Mega Track HTW</h2>
			</div>
			<div id="name6_facts_box" class="grid_4">
				<img src="images/wheel_right.png" width="296" height="236" alt="Wheel Right">
			</div>
			<div id="mobileTextBoxCS_story">
				<h2>More Coming Soon</h2>
			</div>
		</div>
	
		<div class="section adultsButton" id="homeAdults" data-type="background" data-speed="10">
			<img src="images/Adults/bevel_bottom.png" width="996" height="23" alt="Bevel Bottom" class="adultsBevelBottom">
			<div id="mobileTextBoxAdults">
				<h2>Download the Teacher Guides and Purchase Books</h2>
			</div>
			<div id="ventLeftDiv"><img src="images/Adults/vents_left.png" width="57" height="215" alt="Vents Left" class="ventLeft"></div>
				<div id="name1_adults_box">
					<h2>Teacher Guides</h2>
				</div>
				<div id="name2_adults_box">
					<h2>Buy the Books</h2>
				</div>
			<div id="ventRightDiv"><img src="images/Adults/vents_right.png" width="57" height="215" alt="Vents Right" class="ventRight"></div>
			<img src="images/Adults/bevel_top.png" width="996" height="23" alt="Bevel Top" class="adultsBevelBottom">
		</div>
		<br class="clear">
	</div>
	
	<div class="rightSidebar">
		<div id="rightNotches">
		</div>
	</div>
	
	<div id="copyright">
		<div class="characterImg">
			<img src="images/FooterCharacters/footer_character<?php
echo(mt_rand(1,4)); ?>.png" width="106" height="141" alt="Footer Character">
		</div>
		<div class="contestImg">
			 <img src="images/tinker_panel_footer_left.png" width="147" height="82" alt="Tinker Panel Footer Left">
		</div>
		<ul class="bottomMenu">
			<li><a href="#">Copyright Information</a></li>
			<li><a href="#">Other Information</a></li>
			<li><a href="#">Site Map</a></li>
			<li><a href="#">Contests</a></li>
		</ul>
		<div class="machineImg">
			<img src="images/pump_footer_right.png" width="150" height="152" alt="Pump Footer Right">
		</div>
		<div class="socialButtons">
			<a href="http://www.floridadisaster.org/index.asp" target="_blank"><img src="images/sert_logo.png" width="71" height="49" alt="Sert Logo" class="serticon"></a>
			<a href="https://www.facebook.com/kidsgetaplan" target="_blank"><img src="images/fb_icon.png" width="33" height="33" alt="Fb Icon" class="fbicon"></a>
		</div>
		
	</div>
	
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" 	src="js/jquery.smint.js"></script>
	
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
	  
	  $(function() {
	    $( "#dialog3" ).dialog({
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
	   
	    $( "#opener3" ).click(function() {
	      $( "#dialog3" ).dialog( "open" );
	    });	
	  });
	  
	  $(function() {
	    $( "#dialog4" ).dialog({
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
	   
	    $( "#opener4" ).click(function() {
	      $( "#dialog4" ).dialog( "open" );
	    });	
	  });
	  
	  </script>
	  
	  <script type="text/javascript">	
	  $.ajaxSetup ({
	      // Disable caching of AJAX responses
	      cache: false
	  });
	  </script>

	  <script type="text/javascript">	
	  	$(document).ready( function() {
	      	$('.subMenu').smint({
	      		'scrollSpeed' : 1000
	      	});
	  	});
	  </script>

	  <script type="text/javascript">	
	  $(document).ready(function(){
	  	// Cache the Window object
	  	$window = $(window);
                
	     $('section[data-type="background"]').each(function(){
	       var $bgobj = $(this); // assigning the object
                    
	        $(window).scroll(function() {
                    
	  		// Scroll the background at var speed
	  		// the yPos is a negative value because we're scrolling it UP!								
	  		var yPos = -($window.scrollTop() / $bgobj.data('speed')); 
		
	  		// Put together our final background position
	  		var coords = '50% '+ yPos + 'px';

	  		// Move the background
	  		$bgobj.css({ backgroundPosition: coords });
		
	  	}); // window scroll Ends

	   });	

	  });
 
	  /* 
	   * Create HTML5 elements for IE's sake
	   */

	  document.createElement("article");
	  document.createElement("section");
	  </script>
			
</body>
</html>