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
			<a href="index.php" data-ajax="false"><img src="images/Kids-Get-A-Plan-Logo-Horiz-2013-900x100-opt.png" width="500" height="95" alt="Kids Get A Plan" class="logoImage" /></a>
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
			<div id="name2_box" class="grid_4 morph" onclick="location.href='tinkermeister.php'">
				<a href="tinkermeister.php" rel="external"></a>
			</div>
			<div id="name3_box" class="grid_4 morph" onclick="location.href='oaktree.php'">
				<a href="oaktree.php" rel="external"></a>
			</div>
			<div id="name4_box" class="grid_2 morph">
				<h2>Coming Soon</h2>
			</div>
			<div id="name5_box" class="grid_2 morph" onclick="location.href='megatrack.php'">
				<a href="megatrack.php" rel="external"></a>
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
					  		<a href="book.swf?bookXML=book1-english.xml&width=800&height=650" class="dialogRead desktopOnly" rel="prettyPhoto[flashA]">Read the Story</a>
							<br>
							<p>For Mobile & Tablet Devices:</p>
							<div id="appStores">
					  			<a href="https://itunes.apple.com/us/app/kids-get-plan-30-30-rule-ebook/id619446496?mt=8&uo=4" target="itunes_store"style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
								<a href="https://play.google.com/store/apps/details?id=air.com.ideasorlando.ebook1" target="_blank">
						  			<img alt="Get it on Google Play" src="images/googleplay.png" style="width: 36%; margin-top: 3px; float:left; margin-bottom:5px;" class="googlePlayBtn"/>
								</a>
								<a href="http://www.amazon.com/KGAP-The-30-rule/dp/B00BWS0GPI/ref=sr_1_5?ie=UTF8&qid=1387316808&sr=8-5&keywords=kids+get+a+plan+30%2F30" target="_blank"><img src="images/6a0148c71fb71b970c014e8a07bf5a970d-pi.png" alt="Amazon Store Download" style="width: 42%; text-align: center; float: left; margin-left: 65px;" class="amazonBtn"></a>
							</div>
					</div>
				  <div id="dialogEtchingRight">
					  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
				  </div>
				  </div>
			</div>
			<div id="name2_story_box" class="grid_4">
				 <button id="openerOakStory"></button>
				 <h2>The Oak Tree Club</h2>
			  <div id="dialogOakStory" title="The Oak Tree Club Story" style="background:#6dcef5;">	
				  <div id="dialogEtchingLeft">
					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
				  </div>
					<div id="dialogButtons">
						<p class="desktopOnly">For Desktop:</p>  
				  		<a href="book.swf?bookXML=book3-english.xml&width=800&height=650" class="dialogRead desktopOnly" rel="prettyPhoto[flashB]">Read the Story</a>
						<br>
						<p>For Mobile & Tablet Devices:</p>
						<div id="appStores">
				  			<a href="https://itunes.apple.com/us/app/kgap-oak-tree-club-disaster/id700000188?mt=8" target="itunes_store"style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
							<a href="https://play.google.com/store/apps/details?id=air.com.ideasorlando.OakTreeMobileBook" target="_blank" class="googlePlayBtn">
					  			<img alt="Get it on Google Play" src="images/googleplay.png" style="width: 36%; margin-top: 3px; float:left; margin-bottom:5px;"/>
							</a>
							<a href="http://www.amazon.com/KGAP-The-Oak-Tree-Club/dp/B00DUHT24K/ref=sr_1_9?s=mobile-apps&ie=UTF8&qid=1389636385&sr=1-9" target="_blank"><img src="images/6a0148c71fb71b970c014e8a07bf5a970d-pi.png" alt="Amazon Store Download" style="width: 42%; text-align: center; float: left; margin-left: 65px;" class="amazonBtn"></a>
						</div>
				</div>
			  <div id="dialogEtchingRight">
				  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
			  </div>
			  </div>
			</div>
			<div id="name3_story_box" class="grid_4">
				<button id="openerTinkerStory"></button>
				<h2>The Wacky Whiz-Bang Weather Watching Wonder</h2>
  			  <div id="dialogTinkerStory" title="The Tinkermeister Story" style="background:#9fcb3a;">	
  				  <div id="dialogEtchingLeft">
  					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
  				  </div>
  					<div id="dialogButtons">
  						<p class="desktopOnly">For Desktop:</p>  
  				  		<a href="book.swf?bookXML=book2-english.xml&width=800&height=650" class="dialogRead desktopOnly" rel="prettyPhoto[flashC]">Read the Story</a>
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
			<div id="name4_story_box" class="grid_4">
				<img src="images/coming_soon_story.png" width="293" height="230" alt="Coming Soon Story">
			</div>
			<div id="name5_story_box" class="grid_4">
				<button id="openerMegaStory"></button>
				<h2>Mega Track HTW</h2>
    			  <div id="dialogMegaStory" title="The MegaTrack HTW Story" style="background:#ff962e;">	
    				  <div id="dialogEtchingLeft">
    					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
    				  </div>
    					<div id="dialogButtons">
    						<p class="desktopOnly">For Desktop:</p>  
    				  		<a href="book.swf?bookXML=book4-english.xml&width=800&height=650" class="dialogRead desktopOnly" rel="prettyPhoto[flashD]">Read the Story</a>
    						<br>
    						<p>For Mobile & Tablet Devices:</p>
    						<div id="appStores">
    				  			<a href="https://itunes.apple.com/us/app/kgap-firewise-megatrack/id732887804?mt=8" target="itunes_store"style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
    							<a href="https://play.google.com/store/apps/details?id=air.com.ideasorlando.MegaTrackMobileBook" target="_blank">
    					  			<img alt="Get it on Google Play" src="images/googleplay.png" style="width: 36%; margin-top: 3px; float:left; margin-bottom:5px;" class="googlePlayBtn"/>
    							</a>
    							<a href="http://www.amazon.com/ideas-orlando-KGAP-Mega-Track/dp/B00E5I2XYY/ref=sr_1_6?s=mobile-apps&ie=UTF8&qid=1389819162&sr=1-6" target="_blank"><img src="images/6a0148c71fb71b970c014e8a07bf5a970d-pi.png" alt="Amazon Store Download" style="width: 42%; text-align: center; float: left; margin-left: 65px;" class="amazonBtn"></a>
    						</div>
    				</div>
    			  <div id="dialogEtchingRight">
    				  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
    			  </div>
    			  </div>
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
				  	   <a href="30_game.swf?width=800&height=800" class="dialogRead desktopOnly" rel="prettyPhoto[flashE]">Play the Game</a>
					   <br>
					   <p>For Mobile & Tablet Devices:</p>
					   <div id="appStores">
   			  			<a href="https://itunes.apple.com/us/app/kgap-the-30-30-rule-activity/id635396018?mt=8" target="itunes_store"style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
   						<a href="https://play.google.com/store/apps/details?id=air.com.ideasorlando.mobile3030game" target="_blank" class="googlePlayBtn">
   				  			<img alt="Get it on Google Play" src="images/googleplay.png" style="width: 36%; margin-top: 3px; float:left; margin-bottom:5px;"/>
   						</a>
   						<a href="http://www.amazon.com/KGAP-The-30-Rule-Activity/dp/B00CC1ZBSG/ref=sr_1_8?s=mobile-apps&ie=UTF8&qid=1389631208&sr=1-8" target="_blank"><img src="images/6a0148c71fb71b970c014e8a07bf5a970d-pi.png" alt="Amazon Store Download" style="width: 42%; text-align: center; float: left; margin-left: 65px;" class="amazonBtn"></a>
					  </div>
				</div>
			    <div id="dialogEtchingRight">
				  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
			    </div>
			  </div>
			</div>
			<div id="name2_play_box" class="grid_4">
				<button id="openerOakPlay"></button>
				 <h2>Disaster Supply Kit</h2>
   			  <div id="dialogOakPlay" title="Disaster Supply Kit" style="background:#6dcef5;">	
   				  <div id="dialogEtchingLeft">
   					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
   				  </div>
   					<div id="dialogButtons">
   						<p class="desktopOnly">For Desktop:</p>  
   				  		<a href="Supply_Kit_Activity.swf?width=800&height=650" class="dialogRead desktopOnly" rel="prettyPhoto[flashF]">Play the Game</a>
   						<br>
   						<p>For Mobile & Tablet Devices:</p>
   						<div id="appStores">
				  			<a href="https://itunes.apple.com/us/app/kgap-oak-tree-club-disaster/id700000188?mt=8" target="itunes_store"style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
							<a href="https://play.google.com/store/apps/details?id=air.com.ideasorlando.DSKMobile" target="_blank" class="googlePlayBtn">
					  			<img alt="Get it on Google Play" src="images/googleplay.png" style="width: 36%; margin-top: 3px; float:left; margin-bottom:5px;"/></a>
							<a href="http://www.amazon.com/ideas-orlando-KGAP-Disaster-Supply/dp/B00EZUVA6O/ref=sr_1_5?s=mobile-apps&ie=UTF8&qid=1389637118&sr=1-5" target="_blank"><img src="images/6a0148c71fb71b970c014e8a07bf5a970d-pi.png" alt="Amazon Store Download" style="width: 42%; text-align: center; float: left; margin-left: 65px;" class="amazonBtn"></a>
   						</div>
   				</div>
   			  <div id="dialogEtchingRight">
   				  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
   			  </div>
   			  </div>
			</div>
			<div id="name3_play_box" class="grid_4">
				<button id="openerTinkerPlay"></button>
				<h2>The Whiz-Bang Quiz</h2>
    			  <div id="dialogTinkerPlay" title="The Whiz-Bang Game" style="background:#9fcb3a;">	
    				  <div id="dialogEtchingLeft">
    					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
    				  </div>
    					<div id="dialogButtons">
    						<p class="desktopOnly">For Desktop:</p>  
    				  		<a href="wacky/wacky.swf?width=800&height=800" class="dialogRead desktopOnly" rel="prettyPhoto[flashG]">Play the Game</a>
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
			<div id="name4_play_box" class="grid_4">
				<img src="images/coming_soon_play.png" width="296" height="232" alt="Coming Soon Play">
			</div>
			<div id="name5_play_box" class="grid_4">
				<button id="openerMegaPlay"></button>
				<h2>Firewise Simulator</h2>
  			  <div id="dialogMegaPlay" title="Firewise Simulator" style="background:#ff962e;">	
  				  <div id="dialogEtchingLeft">
  					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
  				  </div>
  					<div id="dialogButtons">
  						<p class="desktopOnly">For Desktop:</p>  
  				  		<a href="firewise/dem-firewise_simulator.swf?width=900&height=900" class="dialogRead desktopOnly" rel="prettyPhoto[flashH s]">Play the Game</a>
  						<br>
  						<p>For Mobile & Tablet Devices:</p>
  						<div id="appStores">
				  			<a href="https://itunes.apple.com/us/app/kgap-firewise-megatrack/id732887804?mt=8" target="itunes_store"style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
							<a href="https://play.google.com/store/apps/details?id=air.com.ideasorlando.FirewiseStarling" target="_blank" class="googlePlayBtn">
					  			<img alt="Get it on Google Play" src="images/googleplay.png" style="width: 36%; margin-top: 3px; float:left; margin-bottom:5px;"/></a>
							<a href="http://www.amazon.com/ideas-orlando-KGAP-Firewise-Simulator/dp/B00G5GIOGA/ref=sr_1_1?s=mobile-apps&ie=UTF8&qid=1389819310&sr=1-1" target="_blank"><img src="images/6a0148c71fb71b970c014e8a07bf5a970d-pi.png" alt="Amazon Store Download" style="width: 42%; text-align: center; float: left; margin-left: 65px;" class="amazonBtn"></a>
  						</div>
  				</div>
  			  <div id="dialogEtchingRight">
  				  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
  			  </div>
  			  </div>
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
				<button id="openerThirtyMake"></button>
				<h2>The 30/30 Rule</h2>
    			  <div id="dialogThirtyMake" title="The 30/30 Rule Downloads" style="background:#9554c4;">	
    				  <div id="dialogEtchingLeft">
    					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
    				  </div>
    					<div id="dialogButtons">
    						<p>Download Coloring Pages:</p>  
    				  		<a href="coloring_books/the3030coloring.pdf" class="dialogRead" target="_blank">The 30/30 Rule</a>
    						<br>
    						<p>Download Character Cut-Outs:</p>
    						<a href="character_sheets/character_sheet_rabbit_2.pdf" class="dialogRead" target="_blank" style="margin-bottom:10px;">Rabbit</a>
							<a href="character_sheets/character_sheet_possum_2.pdf" class="dialogRead" target="_blank" style="margin-bottom:10px;">Possum</a>
							<a href="character_sheets/character_sheet_squirrel_2.pdf" class="dialogRead" target="_blank">Squirrel</a>
    				</div>
    			  <div id="dialogEtchingRight">
    				  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
    			  </div>
    			  </div>
			</div>
			<div id="name2_make_box" class="grid_4">
				<button id="openerOakMake"></button>
				 <h2>The Oak Tree Club</h2>
   			  <div id="dialogOakMake" title="The Oak Tree Club Downloads" style="background:#6dcef5;">	
   				  <div id="dialogEtchingLeft">
   					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
   				  </div>
   					<div id="dialogButtons">
   						<p>Download Coloring Pages:</p>  
   				  		<a href="coloring_books/oaktreecoloring.pdf" class="dialogRead" target="_blank">The Oak Tree Club</a>
   						<br>
   						<p>Download Character Cut-Outs:</p>
   						<a href="character_sheets/character_sheet_mary_laura_2.pdf" class="dialogRead" target="_blank" style="margin-bottom:10px;">Mary Laura</a>
   				</div>
   			  <div id="dialogEtchingRight">
   				  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
   			  </div>
   			  </div>
			</div>
			<div id="name3_make_box" class="grid_4">
				<button id="openerTinkerMake"></button>
				<h2>Tinkermeister</h2>
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
						<li><h4>Florida-Lightning Capital of the U.S.A</h4>
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
				 <button id="openerOakFacts"></button>
				 <h2>The Oak Tree Club</h2>
 				<div id="dialogOakFacts" title="The Oak Tree Club Hurricanes Facts" style="background:#6dcef5; text-shadow: none;
 color: black;">
 					<br>
 					<ul>
 						<li>Hurricanes, cyclones, and typhoons are all the same weather phenomenon; we just use different names for these storms in different places. In the Atlantic and Northeast Pacific, the term "hurricane" is used. The same type of disturbance in the Northwest Pacific is called a "typhoon".</li><br>
 						<li>Hurricane Safety Actions
 					<ul>
 						<li>Know if you live in an evacuation area. Know your home's vulnerability to storm surge, flooding and wind. Have a family plan.</li>
 						<li>At the beginning of hurricane season (June), check your supplies, replace batteries and rotate your stock of food and water.</li>
 						<li>If a storm threatens, listen to your local authorities. Evacuate if ordered.</li>
 					</ul>
 					</li>
 						<li>Saffir-Simpson Scale
 					<ul>
 						<li>Tropical Storm
 					<ul>
 						<li>Winds 39-73 mph</li>
 					</ul>
 					</li>
 						<li>Category 1 Hurricane
 					<ul>
 						<li>Winds 74-95 mph</li>
 						<li>No real damage to buildings. Damage to unanchored mobile homes.</li>
 					</ul>
 					</li>
 						<li>Category 2 Hurricane
 					<ul>
 						<li>Winds 96-110 mph</li>
 						<li>Some damage to building roofs, doors and windows. Considerable damage to mobile homes. Some trees blown down.</li>
 					</ul>
 					</li>
 						<li>Category 3 Hurricane
 					<ul>
 						<li>Winds 111-130 mph</li>
 						<li>Some structural damage to small homes. Large trees blown down. Mobile homes and poorly built signs destroyed.</li>
 					</ul>
 					</li>
 						<li>Category 4 Hurricane
 					<ul>
 						<li>Winds 131-155 mph</li>
 						<li>Wall failures in homes and complete roof structure failure on small homes. Total destruction of mobile homes. Trees, shrubs and signs all blown down.</li>
 					</ul>
 					</li>
 						<li>Category 5 Hurricane
 					<ul>
 						<li>Winds 156 mph +</li>
 						<li>Complete roof failure on homes and industrial buildings. Some complete building failures.</li><br>
 					</ul>
 					</li>
 					</ul>
 					</li>
 					</ul>
 			  	</div>
			</div>
			<div id="name3_facts_box" class="grid_4">
				<button id="openerTinkerFacts"></button>
				<h2>Tinkermeister</h2>
				<div id="dialogTinkerFacts" title="The Tinkermeister Tornado Facts" style="background:#9fcb3a; text-shadow: none;
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
			<div id="name4_facts_box" class="grid_4">
				<img src="images/wheel_left.png" width="300" height="236" alt="Wheel Left">
			</div>
			<div id="name5_facts_box" class="grid_4">
				<button id="openerMegaFacts"></button>
				<h2>Mega Track HTW</h2>
				<div id="dialogMegaFacts" title="The MegaTrack Wildfire Facts" style="background:#ff962e; text-shadow: none;
