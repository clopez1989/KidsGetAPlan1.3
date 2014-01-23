<!DOCTYPE html>
<html>

<!-- include Header -->
<?php include 'header.php'; ?>

<body onload="window.scrollTo(0,100);" style="background:#9fcb3a;">

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
			  <div id="dialog" title="Professor Tinkermeister Story" style="background:#9fcb3a;">	
				  <div id="dialogEtchingLeft">
					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
				  </div>
					<div id="dialogButtons">
						<p class="desktopOnly">For Desktop:</p>  
				  		<a href="book.swf?bookXML=book2-english.xml&width=800&height=650" class="dialogRead desktopOnly" rel="prettyPhoto[flash1]">Read the Story</a>
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
			<div id="dialog3" title="The Tinkermeister's Activity" style="background:#9fcb3a;">	
			  <div id="dialogEtchingLeft">
				   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
			  </div>
			  <div id="dialogButtons">
				   <p class="desktopOnly">For Desktop:</p>  
			  	   <a href="wacky/wacky.swf?width=800&height=800" class="dialogRead desktopOnly" rel="prettyPhoto[flash]">Play the Game</a>
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
			<button id="openerTinkerMake"></button>
			<h2>Cut-Out and Color</h2>
		  <div id="dialogTinkerMake" title="Tinkermeister Downloads" style="background:#9fcb3a;">	
			  <div id="dialogEtchingLeft">
				   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
			  </div>
				<div id="dialogButtons">
					<p>Download Coloring Pages:</p>  
			  		<a href="coloring_books/tinkermeistercoloring.pdf" class="dialogRead" target="_blank">Tinkermeister</a>
					<br>
					<p>Download Character Cut-Outs:</p>
					<a href="character_sheets/character_sheet_tinkermeister_2.pdf" class="dialogRead" target="_blank" style="margin-bottom:10px;">Tinkermeister</a>
					<a href="character_sheets/character_sheet_tinkermeister_machine_2.pdf" class="dialogRead" target="_blank" style="margin-bottom:10px;">Tinkermeister's Machine</a>
			</div>
		  	<div id="dialogEtchingRight">
			  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
		  	</div>
		  </div>
		</div>
		<div id="name3_facts_box_story" class="grid_4">
			<button id="opener4"></button>
			<h2>Tornado Safety Facts</h2>
				<div id="dialog4" title="The Tinkermeister Tornado Facts" style="background:#9fcb3a; text-shadow: none;
