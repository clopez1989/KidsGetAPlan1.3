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
	
	<div class="mainWrapper" style="background-color:white; margin-top: 64px; background-image: none;">
		<div id="copyrightDiv">
			<div style="text-align:left; -moz-column-count:2; -webkit-column-count:2; column-count:2;">
				<h5>Privacy Policy</h5>
				<p>Thank you for visiting the FloridaDisaster.org, KidsGetaPlan and DEM Video Portal  web sites. Your privacy is very important to us. Simply stated, our policy is to collect no personal information about you when you visit the web sites, unless you affirmatively choose to make such information available to us.</p> 
				<p>When you visit the FloridaDisaster.org, KidsGetaPlan.com and DEM Video Portal, the Web server automatically recognizes only the Internet domain and IP address from which you accessed the site. This information does not result in the identification of your personal e-mail address or other personal information.</p> 
				<p>In addition, information is only gathered regarding the volume and timing of access to the site by collecting information on the date, time and pages you visited while at the site. This is done so that the content of the site can be improved, and your personal information is not identified.</p> 
				<p>If you choose to share personal information, such as by subscribing to an e-newsletter, sending a message, or filling out an electronic form with personal information, sharing content within Kids Get A Plan or other Social Media tool the information will be saved for a designated period of time in order to comply with the state of Florida's archiving policies. However, information will not be disclosed to third parties or other government agencies, unless required by state or federal law or elected by the user. Please note that Florida's public records law requires that all information received in connection with state business be made available to anyone upon request, unless the information is subject to a specific statutory exemption.</p> 
				<p>If you have other questions about this privacy policy, or have suggestions on how it may be improved, please contact us.</p>
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