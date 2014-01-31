<!DOCTYPE html>
<html>

<!-- include Header -->
<?php include 'includes/header.php'; ?>

<body onload="window.scrollTo(0,100); init();" style="background-color:#D4D4D4">
<!-- include Navigation -->
	<?php include 'includes/nav.php'; ?>
	
	<div class="section homeButton" id="homeMain">
		
		<a href="javascript:GearTrack();">
			<div id="topLeftArt" class="grid_4">
				<img src="images/top_left_panel_art.png" alt=""/>
			</div>
		</a>
		
		<div class="logoContainer" class="grid_4">
			<a href="index.php" data-ajax="false">
				<img src="images/Kids-Get-A-Plan-Logo-Horiz-2013-900x100-opt.png" width="500" height="95" alt="Kids Get A Plan" class="logoImage" />
			</a>			
		</div>
		
		<a href="javascript:GearTrack();">
			<div id="topRightArt" class="grid_4">
				<img src="images/Header_element_right.png" alt=""/>
			</div>
		</a>
		
		<div id="topMobileMenuBar" class="grid_4">
			<a href="#myPanel" data-ajax="false">
				<img src="images/mobile_top_menu.png" width="672" height="107" alt="Mobile Top Menu">
			</a>
		</div>
		
		<div data-role="panel" id="myPanel" data-theme="b" data-display="push" data-position="right" data-position-fixed="true" style="background-color:#7c846b; background-image:none; z-index:3000!important;">
			
			<a href="" data-rel="close" id="closePanelButton"><img src="images/close_m_panel.png" width="665" height="184" alt="Close M Panel"></a>
			
			<a href="#homeMain" id="homePanelButton" class="subNavBtn" data-ajax="false">
				<img src="images/btn_home_normal.png" width="580" height="164" alt="Btn Home Normal" style="height:auto; margin-bottom: -8px;"></a>
				
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
		
		<a href="javascript:GearTrack();"><canvas id="canvas" width="1667" height="734"></canvas></a>
			
		<div class="section mainSection mainButton" data-type="background" data-speed="10">	
				
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
				<img src="images/comingsoon_main_m.png" width="225" height="226" alt="Comingsoon Main M">
			</div>
			
			<div id="name5_box" class="grid_2 morph" onclick="location.href='megatrack.php'">
				<a href="megatrack.php" rel="external"></a>
			</div>
			
			<div id="name6_box" class="grid_2 morph">
				<img src="images/comingsoon_main_m.png" width="225" height="226" alt="Comingsoon Main M"> 
			</div>
			
			<div id="ipadClear"></div>
			
		</div>

		<div class="section storyButton" id="homeStory" data-type="background" data-speed="10">
			<img src="images/Adults/bevel_bottom.png" width="996" height="23" alt="Bevel Bottom" class="storyBevelFix">
			<div id="mobileTextBox">
				<h2>Read the Kids Get A Plan Stories</h2>
			</div>
			<div id="name1_story_box" class="grid_4">
				<button id="opener"></button>
				<!-- <h2>The 30/30 Rule</h2> -->
				  <div id="dialog" title="The 30/30 Rule Story" style="background:#9554c4;">	
					  <div id="dialogEtchingLeft">
						   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
					  </div>
						<div id="dialogButtons">
							<p class="desktopOnly">For Desktop:</p>  
					  		<a href="book.swf?bookXML=book1-english.xml&lightbox[width]=800&lightbox[height]=650" class="dialogRead desktopOnly lightbox">Read the Story</a>
							<br>
							<p>For Mobile & Tablet Devices:</p>
							<div id="appStores">
					  			<a href="https://itunes.apple.com/us/app/kids-get-plan-30-30-rule-ebook/id619446496?mt=8&uo=4" target="itunes_store" id="appleStoreBtn" style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
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
			<div id="name3_story_box" class="grid_4">
				<button id="openerTinkerStory"></button>
				<!-- <h2>The Wacky Whiz-Bang Weather Watching Wonder</h2> -->
  			  <div id="dialogTinkerStory" title="The Tinkermeister Story" style="background:#9fcb3a;">	
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
			<div id="name2_story_box" class="grid_4">
				 <button id="openerOakStory"></button>
				 <!-- <h2>The Oak Tree Club</h2> -->
			  <div id="dialogOakStory" title="The Oak Tree Club Story" style="background:#6dcef5;">	
				  <div id="dialogEtchingLeft">
					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
				  </div>
					<div id="dialogButtons">
						<p class="desktopOnly">For Desktop:</p>  
				  		<a href="book.swf?bookXML=book3-english.xml&lightbox[width]=800&lightbox[height]=650" class="dialogRead desktopOnly lightbox">Read the Story</a>
						<br>
						<p>For Mobile & Tablet Devices:</p>
						<div id="appStores">
				  			<a href="https://itunes.apple.com/us/app/kgap-oak-tree-club-disaster/id700000188?mt=8" target="itunes_store" id="appleStoreBtn" style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
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
			<div id="name4_story_box" class="grid_4">
				<img src="images/coming_soon_story.png" width="293" height="230" alt="Coming Soon Story">
			</div>
			<div id="name5_story_box" class="grid_4">
				<button id="openerMegaStory"></button>
				<!-- <h2>Mega Track HTW</h2> -->
    			  <div id="dialogMegaStory" title="The MegaTrack HTW Story" style="background:#ff962e;">	
    				  <div id="dialogEtchingLeft">
    					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
    				  </div>
    					<div id="dialogButtons">
    						<p class="desktopOnly">For Desktop:</p>  
    				  		<a href="book.swf?bookXML=book4-english.xml&lightbox[width]=800&lightbox[height]=650" class="dialogRead desktopOnly lightbox">Read the Story</a>
    						<br>
    						<p>For Mobile & Tablet Devices:</p>
    						<div id="appStores">
    				  			<a href="https://itunes.apple.com/us/app/kgap-firewise-megatrack/id732887804?mt=8" target="itunes_store" id="appleStoreBtn" style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
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
			<img src="images/Adults/bevel_top.png" width="996" height="23" alt="Bevel Top" class="bevelBottom">
		</div>

		<div class="section playButton" id="homePlay" data-type="background" data-speed="10">
			
			<img src="images/Adults/bevel_yellow.png" width="999" height="22" alt="Bevel Yellow" class="storyBevelFix" style="-moz-transform: scaleY(-1); -o-transform: scaleY(-1); -webkit-transform: scaleY(-1);" />
			
			<div id="mobileTextBox_main">
				<h2>Interact with the Kids Get A Plan Activities</h2>
			</div>
			
			<a href="30_game.swf?lightbox[width]=800&lightbox[height]=650" class="desktopGame lightbox">
				<div id="name1_play_box" class="grid_4">
					<button id="opener3"></button>
					<!-- <h2>The 30/30 Game</h2> -->
					<div id="dialog3" title="The 30/30 Rule Game" style="background:#9554c4;">	
					  <div id="dialogEtchingLeft">
						   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
					  </div>
					  <div id="dialogButtons">
						   <p class="desktopOnly">For Desktop:</p>  
					  	   <a href="30_game.swf?lightbox[width]=800&lightbox[height]=650" class="dialogRead desktopOnly lightbox">Play the Game</a>
						   <br>
						   <p>For Mobile & Tablet Devices:</p>
						   <div id="appStores">
	   			  			<a href="https://itunes.apple.com/us/app/kgap-the-30-30-rule-activity/id635396018?mt=8" target="itunes_store" id="appleStoreBtn" style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
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
			</a>
			
			<a href="wacky/wacky.swf?lightbox[width]=800&lightbox[height]=650" class="lightbox desktopGame">
				<div id="name3_play_box" class="grid_4">
					<button id="openerTinkerPlay"></button>
					<!-- <h2>The Whiz-Bang Quiz</h2> -->
    				<div id="dialogTinkerPlay" title="The Whiz-Bang Game" style="background:#9fcb3a;">	
    				  <div id="dialogEtchingLeft">
    					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
    				  </div>
    					<div id="dialogButtons">
    						<p class="desktopOnly">For Desktop:</p>  
    				  		<a href="wacky/wacky.swf?lightbox[width]=800&lightbox[height]=650" class="lightbox desktopGame">Play the Game</a>
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
			
			<a href="Supply_Kit_Activity.swf?lightbox[width]=800&lightbox[height]=650" class="lightbox desktopGame">
				<div id="name2_play_box" class="grid_4">
					<button id="openerOakPlay"></button>
					<!-- <h2>Disaster Supply Kit</h2> -->
   			    	<div id="dialogOakPlay" title="Disaster Supply Kit" style="background:#6dcef5;">
   				 	 <div id="dialogEtchingLeft">
   					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
   				  </div>
   				  	 <div id="dialogButtons">
   						<p class="desktopOnly">For Desktop:</p>  
   				  		<a href="Supply_Kit_Activity.swf?lightbox[width]=800&lightbox[height]=650" class="dialogRead desktopOnly lightbox">Play the Game</a>
   						<br>
   						<p>For Mobile & Tablet Devices:</p>
   						<div id="appStores">
				  			<a href="https://itunes.apple.com/us/app/kgap-oak-tree-club-disaster/id700000188?mt=8" target="itunes_store" id="appleStoreBtn" style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
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
			</a>
			   
			<div id="name4_play_box" class="grid_4">
				<img src="images/coming_soon_play.png" width="296" height="232" alt="Coming Soon Play">
			</div>
			
			<a href="firewise/dem-firewise_simulator.swf?lightbox[width]=800&lightbox[height]=650" class="lightbox desktopGame">
				<div id="name5_play_box" class="grid_4">
					<button id="openerMegaPlay"></button>
					<!-- <h2>Firewise Simulator</h2> -->
	  			    <div id="dialogMegaPlay" title="Firewise Simulator" style="background:#ff962e;">
	  				  <div id="dialogEtchingLeft">
	  					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
	  				  </div>
	  				  <div id="dialogButtons">
	  						<p class="desktopOnly">For Desktop:</p>  
	  				  		<a href="firewise/dem-firewise_simulator.swf?lightbox[width]=800&lightbox[height]=650" class="dialogRead desktopOnly lightbox">Play the Game</a>
	  						<br>
	  						<p>For Mobile & Tablet Devices:</p>
	  						<div id="appStores">
					  			<a href="https://itunes.apple.com/us/app/kgap-firewise-megatrack/id732887804?mt=8" target="itunes_store" id="appleStoreBtn"style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
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
			</a>
			
			<div id="name6_play_box" class="grid_4">
				<img src="images/coming_soon_play.png" width="296" height="232" alt="Coming Soon Play">
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
				<!-- <h2>The 30/30 Rule</h2> -->
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
			
			<div id="name3_make_box" class="grid_4">
				<button id="openerTinkerMake"></button>
				<!-- <h2>Tinkermeister</h2> -->
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
			
			<div id="name2_make_box" class="grid_4">
				<button id="openerOakMake"></button>
				 <!-- <h2>The Oak Tree Club</h2> -->
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
			
			<img src="images/Adults/bevel_top.png" width="996" height="23" alt="Bevel Top" class="makeBevelBottom">
			
		</div>

		<div class="section factsButton" id="homeFacts" data-type="background" data-speed="10">
			
			<img src="images/Adults/bevel_bottom.png" width="996" height="23" alt="Bevel Bottom" class="makeBevelBottom">
			
			<div id="mobileTextBoxMake">
				<h2>Get to know your Emergency Preparation Facts</h2>
			</div>
			
			<a href="?lightbox[width]=85p&lightbox[height]=85p#textFacts" class="lightbox" onclick="javascript:ThunderTrack();">
				<div id="name1_facts_box" class="grid_4">
					<button id="opener4"></button>
					<!-- <h2>Lightning Safety Facts</h2> -->
					<div id="dialog4" title="The 30/30 Rule Lightning Facts" style="background:#9554c4;text-shadow: none; color: white;">			
						<div id="textFacts" style="background:#9554c4; text-shadow: none; color: white;">
							<br>
							<ul>
								<li><h4 style="margin-bottom: -11px;">Lightning Safety Actions</h4>
									<ul>
										<li>Avoid open high ground and large isolated trees.</li>
										<li>Avoid water (swimming pools, lakes and rivers), beaches and boats.</li>
										<li>Seek shelter inside a building or an automobile, but not a convertible or golf cart.</li>
										<li>Stay away from doors, windows, and metal objects such as pipes or faucets.</li>
										<li>Stay off corded telephones and away from electrical devices.</li>
									</ul>
								</li>
								<li><h4 style="margin-bottom: -11px;">Lightning Facts</h4>
									<ul>
										<li>Lightning heats the air up to 50,000 degrees Fahrenheit. This rapid heating of the air produces the shock wave that results in thunder.</li>
										<li>A ground strike can produce somewhere between 100 million to one billion volts of electricity.</li>
										<li>The length of an average cloud-to-ground lightning channel can range from two to ten miles.</li>
									</ul>
								</li>
								<li><h4 style="margin-bottom: -11px;">Florida-Lightning Capital of the U.S.</h4>
									<ul>
										<li>Florida's unique location, surrounded by warm water, provides the necessary ingredients for thunderstorms to form. It has earned us the title of, "Lightning Capital of the U.S." Other places in the world have even more lightning though. According to a NASA study, there are areas in the tropics of Africa, Asia, and South and Central America that have more lightning than Florida does. Rwanda, a country in Africa, is known as the, "Lightning Capital of the World." The important thing is to stay safe by going indoors if you see lightning or hear thunder.</li>
										<li>If you can see lightning or hear thunder, even in the distance, you are in danger. Go indoors or into a vehicle and remain there until 30 minutes after the last thunder is heard.</li>
									</ul>
								</li>
								<li><h4 style="margin-bottom: -11px;">If Someone Is Struck By Lightning, What Should You Do?</h4>
									<ul>
										<li>Call 9-1-1 immediately. With proper immediate treatment, including CPR if necessary, most victims survive a lightning strike.</li><br>
										<li>Use the '30-30 RULE' to determine the threat of lightning in your area.</ul>
											<ul>
												<li>30 Seconds:
													<ul>
														<li>Count the seconds between seeing lightning and hearing thunder. If this time is less than 30 seconds, lightning is still a potential threat. Seek shelter immediately.</li></ul></ul>
														<ul><li>30 Minutes:<ul>
																<li>After hearing the last thunder, wait 30 minutes before leaving shelter. Many lightning deaths occur after the storm passes. Stay in a safe area until you are sure the threat has passed.</li>
															</ul>
														</ul>
													</ul>
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
			
			<a href="?lightbox[width]=85p&lightbox[height]=85p#textFacts2" class="lightbox" onclick="javascript:TornadoTrack();">
				<div id="name3_facts_box" class="grid_4">
					<!-- <button id="openerTinkerFacts"></button> -->
					<!-- <h2>Tornado Safety Facts</h2> -->
					<div id="dialogTinkerFacts" title="The Tinkermeister Tornado Facts" style="background:#9fcb3a; text-shadow: none; color: black;">	
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
			
			<a href="?lightbox[width]=85p&lightbox[height]=85p#textFacts3" class="lightbox" onclick="javascript:HurricaneTrack();">
				<div id="name2_facts_box" class="grid_4">
				 	<!-- <button id="openerOakFacts"></button> -->
				 	<!-- <h2>Hurricane Safety Facts</h2> -->
 					<div id="dialogOakFacts" title="The Oak Tree Club Hurricanes Facts" style="background:#6dcef5; text-shadow: none; color: black;">
						<div id="textFacts3" style="background:#6dcef5; text-shadow: none; color: black;">
							<br>
							<ul>
								<li><b>Hurricanes</b>, <b>cyclones</b>, and <b>typhoons</b> are all the same weather phenomenon; we just use different names for these storms in different places. In the Atlantic and Northeast Pacific, the term "hurricane" is used. The same type of disturbance in the Northwest Pacific is called a "typhoon".</li>
								<li><h4 style="margin-bottom: -11px;">Hurricane Safety Actions</h4>
									<ul>
										<li>Know if you live in an evacuation area. Know your home's vulnerability to storm surge, flooding and wind. Have a family plan.</li>
										<li>At the beginning of hurricane season (June), check your supplies, replace batteries and rotate your stock of food and water.</li>
										<li>If a storm threatens, listen to your local authorities. Evacuate if ordered.</li>
									</ul>
								</li>
								<li><h4 style="margin-bottom: -11px;">Saffir-Simpson Scale</h4>
									<ul>
										<li><b>Tropical Storm</b>
											<ul>
												<li>Winds 39-73 mph</li>
											</ul>
										</li>
										<li><b>Category 1 Hurricane</b>
											<ul>
												<li>Winds 74-95 mph</li>
												<li>No real damage to buildings. Damage to unanchored mobile homes.</li>
											</ul>
										</li>
										<li><b>Category 2 Hurricane</b>
											<ul>
												<li>Winds 96-110 mph</li>
												<li>Some damage to building roofs, doors and windows. Considerable damage to mobile homes. Some trees blown down.</li>
											</ul>
										</li>
										<li><b>Category 3 Hurricane</b>
											<ul>
												<li>Winds 111-130 mph</li>
												<li>Some structural damage to small homes. Large trees blown down. Mobile homes and poorly built signs destroyed.</li>
											</ul>
										</li>
										<li><b>Category 4 Hurricane</b>
											<ul>
												<li>Winds 131-155 mph</li>
												<li>Wall failures in homes and complete roof structure failure on small homes. Total destruction of mobile homes. Trees, shrubs and signs all blown down.</li>
											</ul>
										</li>
										<li><b>Category 5 Hurricane</b>
											<ul>
												<li>Winds 156 mph +</li>
												<li>Complete roof failure on homes and industrial buildings. Some complete building failures.</li>
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
			
			<div id="name4_facts_box" class="grid_4">
				<img src="images/wheel_left.png" width="300" height="236" alt="Wheel Left">
			</div>
			
			<a href="?lightbox[width]=85p&lightbox[height]=85p#textFacts4" class="lightbox" onclick="javascript:FireTrack();">
				<div id="name5_facts_box" class="grid_4">
					<!-- <button id="openerMegaFacts"></button> -->
					<!-- <h2>Wildfire Safety Facts</h2> -->
					<div id="dialogMegaFacts" title="The MegaTrack Wildfire Facts" style="background:#ff962e; text-shadow: none; color: black;">
						<div id="textFacts4" style="background:#ff962e; text-shadow: none; color: black;">
							<br>
							<ul>
							<ul>
								<li><h4 style="margin-bottom: -11px;">Wildfire Safety Actions</h4>
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
							<li><h4 style="margin-bottom: -11px;">Wildfire Facts</h4>
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
										<li>The main tool Florida firefighters use is the fire plow. It is used to clear a break around the fire to keep it from moving forward. They also use helicopters to drop water on the flames to slow the spread of the fire, and allow the firefighters to get closer to the flames to create a fire break with the fire plow.</li>
									</ul>
								</li>
							</ul>
						</li>
							<li><h4 style="margin-bottom: -11px;">Lean, Clean and Green</h4>
							<ul>
								<li>Do you have a least 30 feet of space surrounding your home that is Lean, Clean and Green?</li>
								<li>The objective of "Defensible Space" is to reduce the wildfire threat to your home by changing the characteristics of the surrounding vegetation.</li>
								<li>Defensible space allows firefighters room to put out fires.</li>
								<li>Lean- Prune shrubs and cut back tree branches, especially within 15 feet of your chimney.</li>
								<li>Clean- Remove all dead plant material from around your home; this includes dead leaves, dry grass and even stacked firewood.</li>
								<li>Green- Plant fire-resistant vegetation that is healthy and green throughout the year.</li>
							</ul>
						</li>
					        </ul>
							<br>
						</div>
					</div>
				</div>
			</a>
			
			<div id="name6_facts_box" class="grid_4">
				<img src="images/wheel_right.png" width="296" height="236" alt="Wheel Right">
			</div>
			
		</div>
	
		<div class="section adultsButton" id="homeAdults" data-type="background" data-speed="10">
			
			<img src="images/Adults/bevel_bottom.png" width="996" height="23" alt="Bevel Bottom" class="adultsBevelBottom">
			
			<div id="mobileTextBoxAdults">
				<h2>Download the Teacher Guides and Purchase Books</h2>
			</div>
			
			<div id="ventLeftDiv">
				<img src="images/Adults/vents_left.png" width="57" height="215" alt="Vents Left" class="ventLeft">
				</div>
				
			<div id="name1_adults_box">
					<button id="openerTeacherGuide"></button>
					<!-- <h2>Teacher Guides</h2> -->
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
					<!-- <h2>Buy the Books</h2> -->
				</div>
				
			<div id="ventRightDiv">
				<img src="images/Adults/vents_right.png" width="57" height="215" alt="Vents Right" class="ventRight">
			</div>
			
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
		
		<?php include 'includes/footer.php'; ?>
		
	</div>
	
	<?php include 'includes/audio.php'; ?>
	
	<?php include 'includes/functions.php'; ?>
			
</body>

</html>