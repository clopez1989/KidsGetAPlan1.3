<script>

  	jQuery(document).ready(function () { var anchor_id = window.location.hash; if (anchor_id != "") {
             var new_position = jQuery(anchor_id).offset(); 
             window.scrollTo(new_position.left,new_position.top); 
    } });
	
	var thirtyVO = jQuery("#thirtyVO")[0];
	jQuery("#name1_box")
		.mouseenter(function() {
			thirtyVO.play();
		});
	jQuery("#name1_box")	
		.mouseleave(function() {
			thirtyVO.pause();
			thirtyVO.currentTime = 0;
		});
		
	var tinkerVO = jQuery("#tinkerVO")[0];
	jQuery("#name2_box")
		.mouseenter(function() {
			tinkerVO.play();
		});
	jQuery("#name2_box")	
		.mouseleave(function() {
			tinkerVO.pause();
			tinkerVO.currentTime = 0;
		});
		
	var oakVO = jQuery("#oakVO")[0];
	jQuery("#name3_box")
		.mouseenter(function() {
			oakVO.play();
		});
	jQuery("#name3_box")	
		.mouseleave(function() {
			oakVO.pause();
			oakVO.currentTime = 0;
		});
		
	var megaVO = jQuery("#megaVO")[0];
	jQuery("#name5_box")
		.mouseenter(function() {
			megaVO.play();
		});
	jQuery("#name5_box")	
		.mouseleave(function() {
			megaVO.pause();
			megaVO.currentTime = 0;
		});	
	
	var beepOne2 = jQuery("#beep-one2")[0];
	jQuery(".logoImage")
		.mouseenter(function() {
			beepOne2.play();
		});
	
	var homeVO = jQuery("#homeVO")[0];
	jQuery(".home")
		.mouseenter(function() {
			homeVO.play();
		});
	jQuery(".home")	
		.mouseleave(function() {
			homeVO.pause();
			homeVO.currentTime = 0;
		});
		
	var storyVO = jQuery("#storyVO")[0];
	jQuery(".story")
		.mouseenter(function() {
			storyVO.play();
		});
	jQuery(".story")
		.mouseleave(function() {
			storyVO.pause();
			storyVO.currentTime = 0;
		});	
		
	var playVO = jQuery("#playVO")[0];
	jQuery(".play")
		.mouseenter(function() {
			playVO.play();
		});
	jQuery(".play")
		.mouseleave(function() {
			playVO.pause();
			playVO.currentTime = 0;
		});

	var makeVO = jQuery("#makeVO")[0];
	jQuery(".make")
		.mouseenter(function() {
			makeVO.play();
		});	
	jQuery(".make")
		.mouseleave(function() {
			makeVO.pause();
			makeVO.currentTime = 0;
		});		
	
	var factsVO = jQuery("#factsVO")[0];
	jQuery(".facts")
		.mouseenter(function() {
			factsVO.play();
		});
	jQuery(".facts")
		.mouseleave(function() {
			factsVO.pause();
			factsVO.currentTime = 0;
		});

	var guidesVO = jQuery("#guidesVO")[0];
	jQuery(".adults")
		.mouseenter(function() {
			guidesVO.play();
		});
	jQuery(".adults")
		.mouseleave(function() {
			guidesVO.pause();
			guidesVO.currentTime = 0;
		});
		
	function GearTrack(){
	    var Mp3Me= document.getElementById('Mp3Me');
	    Mp3Me.children[0].src = "audio/SFX Gears 01 MONO.mp3";
	    Mp3Me.load();
	}
	
	function ThunderTrack(){
	    var Mp3Me4= document.getElementById('Mp3Me4');
	    Mp3Me4.children[0].src = "audio/SFX Thunder 01 MONO.mp3";
	    Mp3Me4.load();
	}
	
	function HurricaneTrack(){
	    var Mp3Me5= document.getElementById('Mp3Me5');
	    Mp3Me5.children[0].src = "audio/SFX Wind 01 MONO.mp3";
	    Mp3Me5.load();
	}
	
	function FireTrack(){
	    var Mp3Me6= document.getElementById('Mp3Me6');
	    Mp3Me6.children[0].src = "audio/SFX Fire 01 MONO.mp3";
	    Mp3Me6.load();
	}
	
	function TornadoTrack(){
	    var Mp3Me3= document.getElementById('Mp3Me3');
	    Mp3Me3.children[0].src = "audio/SFX Tornado 01 MONO.mp3";
	    Mp3Me3.load();
	}
	
	jQuery(function() {
	    jQuery( "#dialog" ).dialog({
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

	    jQuery( "#opener" ).click(function() {
	      jQuery( "#dialog" ).dialog( "open" );
	    });		
	});

	jQuery(function() {
	    jQuery( "#dialog2" ).dialog({
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

	    jQuery( "#opener2" ).click(function() {
	      jQuery( "#dialog2" ).dialog( "open" );
	    });	
	});

	jQuery(function() {
	    jQuery( "#dialog4" ).dialog({
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

	    jQuery( "#opener4" ).click(function() {
	      //jQuery( "#dialog4" ).dialog( "open" );
	    });	
	});

	jQuery(function() {
	    jQuery( "#dialogOakStory" ).dialog({
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

	    jQuery( "#openerOakStory" ).click(function() {
	      jQuery( "#dialogOakStory" ).dialog( "open" );
	    });	
	});

	jQuery(function() {
	    jQuery( "#dialogTinkerStory" ).dialog({
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

		jQuery( "#openerTinkerStory" ).click(function() {
	      jQuery( "#dialogTinkerStory" ).dialog( "open" );
	    });	
	});

	jQuery(function() {
	    jQuery( "#dialogMegaStory" ).dialog({
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

	    jQuery( "#openerMegaStory" ).click(function() {
	      jQuery( "#dialogMegaStory" ).dialog( "open" );
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
	      	  jQuery( "name1_play_box" ).addClass( "lightbox" );
		  	}
	    });	
	});
	
	jQuery(function() {
	    jQuery( "#dialogOakPlay" ).dialog({
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

	    jQuery( "#openerOakPlay" ).click(function() {
			if ($(window).width() < 1024) {
			   jQuery( "#dialogOakPlay" ).dialog( "open" );
			   return false;
			}
			else{
	      	  jQuery( "name2_play_box" ).addClass( "lightbox" );
		  	}
	    });	
	});

	jQuery(function() {
	    jQuery( "#dialogTinkerPlay" ).dialog({
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

	    jQuery( "#openerTinkerPlay" ).click(function() {
	      jQuery( "name3_play_box" ).addClass( "lightbox" );
	    });	
	});

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

	jQuery(function() {
	    jQuery( "#dialogOakFacts" ).dialog({
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

	    jQuery( "#openerOakFacts" ).click(function() {
	      jQuery( "#dialogOakFacts" ).dialog( "open" );
	    });	
	});

	jQuery(function() {
	    jQuery( "#dialogTinkerFacts" ).dialog({
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

	    jQuery( "#openerTinkerFacts" ).click(function() {
	      jQuery( "#dialogTinkerFacts" ).dialog( "open" );
	    });	
	});

	jQuery(function() {
	    jQuery( "#dialogMegaFacts" ).dialog({
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

	    jQuery( "#openerMegaFacts" ).click(function() {
	      jQuery( "#dialogMegaFacts" ).dialog( "open" );
	    });	
	});

    jQuery(function() {
	    jQuery( "#dialogThirtyMake" ).dialog({
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

	    jQuery( "#openerThirtyMake" ).click(function() {
	      jQuery( "#dialogThirtyMake" ).dialog( "open" );
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

	    $( "#opener_thirty_story" ).click(function() {
	      $( "#dialog_thirty_story" ).dialog( "open" );
	    });
	  });
	
	jQuery(function() {
	    jQuery( "#dialogOakMake" ).dialog({
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

	    jQuery( "#openerOakMake" ).click(function() {
	      jQuery( "#dialogOakMake" ).dialog( "open" );
	    });	
	});

	jQuery(function() {
	  jQuery( "#dialogTinkerMake" ).dialog({
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

	  jQuery( "#openerTinkerMake" ).click(function() {
	      jQuery( "#dialogTinkerMake" ).dialog( "open" );
	  });	
    });
	
	jQuery(function() {
	  jQuery( "#dialogTeacherGuide" ).dialog({
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

	  jQuery( "#openerTeacherGuide" ).click(function() {
	      jQuery( "#dialogTeacherGuide" ).dialog( "open" );
	  });	
    });
	
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
  
jQuery(function() {
    jQuery( "#dialogTinkerPlay" ).dialog({
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

    jQuery( "#openerTinkerPlay" ).click(function() {
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
		
    jQuery.ajaxSetup ({
      // Disable caching of AJAX responses
      cache: false
    });
	
	jQuery(document).ready( function() {
      	jQuery('.subMenu').smint({
      		'scrollSpeed' : 1000
      	});
    });
  
    jQuery(document).ready( function() {
  		// Cache the Window object
  		jQuerywindow = jQuery(window);   
     	jQuery('section[data-type="background"]').each(function(){
       	 	var jQuerybgobj = jQuery(this); // assigning the object
                
        	jQuery(window).scroll(function() {
                
  			// Scroll the background at var speed
  			// the yPos is a negative value because we're scrolling it UP!								
  			var yPos = -(jQuerywindow.scrollTop() / jQuerybgobj.data('speed')); 
	
  			// Put together our final background position
  			var coords = '50% '+ yPos + 'px';

  			// Move the background
  			jQuerybgobj.css({ backgroundPosition: coords });
	
  		}); // window scroll Ends
    });

  	/* 
   	* Create HTML5 elements for IE's sake
   	*/

  	document.createElement("article");
  	document.createElement("section");
	});	 	  
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-9022897-1', 'kidsgetaplan.com');
  ga('send', 'pageview');

</script>