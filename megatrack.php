<!DOCTYPE html>
<html>

<!-- include Header -->
<?php include 'includes/header.php'; ?>

<body onload="window.scrollTo(0,100);" style="background:#ff962e;">

<?php include 'includes/story_nav.php'; ?>

<!--  include Navigation -->
	<!-- <?php include 'story_nav.php'; ?> -->

	<div class="section backButton" id="homeMain">
		<div id="topLeftButton" class="grid_4">
			<a href="index.php" data-ajax="false"><img src="images/home_mobile.png" width="283" height="107" alt="Home Mobile">
		</div>
		<div id="topLeftArt" class="grid_4">
			<img src="images/top_left_panel_art.png" alt=""/>
		</div>
		<div class="logoContainerStory" class="grid_4">
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
	
	
	<div class="mainWrapper" style="background-color:#ff962e; margin-top: 72px; background-image: none;">
		<div id="thirty_story_title_box" class="grid_4">
			<img src="images/Sub_Title/sub_title_d_megatrack.png" width="295" height="246" alt="Sub Title D 30 30">
		</div>
		<div id="name5_story_box_story" class="grid_4">
				<button id="opener"></button>
				<!-- <h2>The Story</h2> -->
			  <div id="dialog" title="MegaTrack HTW Story" style="background:#ff962e;">	
				  <div id="dialogEtchingLeft">
					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
				  </div>
					<div id="dialogButtons">
						<p class="desktopOnly">For Desktop:</p>  
				  		<a href="book.swf?bookXML=book4-english.xml&lightbox[width]=800&lightbox[height]=650" class="dialogRead desktopOnly lightbox">Read the Story</a>
						<br>
						<p>For Mobile & Tablet Devices:</p>
                        <div id="appStores">
                                  <a href="https://itunes.apple.com/us/app/kgap-firewise-megatrack/id732887804?mt=8" target="itunes_store" id="ituneStoreBtn" style="display:inline-block;overflow:hidden;background:url(images/appleappstore.png) no-repeat; background-size: 103% auto; width:166px; height:54px; float:left; margin-left:-14px; @media only screen{background-image:url(images/appleappstore.png);}"></a>
                                <a href="https://play.google.com/store/apps/details?id=air.com.ideasorlando.MegaTrackMobileBook" target="_blank">
                                          <img alt="Get it on Google Play" src="images/googleplay.png" style="width: 36%; margin-top: 3px; float:left; margin-bottom:5px;" class="googlePlayBtn"/></a>
                                <a href="http://www.amazon.com/ideas-orlando-KGAP-Mega-Track/dp/B00E5I2XYY/ref=sr_1_6?s=mobile-apps&ie=UTF8&qid=1389819162&sr=1-6" target="_blank"><img src="images/6a0148c71fb71b970c014e8a07bf5a970d-pi.png" alt="Amazon Store Download" style="width: 42%; text-align: center; float: left; margin-left: 65px;" class="amazonBtn"></a>
                        </div>
				</div>
			  <div id="dialogEtchingRight">
				  <img src="images/story_bolts_and_etching_left.png" width="40" height="322" alt="Story Bolts And Etching Left">
			  </div>
			  </div>
		</div>
		<a href="firewise/dem-firewise_simulator.swf?lightbox[width]=800&lightbox[height]=650" class="lightbox desktopGame">
			<div id="name5_play_box_story" class="grid_4">
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
		<!-- <div id="name3_make_box_story" class="grid_4">
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
		</div> -->
			<a href="?lightbox[width]=85p&lightbox[height]=85p#textFacts" class="lightbox" onclick="javascript:ThunderTrack();">
				<div id="name5_facts_box_story" class="grid_4">
				<!-- <button id="opener4"></button> -->
				<!-- <h2>Lightning Safety Facts</h2> -->
					<div id="dialog4" title="The 30/30 Rule Lightning Facts" style="#ff962e; text-shadow: none;
	color: black;">
					<div id="textFacts" style="background:#ff962e; text-shadow: none;
					color: black;">
					<br>
					<ul>
						<li><h4 style="margin-bottom: -11px;">Wildfire Safety actions</h4>
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
		<div id="name5_adults_box_story" class="grid_4">
			<button id="openerTeacherGuide"></button>
			<!--<h2>Mega Track HTW</h2> -->
		    <div id="dialogTeacherGuide" title="Parent &amp; Teacher Guide" style="background:#ff962e;">
			  <div id="dialogEtchingLeft">
				   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
			  </div>
				<div id="dialogButtons">
					<p>Download PDF Guides:</p>  
			  		<a href="parent_teacher_guides/Grade_4_Guide_for_Teachers_and_Parents.pdf" class="dialogRead" target="_blank">Mega Track HTW Guide</a>
					<p>Buy The Book:</p>  
			  		<a href="https://dpifulfillment.myprintdesk.com/walk_up.php?id=eed80cb546ac9300f03bab6a7be84acd390a1fe5" class="dialogRead" target="_blank">MegaTrack HTW</a>
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
	jQuery(function() {
	    jQuery( "#dialogMegaPlay" ).dialog({
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

	    jQuery( "#openerMegaPlay" ).click(function() {
	      jQuery( "name3_play_box" ).addClass( "lightbox" );
	    });	
	});
	
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