color: black;">	
					<ul>
						<li>Wildfire Safety actions
					<ul>
						<li>Create a defensible or safe space of at least 30 feet around your home that is lean, clean and green.</li>
						<li>To help emergency vehicles gain access, make sure driveways are at least 12 feet wide with at least 15 feet of overhead clearance, and are easily identifiable.</li>
						<li>Keep gutters, eaves and yards clear of debris, sticks, pine needles and leaves.</li>
						<li>Trim all tree branches that hang over the house or are lower than 6 to 10 feet from the ground.</li>
						<li>Plant fire resistant plants such as dogwood, sycamore, magnolia, oaks, red maple, wild azalea, sweetgum, black cherry and ferns instead of pines and palmettos.</li>
						<li>Use fire resistant construction materials where possible, and fire resistant barriers when attaching flammable materials, such as wood decks or fences to the house.</li>
						<li>Follow local regulations for the burning or disposal of yard waste and other materials.</li>
						<li>Develop a personal disaster plan, including a plan for evacuating your home. Be sure to identify at least two routes out of your neighborhood or subdivision.</li>
					</ul>
					</li>
						<li>Wildfire Facts
					<ul>
						<li>A Prescription For Good Forest Health
					<ul>
						<li>Wildfires are fires that start in natural wildlands. Most wildfires are started accidentally. Sometimes, for instance, people do not put their campfire out completely. Wildifres can also be started on purpose by people who commit the crime of arson. Sometimes wildfire can also start naturally with a lightning strike.</li>
						<li>Wildfires are not always bad. Some ecosystems need fire. For instance, fire destroys the leaves and logs that lay decaying on the forest floor. It also keeps the leaves in the canopy, or on top of the trees, thinned out. This lets more light in so that seeds and plants can grow on the forest floor. Many plants, birds and other animals need fires to change the environment in this way.</li>
					</ul>
					</li>
						<li>Prescribed Burns
					<ul>
						<li>There are many firefighters whose job is to put out wildfires. Sometimes these special men and women actually set carefully-controlled fires. This is called a prescribed burn. Prescribed burns mimic or copy what happens in nature. They are beneficial. They can keep wildfires from going out of control.</li>
						<li>Prescribed burns may be as small as a city block. They may also be large, involving thousands of acres of land. They are only done when weather conditions are just right. For instance, the wind must be blowing in the right direction so the fire moves where the firefighters want.</li>
						<li>Firefighters plan very carefully to set fires in the right place. They use rivers and roads to create a "line" that will stop the fires they set. These natural breaks keep the fire where they want it.</li>
					</ul>
					</li>
						<li>Fighting Wildfires
					<ul>
						<li>Even with all firefighters do to prevent wildfires, they still occur. The Florida Division of Forestry joins with local fire departments and other agencies to fight wildfires.</li>
						<li>The main tool Florida firefighters use is the fire plow. It is used to clear a break around the fire to keep it from moving forward. They also use helicopters to drop water on the flames. The helicopters cannot drop enough water to put the fire out. It is done to slow the spread of the fire. It also allows the firefighters to get closer to the flames so they can create a fire break with the fire plow.</li>
					</ul>
					</li>
					</ul>
					</li>
						<li>Lean, Clean and Green
					<ul>
						<li>Do you have a least 30 feet of space surrounding your home that is Lean, Clean and Green?</li>
						<li>The objective of "Defensible Space" is to reduce the wildfire threat to your home by changing the characteristics of the surrounding vegetation.</li>
						<li>Defensible space allows firefighters room to put out fires.</li>
						<li>Lean- Prune shrubs and cut back tree branches, especially within 15 feet of your chimney.</li>
						<li>Clean- Remove all dead plant material from around your home; this includes dead leaves, dry grass and even stacked firewood.</li>
					</ul>
					</li>
					</ul>
					Green- Plant fire-resistant vegetation that is healthy and green throughout the year.
				</div>
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
					<button id="openerTeacherGuide"></button>
					<h2>Teacher Guides</h2>
      			    <div id="dialogTeacherGuide" title="Parent &amp; Teacher Guide" style="background:#9554c4;">
      				  <div id="dialogEtchingLeft">
      					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
      				  </div>
      					<div id="dialogButtons">
      						<p>Download PDF Guides:</p>  
      				  		<a href="parent_teacher_guides/Grade_1_Guide_for_Teachers_and_Parents.pdf" class="dialogReadAdults" target="_blank" style="margin-bottom:8px">The 30/30 Rule Guide</a>
							<a href="parent_teacher_guides/Grade_2_Guide_for_Teachers_and_Parents.pdf" class="dialogReadAdults" target="_blank" style="margin-bottom:8px">Professor Tinkermeister Guide</a>
							<a href="parent_teacher_guides/Grade_3_Guide_for_Teachers_and_Parents.pdf" class="dialogReadAdults" target="_blank" style="margin-bottom:8px">The Oak Tree Club Guide</a>
							<a href="parent_teacher_guides/Grade_4_Guide_for_Teachers_and_Parents.pdf" class="dialogReadAdults" target="_blank" style="margin-bottom:8px">MegaTrack HTW</a>
						</div>
      			      <div id="dialogEtchingRight">
      				  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
      			  </div>
			        </div>
				</div>
				<div id="name2_adults_box" onclick="window.open('https://dpifulfillment.myprintdesk.com/walk_up.php?id=eed80cb546ac9300f03bab6a7be84acd390a1fe5','_blank')">
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
		<?php include 'footer.php'; ?>
	</div>
	
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" 	src="js/jquery.smint.js"></script>
	
	
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
	  
	  $(function() {
	    $( "#dialogOakStory" ).dialog({
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
	   
	    $( "#openerOakStory" ).click(function() {
	      $( "#dialogOakStory" ).dialog( "open" );
	    });	
	  });
	  
	  $(function() {
	    $( "#dialogTinkerStory" ).dialog({
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
	   
	    $( "#openerTinkerStory" ).click(function() {
	      $( "#dialogTinkerStory" ).dialog( "open" );
	    });	
	  });
	  
	  $(function() {
	    $( "#dialogMegaStory" ).dialog({
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
	   
	    $( "#openerMegaStory" ).click(function() {
	      $( "#dialogMegaStory" ).dialog( "open" );
	    });	
	  });
	  
	  $(function() {
	    $( "#dialogOakPlay" ).dialog({
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
	   
	    $( "#openerOakPlay" ).click(function() {
	      $( "#dialogOakPlay" ).dialog( "open" );
	    });	
	  });
	  
	  $(function() {
	    $( "#dialogTinkerPlay" ).dialog({
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
	   
	    $( "#openerTinkerPlay" ).click(function() {
	      $( "#dialogTinkerPlay" ).dialog( "open" );
	    });	
	  });
	  
	  $(function() {
	    $( "#dialogMegaPlay" ).dialog({
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
	   
	    $( "#openerMegaPlay" ).click(function() {
	      $( "#dialogMegaPlay" ).dialog( "open" );
	    });	
	  });
	  
	  $(function() {
	    $( "#dialogOakFacts" ).dialog({
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
	   
	    $( "#openerOakFacts" ).click(function() {
	      $( "#dialogOakFacts" ).dialog( "open" );
	    });	
	  });
	  
	  $(function() {
	    $( "#dialogTinkerFacts" ).dialog({
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
	   
	    $( "#openerTinkerFacts" ).click(function() {
	      $( "#dialogTinkerFacts" ).dialog( "open" );
	    });	
	  });
	  
	  $(function() {
	    $( "#dialogMegaFacts" ).dialog({
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
	   
	    $( "#openerMegaFacts" ).click(function() {
	      $( "#dialogMegaFacts" ).dialog( "open" );
	    });	
	  });
	  
	  $(function() {
	    $( "#dialogThirtyMake" ).dialog({
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
	   
	    $( "#openerThirtyMake" ).click(function() {
	      $( "#dialogThirtyMake" ).dialog( "open" );
	    });	
	  });
	  
	  $(function() {
	    $( "#dialogOakMake" ).dialog({
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
	   
	    $( "#openerOakMake" ).click(function() {
	      $( "#dialogOakMake" ).dialog( "open" );
	    });	
	  });
	  
	  $(function() {
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
	  });
	  
	  $(function() {
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