<!DOCTYPE html>
<html>

<!-- include Header -->
<?php include 'header.php'; ?>

<body onload="window.scrollTo(0,100);" style="background-color:#6dcef5;">

<?php include 'story_nav.php'; ?>

<!--  include Navigation -->
	<!-- <?php include 'story_nav.php'; ?> -->

	<div class="section backButton" id="homeMain">
		<div id="topLeftButton" class="grid_4">
			<a href="index.php" data-ajax="false"><img src="images/home_mobile.png" width="283" height="107" alt="Home Mobile">
		</div>
		<div id="topLeftArt" class="grid_4">
			<img src="images/top_left_panel_art.png" alt=""/>
		</div>
		<div class="logoContainer_story" class="grid_4">
			<a href="index.php" data-ajax="false"><img src="images/Kids-Get-A-Plan-Logo-Horiz-2013-900x100-opt.png" width="500" height="95" alt="Kids Get A Plan Logo Horiz 2013 900x100 Opt" class="logoImage" /></a>
		</div>
		<div id="topRightButton" class="grid_4">
			<a href="#myPanel"><img src="images/menu_mobile.png" width="280" height="107" alt="Menu Mobile"></a>
		</div>
		<div data-role="panel" id="myPanel" data-theme="b" data-display="push" data-position="right" data-position-fixed="true" style="background-color:#7c846b; background-image:none; overflow-x: scroll;">
			<a href="" data-rel="close" id="closePanelButton"><img src="images/close_m_panel.png" width="665" height="184" alt="Close M Panel"></a>
			<a href="#thirty_story_title_box" id="homePanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_home_normal.png" width="580" height="164" alt="Btn Home Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name3_story_box_story" id="storyPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_read_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name3_play_box_story" id="playPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_play_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name3_make_box_story" id="makePanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_make_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name3_facts_box_story" id="factsPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_facts_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name3_adults_box_story" id="adultsPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_adults_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
		</div>
		<br class="clear">
	</div>	
		<div id="topRightArt" class="grid_4"  style="top: -78px;">
			<img src="images/Header_element_right.png" alt=""/>
		</div>
	<div class="leftSidebar">
		<div id="leftNotches">
		</div>
	</div>
	
	
	<div class="mainWrapper" style="background-color:#9fcb3a; margin-top: 54px; background-image: none;">
		<div id="thirty_story_title_box" class="grid_4">
			<img src="images/Sub_Title/sub_title_d_tinkermeister.png" width="295" height="246" alt="Sub Title D 30 30">
		</div>
			<div id="name3_story_box_story" class="grid_4">
				<button id="opener"></button>
				<h2>The Story</h2>
			  <div id="dialog" title="Professor Tinkermeister Story" style="background:#9554c4;">	
				  <div id="dialogEtchingLeft">
					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
				  </div>
					<div id="dialogButtons">
						<p class="desktopOnly">For Desktop:</p>  
				  		<a href="book.swf?bookXML=book2-english.xml&width=800&height=650" class="dialogRead desktopOnly" rel="prettyPhoto[flash]">Read the Story</a>
						<br>
						<p>For Mobile & Tablet Devices:</p>
						<div id="appStores">
				  			<a href="https://itunes.apple.com/us/app/kgap-professor-tinkermeister/id652369474?mt=8" target="itunes_store"style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
							<a href="https://play.google.com/store/apps/details?id=air.com.ideasorlando.TinkermeisterMobileBook" target="_blank" class="googlePlayBtn">
					  			<img alt="Get it on Google Play" src="images/googleplay.png" style="width: 36%; margin-top: 3px; float:left; margin-bottom:5px;"/>
							</a>
							<a href="http://www.amazon.com/KGAP-Professor-Tinkermeister-Whiz-Bang-Weather-Watching/dp/B00CXXSQNK/ref=sr_1_3?s=mobile-apps&ie=UTF8&qid=1389634640&sr=1-3" target="_blank"><img src="images/6a0148c71fb71b970c014e8a07bf5a970d-pi.png" alt="Amazon Store Download" style="width: 42%; text-align: center; float: left; margin-left: 65px;" class="amazonBtn"></a>
						</div>
				</div>
			  <div id="dialogEtchingRight">
				  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
			  </div>
			  </div>
			</div>
		<div id="name3_play_box_story" class="grid_4">
			<button id="opener3"></button>
			<h2>Tinkermeister&rsquo;s Activity</h2>
			<div id="dialog3" title="The Tinkermeister's Activity" style="background:#9554c4;">	
			  <div id="dialogEtchingLeft">
				   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
			  </div>
			  <div id="dialogButtons">
				   <p class="desktopOnly">For Desktop:</p>  
			  	   <a href="wacky.swf?width=800&height=800" class="dialogRead desktopOnly" rel="prettyPhoto[flash]">Play the Game</a>
				   <br>
				   <p>For Mobile & Tablet Devices:</p>
				   <div id="appStores">
			  			<a href="https://itunes.apple.com/us/app/kgap-whiz-bang-weather-watching/id655047704?mt=8" target="itunes_store"style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
						<a href="https://play.google.com/store/apps/details?id=air.com.ideasorlando.TinkermeisterMobileGame" target="_blank" class="googlePlayBtn">
				  			<img alt="Get it on Google Play" src="images/googleplay.png" style="width: 36%; margin-top: 3px; float:left; margin-bottom:5px;"/></a>
						<a href="http://www.amazon.com/KGAP-Professor-Tinkermeisters-Whiz-Bang-Weather-Watching/dp/B00CYP3RDQ/ref=sr_1_4?s=mobile-apps&ie=UTF8&qid=1389634871&sr=1-4" target="_blank"><img src="images/6a0148c71fb71b970c014e8a07bf5a970d-pi.png" alt="Amazon Store Download" style="width: 42%; text-align: center; float: left; margin-left: 65px;" class="amazonBtn"></a>
				  </div>
			</div>
		    <div id="dialogEtchingRight">
			  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
		    </div>
		  </div>
		</div>
		<div id="name3_make_box_story" class="grid_4">
			<h2>Cut-Out and Color</h2>
		</div>
		<div id="name3_facts_box_story" class="grid_4">
			<button id="opener4"></button>
			<h2>Tornado Safety Facts</h2>
				<div id="dialog4" title="The Tinkermeister Tornado Facts" style="background:#9554c4; text-shadow: none;
