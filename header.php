<head>
<title>Kids Get A Plan</title>
<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="css/jquery.mobile-1.3.2.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="css/jquery.mobile.structure-1.3.2.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="screen" title="no title" charset="utf-8">


<meta name = "keywords" content = "" />
<meta name = "description" content = "" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1 user-scalable=no">


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/jquery.mobile-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" 	src="js/jquery.smint.js"></script>

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


</head>