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
			<a href="#name2_story_box_story" id="storyPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_read_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name2_play_box_story" id="playPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_play_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name2_make_box_story" id="makePanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_make_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name2_facts_box_story" id="factsPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_facts_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
			<a href="#name2_adults_box_story" id="adultsPanelButton" class="subNavBtn" data-ajax="false"><img src="images/btn_adults_normal.png" width="580" height="164" alt="Btn Read Normal" style="height:auto; margin-bottom: -8px;"></a>
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
	
	<div class="mainWrapper" style="background-color:#6dcef5; margin-top: 64px; background-image: none;">
		<div id="thirty_story_title_box" class="grid_4">
			<img src="images/Sub_Title/sub_title_d_oak_tree_new.png" width="295" height="246" alt="Sub Title D 30 30">
		</div>
		<div id="name2_story_box_story" class="grid_4">
				<button id="opener"></button>
				<h2>The Story</h2>
			  <div id="dialog" title="The Oak Tree Club Story" style="background:#6dcef5;">	
				  <div id="dialogEtchingLeft">
					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
				  </div>
					<div id="dialogButtons">
						<p class="desktopOnly">For Desktop:</p>  
				  		<a href="book.swf?bookXML=book3-english.xml&width=800&height=650" class="dialogRead desktopOnly" rel="prettyPhoto[flash]">Read the Story</a>
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
		<div id="name2_play_box_story" class="grid_4">
			<button id="opener3"></button>
			<h2>The Oak Tree Club Activity</h2>
			<div id="dialog3" title="The Oak Tree Club Game" style="background:#6dcef5;">	
			  <div id="dialogEtchingLeft">
				   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
			  </div>
			  <div id="dialogButtons">
				   <p class="desktopOnly">For Desktop:</p>  
			  	   <a href="Supply_Kit_Activity.swf?width=800&height=650" class="dialogRead desktopOnly" rel="prettyPhoto[flash]">Play the Game</a>
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
		<div id="name2_make_box_story" class="grid_4">
			<button id="openerOakMake"></button>
			<h2>Cut-Out and Color</h2>
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
		<div id="name2_facts_box_story" class="grid_4">
			<button id="opener4"></button>
			<h2>Hurricane Safety Facts</h2>
				<div id="dialog4" title="The Oak Tree Club Hurricanes Facts" style="background:#6dcef5; text-shadow: none;
color: black ;">	
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
		<div id="name2_adults_box_story" class="grid_4">
			<button id="openerTeacherGuide"></button>
			<h2>The Oak Tree Club</h2>
		    <div id="dialogTeacherGuide" title="Parent &amp; Teacher Guide" style="background:#6dcef5;">
			  <div id="dialogEtchingLeft">
				   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
			  </div>
				<div id="dialogButtons">
					<p>Download PDF Guides:</p>  
			  		<a href="parent_teacher_guides/Grade_3_Guide_for_Teachers_and_Parents.pdf" class="dialogRead" target="_blank">The Oak Tree Club Guide</a>
					<p>Buy The Book:</p>  
			  		<a href="https://dpifulfillment.myprintdesk.com/walk_up.php?id=eed80cb546ac9300f03bab6a7be84acd390a1fe5" class="dialogRead" target="_blank">The Oak Tree Club Book</a>
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
					<a href="#" target="_blank"><img src="images/FooterCharacters/footer_character3.png" width="106" height="141" alt="Footer Character"></a>
				</div>
		<?php include 'footer.php'; ?>
		
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
	    //cache: false
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