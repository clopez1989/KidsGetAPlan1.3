<!DOCTYPE html>
<html>

<!-- include Header -->
<?php include 'includes/header.php'; ?>

<body onload="window.scrollTo(0,100);" style="background:#9fcb3a;">

	<?php include 'includes/story_nav.php'; ?>

	<div class="section backButton" id="homeMain">
		
		<div id="topLeftButton" class="grid_4">
			<a href="index.php" data-ajax="false"><img src="images/home_mobile.png" width="283" height="107" alt="Home Mobile">
		</div>
		
		<div id="topLeftArt" class="grid_4">
			<img src="images/top_left_panel_art.png" alt=""/>
		</div>
		
		<div class="logoContainerStory" class="grid_4">
			<a href="index.php" data-ajax="false">
				<img src="images/Kids-Get-A-Plan-Logo-Horiz-2013-900x100-opt.png" width="500" height="95" alt="Kids Get A Plan Logo Horiz 2013 900x100 Opt" class="logoImage" />
			</a>
		</div>
		
		<div id="topRightButton" class="grid_4">
			<a href="#myPanel">
				<img src="images/menu_mobile.png" width="280" height="107" alt="Menu Mobile">
			</a>
		</div>
		
		<div id="topRightArt" class="grid_4">
				<img src="images/Header_element_right.png" alt=""/>
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
		
	<div class="leftSidebar">
		<div id="leftNotches">
		</div>
	</div>
	
	<div class="mainWrapper" style="background-color:#9fcb3a; margin-top: 72px; background-image: none;">
		
		<div id="thirty_story_title_box" class="grid_4">
			<img src="images/Sub_Title/sub_title_d_tinkermeister.png" width="295" height="246" alt="Sub Title D 30 30">
		</div>
		
		<div id="name3_story_box_story" class="grid_4">
				<button id="opener"></button>
				<!-- <h2>The Story</h2> -->
			  	<div id="dialog" title="Professor Tinkermeister Story" style="background:#9fcb3a;">
				 	<div id="dialogEtchingLeft">
					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
				  </div>
				  	<div id="dialogButtons">
						<p class="desktopOnly">For Desktop:</p>  
				  		<a href="book.swf?bookXML=book2-english.xml&lightbox[width]=800&lightbox[height]=650" class="dialogRead desktopOnly lightbox">Read the Story</a>
						<br>
						<p>For Mobile & Tablet Devices:</p>
						<div id="appStores">
				  			<a href="https://itunes.apple.com/us/app/kgap-professor-tinkermeister/id652369474?mt=8" target="itunes_store" id="appleStoreBtn" style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
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
		
		<a href="wacky/wacky.swf?lightbox[width]=800&lightbox[height]=650" class="lightbox desktopGame">
			<div id="name3_play_box_story" class="grid_4">
				<button id="openerTinkerPlay"></button>
				<!-- <h2>Tinkermeister&rsquo;s Activity</h2> -->
				<div id="dialogTinkerPlay" title="The Tinkermeister's Activity" style="background:#9fcb3a;">	
				  	<div id="dialogEtchingLeft">
					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
				  </div>
				  	<div id="dialogButtons">
					   <p class="desktopOnly">For Desktop:</p>  
				  	   <a href="wacky/wacky.swf?width=800&height=800" class="dialogRead desktopOnly" rel="prettyPhoto[flash]">Play the Game</a>
					   <br>
					   <p>For Mobile & Tablet Devices:</p>
					   <div id="appStores">
				  			<a href="https://itunes.apple.com/us/app/kgap-whiz-bang-weather-watching/id655047704?mt=8" target="itunes_store" id="appleStoreBtn" style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
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
		</a>
		
		<div id="name3_make_box_story" class="grid_4">
			<button id="openerTinkerMake"></button>
			<!-- <h2>Cut-Out and Color</h2> -->
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
		
		<a href="?lightbox[width]=85p&lightbox[height]=85p#textFacts2" class="lightbox" onclick="javascript:TornadoTrack();">
			<div id="name3_facts_box_story" class="grid_4">
				<!-- <button id="opener4"></button> -->
				<!-- <h2>Tornado Safety Facts</h2> -->
				<div id="dialog4" title="The Tinkermeister Tornado Facts" style="background:#9fcb3a; text-shadow: none; color: black;">
					<div id="textFacts2" style="background:#9fcb3a; text-shadow: none; color: black;">
						<br>
						<ul>
							<li><h4 style="margin-bottom: -11px;">Tornado Safety Actions</h4>
								<ul>
									<li><b>Homes</b>
										<ul>
											<li>When a tornado watch is issued, be prepared to take action.</li>
											<li>When a tornado warning is issued, or a tornado is imminent, move to a small interior room away from windows.</li>
											<li>Consider constructing a tornado safe room in or adjacent to your home.</li>
										</ul>
									</li>
									<li><b>Open Country</b>
										<ul>
											<li>Seek a nearby shelter if time permits.</li>
											<li>If not, lie flat in the nearest depression, a ditch or culvert. Cover your head with your arms.</li>
										</ul>
									</li>
									<li><b>Vehicles</b>
										<ul>
											<li>Abandon your vehicle and seek refuge in a building or, as a last resort, a ditch.</li>
											<li>Do not try to outrun a tornado.</li>
										</ul>
									</li>
									<li><b>Offices, Hotels and Condominiums</b>
										<ul>
											<li>When action is required, take shelter in an interior hallway on a lower floor, closet or small room.</li>
											<li>As a last resort, get under heavy furniture, away from windows.</li>
										</ul>
									</li>
									<li><b>Manufactured and Mobile Homes</b>
										<ul>
											<li>Have a plan of where to go during a tornado threat-a nearby pre-identified safe structure within walking distance.</li>
											<li>When a tornado watch is issued, be prepared to take action.</li>
										</ul>
									</li>
								</ul>
							</li>
							<li><h4 style="margin-bottom: -11px;">Tornado Facts</h4>
								<ul>
									<li>Tornadoes are powerful and hard to predict! The time of year makes a big difference in how they form and just how powerful they are likely to be.</li><br>
									<li><b>Summer and Fall Tornadoes</b>
										<ul>
											<li>There are more tornadoes during June, July and August than at any other time of the year. In the summertime, thunderstorms move inland with the sea breezes. Tornadoes that develop within these thunderstorms may travel in almost any direction.</li>
											<li>Summertime tornadoes are usually small. They don't last very long. They usually cause minor damage and few deaths or injuries.</li>
											<li>During the summer and fall months tropical cyclones, or hurricanes, may produce tornadoes. These tornadoes often form in the outer rainbands and to the right of the hurricane's forward motion. Like other summer tornadoes, they are generally weak and do not usually last long. But sometimes, they can be violent. These tornadoes form quickly, and they may strike with little or no warning.</li>
										</ul>
									</li>
									<li><b>Winter and Spring Tornadoes</b>
										<ul>
											<li>When the winds near the ground change quickly and are different from the winds high in the jet stream, it can create wind shear. Wind shear can cause the thunderstorms to spin and get stronger. Very strong thunderstorms are called supercells. Supercells can move over land 30 to 50 mph! These storms can produce strong winds (known as downbursts), large hail and violent tornadoes.</li>
										</ul>
									</li>
								</ul>
							</li>
							<li><h4 style="margin-bottom: -11px;">Tornado Safety</h4>
								<ul>
									<li>In most of the U.S., tornadoes occur during the late afternoon or early evening. Yet, tornadoes in Florida are just as likely to occur during the night as in the afternoon. That is why it is good to always be prepared. If people are asleep they may not receive warnings from radio or TV. A solution to this problem is to have a NOAA Weather Radio in your home. A NOAA Weather Radio will alert you to a warning at any time, day or night.</li>
									<li>The National Weather Service issues watches and warnings during a tornado threat. When a warning is issued for your area, you should take cover immediately.</li>
									<li>If you hear the roaring and rumbling of a tornado, seek shelter in a small room on the lowest floor of a strong building. You should stay away from doors and windows. Leave mobile homes for safer shelter. Never try to outrun a tornado in a car. Instead, leave your car and take cover in a nearby building or lie down in a ditch on the side of the road.</li>
								</ul>
							</li>
							<li><h4 style="margin-bottom: -11px;">Tornadoes Are Measured By The Fujita Scale</h4>
								<ul>
									<li>The Fujita scale (F-scale) uses actual damage to estimate a tornado's wind speed.</li><br>
									<li><b>F0 Gale Tornado</b>
										<ul>
											<li>40-72 mph</li>
											<li>Some damage to chimneys. Tree branches broken off. Shallow rooted trees uprooted.</li>
										</ul>
									</li>
									<li><b>F1 Moderate Tornado</b>
										<ul>
											<li>73-112 mph</li>
											<li>Peels surface off roofs. Mobile homes overturned. Moving autos pushed off roads.</li>
										</ul>
									</li>
									<li><b>F2 Significant Tornado</b>
										<ul>
											<li>113-157 mph</li>
											<li>Considerable damage. Roofs torn off frame houses. Large trees snapped or uprooted. Light-object missiles generated.</li>
										</ul>
									</li>
									<li><b>F3 Severe Tornado</b>
										<ul>
											<li>158-206 mph</li>
											<li>Severe damage. Roofs and some walls torn off well-constructed homes. Most trees in forests uprooted. Heavy cars lifted off ground.</li>
										</ul>
									</li>
									<li><b>F4 Devastating Tornado</b>
										<ul>
											<li>207-260 mph</li>
											<li>Well-constructed houses leveled. Structures blown off weak foundations. Cars thrown and large missiles generated.</li>
										</ul>
									</li>
									<li><b>F5 Incredible Tornado</b>
										<ul>
											<li>261-318 mph</li>
											<li>Strong frame houses lifted off foundations and disintegrated. Automobile-sized missiles fly through the air in excess of 100 mph. Trees debarked.</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<br>
					</div>
			  	</div>
			</div>
		</a>
		
		<div id="name3_adults_box_story" class="grid_4">
			<button id="openerTeacherGuide"></button>
			<!-- <h2>Tinkermeister</h2> -->
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
			<a href="#" target="_blank"><img src="images/FooterCharacters/footer_character4.png" width="106" height="141" alt="Footer Character"></a>
		</div>
		<?php include 'includes/footer.php'; ?>
	</div>
	
	<?php include 'includes/audio.php'; ?>
	
	<?php include 'includes/functions.php'; ?>
			
</body>

</html>