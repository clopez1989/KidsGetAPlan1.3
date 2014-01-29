<!DOCTYPE html>
<html>

<!-- include Header -->
<?php include 'headerTEST.php'; ?>

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
			<div id="name3_play_box" class="grid_4">
				<button id="openerTinkerPlay"></button>
				<h2>The Whiz-Bang Quiz</h2>
    			  <div id="dialogTinkerPlay" title="The Whiz-Bang Game" style="background:#9fcb3a;">	
    				  <div id="dialogEtchingLeft">
    					   <img src="images/story_bolts_and_etching_right.png" width="40" height="322" alt="Story Bolts And Etching Right">
    				  </div>
    					<div id="dialogButtons">
    						<p class="desktopOnly">For Desktop:</p>  
    				  		<a href="wacky/wacky.swf?lightbox[width]=800&lightbox[height]=650" class="dialogRead desktopOnly lightbox">Play the Game</a>
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
	
	<script type="text/javascript">	
		// JavaScript Document
	
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
	
	
			
</body>
</html>