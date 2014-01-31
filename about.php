<!DOCTYPE html>
<html>

<!-- include Header -->
<?php include 'includes/header.php'; ?>

<body onload="window.scrollTo(0,100);" style="background-color:#6dcef5;">

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
	
	<div class="mainWrapper" style="background-color:#fbee3c; margin-top: 64px; background-image: none; text-shadow: none;">
		<div id="copyrightDiv">
			<div>
				<h5>About Kids Get A Plan</h5>
				<p>Kids Get A Plan is the Florida Division of Emergency Management program for school age children ages 5 to 12 years old. The media portal is created for school age students to upload, showcase and share posters and videos created for the Kids Get A Plan Severe Weather Awareness Week annual contest.  If you have other questions about Kids Get A Plan, or have suggestions on how it may be improved, please contact us.</p>
 
				<p style="text-align:left;"><ul style="list-style-type:none; padding-left: 0;"><li>Florida Division of Emergency Management </li>
				<li>2555 Shumard Oak Boulevard</li> 
				<li>Tallahassee, Florida 32399-2100</li>
				<br>
				<li>850-413-9969</li>
				<br>
				<li>For Hearing Impaired </li>
				<li>800-226-4329 (TDD/TTY)</li></ul></p>
 
				<p>__________________</p>
				<p>Kids Get A Plan website and book series is created by IDEAS, www.ideasorlando.com, under a work for hire contract from 2004 to the present day.</p>
 
				<p style="text-align:left;"><ul style="list-style-type:none; padding-left: 0;"><li>IDEAS</li>
				<li>64 East Concord Street</li>
				<li>Orlando, Florida, 32801</li></ul></p>
 
				<p>407-601-7878</p>
				
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
		<?php include 'includes/footer.php'; ?>
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