color: black;">
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
						<li>The Fujita scale (F-scale) uses actual damage to estimate a tornado's wind speed</li><br>
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
			<button id="openerTeacherGuide"></button>
			<h2>Tinkermeister</h2>
		    <div id="dialogTeacherGuide" title="Parent &amp; Teacher Guide" style="background:#9fcb3a;">
			  <div id="dialogEtchingLeft">
				   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
			  </div>
				<div id="dialogButtons">
					<p>Download PDF Guides:</p>  
			  		<a href="parent_teacher_guides/Grade_2_Guide_for_Teachers_and_Parents.pdf" class="dialogRead" target="_blank">Tinkermeister Guide</a>
					<p>Buy The Book:</p>  
			  		<a href="https://dpifulfillment.myprintdesk.com/walk_up.php?id=eed80cb546ac9300f03bab6a7be84acd390a1fe5" class="dialogRead" target="_blank">Tinkermeister  Book</a>
				</div>
		      <div id="dialogEtchingRight">
			  	<img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
		      </div>
	        </div>
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
			<li>
				<button id="openerCopyright"></button>
				<a href="#">Copyright Information</a>
			    <div id="dialogCopyright" title="Parent &amp; Teacher Guide" style="background:#9fcb3a;">
				  <div id="dialogEtchingLeft">
					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
				  </div>
					<div id="dialogButtons">
						I. RESTRICTIONS ON USE OF MATERIALS
						This site is provided for the People as a public service by the Florida Division of Emergency Management. The web site “Florida Disaster.org” is owned and operated by THE STATE OF FLORIDA, DIVISION OF EMERGENCY MANAGEMENT (Division). Materials may be downloaded but only for non-commercial use, provided all copyright and other proprietary notices are kept intact. Modification of the materials or use of the materials for any other purpose is a violation of THE STATE OF FLORIDA and the Division’s copyright and other proprietary rights. For purposes of this Agreement, the use of any such material on any other Web site or networked computer environment is prohibited. All trademarks, service marks, and trade names are proprietary to THE STATE OF FLORIDA and the Division.

						In the event that you do download software from FloridaDisaster.org, the software, including any files, images incorporated in or generated by the software, and data accompanying the software (collectively, the "Software") are licensed to you by THE STATE OF FLORIDA and the Division. THE STATE OF FLORIDA and the Division does not transfer the title to the Software to you. You do, however, own the medium on which the Software is recorded, but THE STATE OF FLORIDA and the Division retains the full and complete title to the Software, and all intellectual property rights therein. You may not redistribute, sell, decompile, reverse engineer, disassemble, or otherwise reduce the Software to a human-perceivable form.

						II. JURISDICTIONAL ISSUES
						Unless otherwise specified, the materials in “FloridaDisaster.org” are presented solely for the purpose of promoting educational programs, applications, and other products available in the United States, its territories, possessions, and protectorates. This site is controlled and operated by THE STATE OF FLORIDA and the Division from its offices within THE STATE OF FLORIDA, United States of America. THE STATE OF FLORIDA and the Division makes no representation that materials presented in “FloridaDisaster.org” are appropriate or available for use in other locations. Those who choose to access this site from other locations do so on their own initiative and are responsible for compliance with local laws, if and to the extent local laws are applicable. Software from this site is further subject to United States export controls. No software from this site may be downloaded or otherwise exported or re-exported (1) into (or to a national or resident of) Cuba, Iraq, Libya, North Korea, Iran, Syria, or any other country to which the U.S. has embargoed goods; or (2) to anyone on the U.S. Treasury Department's list of Specially Designated Nationals or the U.S. Commerce Department's Table of Deny Orders. By downloading or using the Software, you represent and warrant that you are not located in, under the control of, or a national or resident of any such country or on any such list.

						III. TERMINATION
						This agreement is effective until terminated by either party. This agreement may be terminated at any time by destroying all materials obtained from any and all STATE OF FLORIDA or Division site(s) and all related documentation, copies and installations thereof, whether made under the terms of this agreement or otherwise. This agreement will terminate immediately without notice from THE STATE OF FLORIDA and Division if in sole discretion you fail to comply with any term or provision of this agreement. Upon termination, you must destroy all materials obtained from this site and any and all other STATE OF FLORIDA and Division site(s) and all copies thereof, whether made under the terms of this agreement or otherwise.

						IV. DISCLAIMER
						The materials presented in “FloridaDisaster.org” are provided "as is" and without warranties of any kind, express or implied. To the fullest extent permissible pursuant to applicable law, THE STATE OF FLORIDA and the Division disclaims all warranties, express or implied, including, but not limited to, implied warranties of merchantability and fitness for a particular purpose. THE STATE OF FLORIDA and Division does not warrant that the functions contained in the materials will be uninterrupted or error-free, that defects will be corrected, or that “FloridaDisaster.org” or the server that makes it available are free of viruses or other harmful components. THE STATE OF FLORIDA and the Division does not warrant or make any representations regarding the use or the results or the use of the materials “FloridaDisaster.org” in terms or their correctness, accuracy, reliability, or otherwise. You (and not THE STATE OF FLORIDA and Division) assume the entire cost of all necessary servicing, repair, or correction. Applicable law may not allow the exclusion of implied warranties, so the above exclusion may not apply to you.

						V. LIMITATION OF LIABILITY
						Under no circumstances, including, but not limited to, negligence, shall THE STATE OF FLORIDA and Division be liable for any special or consequential damages that result from the use of, or the inability to use, the materials presented on “FloridaDisaster.org.” Even if THE STATE OF FLORIDA and the Division or a STATE OF FLORIDA and Division authorized representative has been advised of the possibility of such damages. Applicable law may not allow the limitation or exclusion of liability or incidental or consequential damages, so the above limitation or exclusion may not apply to you. In no event shall THE STATE OF FLORIDA and Division’s total liability to you for all damages, losses, and causes of action (whether in contract, tort (including, but not limited to, negligence), or otherwise) exceed the amount paid by you, if any, for accessing this site.

						VI. OTHER
						This agreement shall be governed by and construed in accordance with the laws of the State of Florida, without giving effect to any principles of conflicts of law. If any provision of this agreement shall be unlawful, void, or for any reason unenforceable, then that provision shall be deemed severable from this agreement and shall not affect the validity and enforceability of any remaining provisions. This is the entire agreement between the parties relating to the subject matter herein and shall not be modified except in writing, signed by both parties.
					</div>
			      <div id="dialogEtchingRight">
				  	<img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
			      </div>
		        </div>
			</li>
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
	   
 
	    $( "#openerTeacherGuide" ).click(function() {
	      $( "#dialogTeacherGuide" ).dialog( "open" );
	    });
		
	    $( "#dialogTeacherGuide" ).dialog({
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
	   
 
	    $( "#openerTeacherGuide" ).click(function() {
	      $( "#dialogTeacherGuide" ).dialog( "open" );
	    });	
		
	    $( "#dialogTinkerMake" ).dialog({
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
	   
 
	    $( "#openerTinkerMake" ).click(function() {
	      $( "#dialogTinkerMake" ).dialog( "open" );
	    });	
		
	    $( "#dialogCopyright" ).dialog({
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
	   
 
	    $( "#openerCopyright" ).click(function() {
	      $( "#dialogCopyright" ).dialog( "open" );
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