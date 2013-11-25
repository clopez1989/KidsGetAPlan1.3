<head>
<title>Kids Get A Plan</title>
<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/jquery.mobile-1.3.2.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="css/jquery.mobile.structure-1.3.2.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="css/jquery.mobile.theme-1.3.2.min.css" type="text/css" media="screen" title="no title" charset="utf-8">

<meta name = "keywords" content = "" />
<meta name = "description" content = "" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1 user-scalable=no">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="js/jquery.mobile-1.3.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" 	src="js/jquery.smint.js"></script>

<script type="text/javascript">	
	$(document).ready( function() {
    	$('.subMenu').smint({
    		'scrollSpeed' : 1000
    	});
	});
</script>

<script type="text/javascript">	
	$(function(){
	  $("a[rel='tab']").click(function(e){
	    //e.preventDefault();
	    /*
	    if uncomment the above line, html5 nonsupported browers won't change the url but will display the ajax content;
	    if commented, html5 nonsupported browers will reload the page to the specified link.
	    */
 
	    //get the link location that was clicked
	    pageurl = $(this).attr('href');
 
	    //to get the ajax content and display in div with id 'content'
	    $.ajax({url:pageurl+'?rel=tab',success: function(data){
	      $('#content').html(data);
	    }});
 
	    //to change the browser URL to the given link location
	    if(pageurl!=window.location){
	      window.history.pushState({path:pageurl},'',pageurl);
	    }
	    //stop refreshing to the page given in
	    return false;
	  });
	});
</script>

</head>