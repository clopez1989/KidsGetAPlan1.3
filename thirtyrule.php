<!DOCTYPE html>
<html>

<!-- include Header -->
<?php include 'header.php'; ?>

<body onload="window.scrollTo(0,100);" style="background-color:#b27ec4;">

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
		<div class="logoContainer" class="grid_4" style="display:none">
			<a href="index.php" data-ajax="false"><img src="images/Kids-Get-A-Plan-Logo-Horiz-2013-900x100-opt.png" width="500" height="95" alt="Kids Get A Plan Logo Horiz 2013 900x100 Opt" class="logoImage" /></a>
		</div>
		<div id="topRightButton" class="grid_4">
			<a href="#myPanel"><img src="images/menu_mobile.png" width="280" height="107" alt="Menu Mobile"></a>
		</div>
		<div data-role="panel" id="myPanel" data-theme="b" data-display="push" data-position="right" data-position-fixed="true" style="background-color:#7c846b; background-image:none; overflow-x: scroll;">
			<a href="" data-rel="close" id="closePanelButton"><img src="images/close_m_panel.png" width="665" height="184" alt="Close M Panel"></a>
			<a href="#thirty_story_title_box" id="homePanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_home_normal.png" width="580" height="164" alt="Btn Home Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name1_story_box_story" id="storyPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_read_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name1_play_box_story" id="playPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_play_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name1_make_box_story" id="makePanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_make_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name1_facts_box_story" id="factsPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_facts_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name1_adults_box_story" id="adultsPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_adults_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
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
	
	
	<div class="mainWrapper" style="background-color:#b27ec4; margin-top: 64px; background-image: none;">
		<div id="thirty_story_title_box" class="grid_4">
			<img src="images/Sub_Title/sub_title_d_30_30.png" width="295" height="246" alt="Sub Title D 30 30">
		</div>
		<div id="name1_story_box_story" class="grid_4">
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
		<a href="30_game.swf?lightbox[width]=800&lightbox[height]=650" class="desktopGame lightbox">
			<div id="name1_play_box_story" class="grid_4">
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
		<div id="name1_make_box_story" class="grid_4">
			<button id="openerThirtyMake"></button>
			<!-- <h2>Cut-Out and Color</h2> -->
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
		<a href="?lightbox[width]=85p&lightbox[height]=85p#textFacts" class="lightbox" onclick="javascript:ThunderTrack();">
			<div id="name1_facts_box_story" class="grid_4">
			<!-- <button id="opener4"></button> -->
			<!-- <h2>Lightning Safety Facts</h2> -->
				<div id="dialog4" title="The 30/30 Rule Lightning Facts" style="background:#9554c4; text-shadow: none;
color: white;">
				<div id="textFacts" style="background:#9554c4; text-shadow: none;
				color: white;">
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
		<div id="name1_adults_box_story" class="grid_4">
			<button id="openerTeacherGuide"></button>
			<!-- <h2>The 30/30 Rule</h2> -->
		    <div id="dialogTeacherGuide" title="Parent &amp; Teacher Guide" style="background:#9554c4;">
			  <div id="dialogEtchingLeft">
				   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
			  </div>
				<div id="dialogButtons">
					<p>Download PDF Guides:</p>  
			  		<a href="parent_teacher_guides/Grade_1_Guide_for_Teachers_and_Parents.pdf" class="dialogRead" target="_blank">The 30/30 Rule Guide</a>
					<p>Buy The Book:</p>  
			  		<a href="https://dpifulfillment.myprintdesk.com/walk_up.php?id=eed80cb546ac9300f03bab6a7be84acd390a1fe5" class="dialogRead" target="_blank">The 30/30 Rule Book</a>
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
					<a href="#" target="_blank"><img src="images/FooterCharacters/footer_character1.png" width="106" height="141" alt="Footer Character"></a>
				</div>
		<?php include 'footer.php'; ?>
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
	  
		jQuery(function() {
		    jQuery( "#dialog3" ).dialog({
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

	 	    jQuery('div.ui-resizable-handle').hide();
 
		    jQuery( "#opener3" ).click(function() {
			if ($(window).width() < 1024) {
			   jQuery( "#dialog3" ).dialog( "open" );
			   return false;
			}
			else{
	      	  jQuery( "name1_play_box_story" ).addClass( "lightbox" );
		  	}
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