color: white;">	
					<a href="#" class="factView">View PDF</a>
					<ul>
						<li>Tornado Safety Actions
					<ul>
						<li>Homes
					<ul>
						<li>When a tornado watch is issued, be prepared to take action.</li>
						<li>When a tornado warning is issued, or a tornado is imminent, move to a small interior room away from windows.</li>
						<li>Consider constructing a tornado safe room in or adjacent to your home.</li>
					</ul>
					</li>
						<li>Open Country
					<ul>
						<li>Seek a nearby shelter if time permits.</li>
						<li>If not, lie flat in the nearest depression, a ditch or culvert. Cover your head with your arms.</li>
					</ul>
					</li>
						<li>Vehicles
					<ul>
						<li>Abandon your vehicle and seek refuge in a building or, as a last resort, a ditch.</li>
						<li>Do not try to outrun a tornado.</li>
					</ul>
					</li>
						<li>Offices, Hotels and Condominiums
					<ul>
						<li>When action is required, take shelter in an interior hallway on a lower floor, closet or small room.</li>
						<li>As a last resort, get under heavy furniture, away from windows.</li>
					</ul>
					</li>
						<li>Manufactured and Mobile Homes
					<ul>
						<li>Have a plan of where to go during a tornado threat-a nearby pre-identified safe structure within walking distance.</li>
						<li>When a tornado watch is issued, be prepared to take action.</li>
					</ul>
					</li>
					</ul>
					</li>
						<li>Tornado Facts
					<ul>
						<li>Tornadoes are powerful and hard to predict! The time of year makes a big difference in how they form and just how powerful they are likely to be.</li><br>
						<li>Summer and Fall Tornadoes
					<ul>
						<li>There more tornadoes during June, July and August than at any other time of the year. In the summertime, thunderstorms move inland with the sea breezes. Tornadoes that develop within these thunderstorms may travel in almost any direction.</li>
						<li>Summertime tornadoes are usually small. They don't last very long. They usually cause minor damage and few deaths or injuries.</li>
						<li>During the summer and fall months tropical cyclones, or hurricanes, may produce tornadoes. These tornadoes often from in the outer rainbands and to the right of the hurricane's forward motion. Like other summer tornadoes, they are generally weak and don't usually last long. But sometimes, they can be violent. These tornadoes form quickly, and they may strike with little or no warning.</li>
					</ul>
					</li>
						<li>Winter and Spring Tornadoes
					<ul>
						<li>The most deadly tornadoes have happened in the late winter an early spring months. During the cool season, the jet stream that flows east high above the United States dips south over the Gulf of Mexico. The jet stream picks up energy and moisture from the warm gulf waters. Strong thunderstorms can form into a squall line. The squall line can sweep across the state.</li>
						<li>When the winds near the ground change quickly and are different from the winds high in the jet stream, it can create wind shear. Wind shear can cause the thunderstorms to spin and get stronger. Very strong thunderstorms are called supercells. Supercells can move over land 30 to 50 mph! These storms can produce strong winds (known as downbursts), large hail and violent tornadoes. Late winter and springtime tornadoes usually move from the southwest or west.</li>
					</ul>
					</li>
					</ul>
					</li>
						<li>Tornado Safety
					<ul>
						<li>In most of the U.S., tornadoes occur during the late afternoon or early evening. Yet, tornadoes in Florida are just as likely to occur during the night as in the afternoon. This makes tornadoes in Florida even more dangerous. If people are asleep they may not receive warnings from radio or TV. A solution to this problem is to have a NOAA Weather Radio in your home. A NOAA Weather Radio will alert you to a warning at any time, day or night.</li>
						<li>The National Weather Service issues watches and warnings during a tornado threat. When a warning is issued for your area, you should take cover immediately.</li>
						<li>If you hear the roaring and rumbling of a tornado, seek shelter in a small room on the lowest floor of a strong building. You should stay away from doors and windows. Leave mobile homes for safer shelter. Never try to outrun a tornado in a car. Instead, leave your car and take cover in a nearby building or lie down in a ditch on the side of the road.</li>
					</ul>
					</li>
						<li>Tornadoes Are Measured By The Fujita Scale
					<ul>
						<li>The Fujita scale (F-scale) uses actual damage to estimate a tornado's wind speed</li>
						<li>F0 Gale Tornado
					<ul>
						<li>40-72 mph</li>
						<li>Some damage to chimneys. Tree branches broken off. Shallow rooted trees uprooted.</li>
					</ul>
					</li>
						<li>F1 Moderate Tornado
					<ul>
						<li>73-112 mph</li>
						<li>Peels surface off roofs. Mobile homes overturned. Moving autos pushed off roads.</li>
					</ul>
					</li>
						<li>F2 Significant Tornado
					<ul>
						<li>113-157 mph</li>
						<li>Considerable damage. Roofs torn off frame houses. Large trees snapped or uprooted. Light-object missiles generated.</li>
					</ul>
					</li>
						<li>F3 Severe Tornado
					<ul>
						<li>158-206 mph</li>
						<li>Severe damage. Roofs and some walls torn off well-constructed homes. Most trees in forests uprooted. Heavy cars lifted off ground.</li>
					</ul>
					</li>
						<li>F4 Devastating Tornado
					<ul>
						<li>207-260 mph</li>
						<li>Well-constructed houses leveled. Structures blown off weak foundations. Cars thrown and large missiles generated.</li>
					</ul>
					</li>
						<li>F5 Incredible Tornado
					<ul>
						<li>261-318 mph</li>
						<li>Strong frame houses lifted off foundations and disintegrated. Automobile-sized missiles fly through the air in excess of 100 mph. Trees debarked.</li>
					</ul>
					</li>
					</ul>
					</li>
					</ul>
			  	</div>
		</div>
		<div id="name3_adults_box_story" class="grid_4">
			<h2>Tinkermeister</h2>
		</div>
		<br class="clear">
	</div>
	
	<div class="rightSidebar">
		<div id="rightNotches">
		</div>
	</div>
	
	<div id="copyright">
		<div class="characterImg">
					<a href="http://demvideoportal.com/" target="_blank"><img src="images/FooterCharacters/footer_character4.png" width="106" height="141" alt="Footer Character"></a>
				</div>
		<div class="contestImg">
			 <img src="images/tinker_panel_footer_left.png" width="147" height="82" alt="Tinker Panel Footer Left">
		</div>
		<ul class="bottomMenu">
			<li><a href="#">Copyright Information</a></li>
			<li><a href="#">Other Information</a></li>
			<li><a href="#">Site Map</a></li>
			<li><a href="http://demvideoportal.com/" target="_blank">Contests</a></li>
		</ul>
		<div class="socialButtons">
			<a href="#"><img src="images/sert_logo.png" width="71" height="49" alt="Sert Logo" class="serticon"></a>
			<a href="https://www.facebook.com/kidsgetaplan"><img src="images/fb_icon.png" width="33" height="33" alt="Fb Icon" class="fbicon"></a>
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
	// JavaScript Document

	// Soution for the target attribute to validate in xhtml strict
	function externalLinks() { 
	 if (!document.getElementsByTagName) return; 
	 var anchors = document.getElementsByTagName("a"); 
	 for (var i=0; i<anchors.length; i++) { 
	   var anchor = anchors[i]; 
	   if (anchor.getAttribute("href") && 
	       anchor.getAttribute("rel") == "external") 
	     anchor.target = "_blank"; 
	 } 
	} 
	window.onload = externalLinks;
	// Open new window with restricted dimensions
	function MM_openBrWindow(theURL,winName,features) { //v2.0
	  window.open(theURL,winName,features);
	}
	</script>
	
	<script type="text/javascript">	
	$.ajaxSetup ({
	    // Disable caching of AJAX responses
	    cache: false
	});
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
	
	<script>
	  $(function() {
	    $( "#dialog_thirty_story" ).dialog({
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
	   
 
	    $( "#opener_thirty_story" ).click(function() {
	      $( "#dialog_thirty_story" ).dialog( "open" );
	    });
		
		
		
	  });
	</script>  
	
	
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