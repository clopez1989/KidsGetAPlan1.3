<head>
<title>Kids Get A Plan</title>
<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>

<!-- <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="no title"> -->
<link rel="stylesheet" href="css/jquery.mobile-1.3.2.css" type="text/css" media="screen" title="no title">
<link rel="stylesheet" href="css/jquery.mobile.structure-1.3.2.css" type="text/css" media="screen" title="no title">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="screen" title="no title">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile-1.3.2.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script src="http://code.createjs.com/easeljs-0.7.0.min.js"></script>
<script src="http://code.createjs.com/tweenjs-0.5.0.min.js"></script>
<script src="http://code.createjs.com/movieclip-0.7.0.min.js"></script>
<script src="http://code.createjs.com/preloadjs-0.4.0.min.js"></script>
<script src="js/gearCanvas.js"></script>

<!-- <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script> -->
<script src="js/swfobject.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" 	src="js/jquery.smint2.js"></script>

<link rel="stylesheet" type="text/css" href="js/lightbox/themes/default/jquery.lightbox.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="js/lightbox/themes/default/jquery.lightbox.ie6.css" />
<![endif]-->

<script type="text/javascript" src="js/lightbox/jquery.lightbox.min.js"></script>
<script>

		var preload = function(sources) {
		          var images = [];
		          var length = sources.length;
		          for(var i = 0;  i < length; i++) {
		            images[i] = new Image();
		            images[i].src = sources[i];
		          }
		}

		 preload([
			'images/Home Character Buttons/home_d_3030_active.png', 
			'images/Home Character Buttons/home_d_tinkermeister_active.png',
			'images/Home Character Buttons/home_d_oaktree_active.png', 
			'images/Home Character Buttons/home_d_megatruck_active.png', 
			'images/Sub_Story/sub_story_d_30_30_active.png',
			'images/Sub_Story/sub_story_d_megatrack_active.png',
			'images/Sub_Story/sub_story_d_oak_tree_active.png',
			'images/Sub_Story/sub_story_d_tinkermeister_active.png', 
			'images/Home Character Buttons/home_m_3030_active.png', 
			'images/Home Character Buttons/home_m_tinkermeister_active.png', 
			'images/Home Character Buttons/home_m_oaktree_active.png', 
			'images/Home Character Buttons/home_m_megatruck_active.png', 
			'images/Sub_Story/sub_story_m_30_30_active.png', 
			'images/Sub_Story/sub_story_m_megatrack_active.png',
			'images/Sub_Story/sub_story_m_oak_tree_active.png',
			'images/Sub_Story/sub_story_m_tinkermeister_active.png',
			'images/Sub_Story/sub_story_d_30_30_active.png', 
			'images/Sub_Story/sub_story_d_megatrack_active.png',
			'images/Sub_Story/sub_story_d_oak_tree_active.png',
			'images/Sub_Story/sub_story_d_tinkermeister_active.png', 
			'images/Sub_Play/sub_play_m_30_30_active.png', 
			'images/Sub_Play/sub_play_m_megatrack_active.png',
			'images/Sub_Play/sub_play_m_tinkermeister_active.png',
			'images/Sub_Play/sub_play_d_30_30_active.png', 
			'images/Sub_Play/sub_play_d_megatrack_active.png',
			'images/Sub_Play/sub_play_d_oaktree_active.png',
			'images/Sub_Play/sub_play_d_tinkermeister_active.png', 
			'images/Sub_Make/sub_make_m_3030_active.png', 
			'images/Sub_Make/sub_make_m_oaktree_active.png',
			'images/Sub_Make/sub_make_m_tinkermeister_active.png',
			'images/Sub_Make/sub_make_d_3030_active.png',
			'images/Sub_Make/sub_make_d_oaktree_active.png',
			'images/Sub_Make/sub_make_d_tinkermeister_active.png',
			'images/Sub_Facts/sub_facts_m_3030_active.png', 
			'images/Sub_Facts/sub_facts_m_megatrack_active.png',
			'images/Sub_Facts/sub_facts_m_oaktree_active.png',
			'images/Sub_Facts/sub_facts_m_tinkermeister_active.png',
			'images/Sub_Facts/sub_facts_d_3030_active.png', 
			'images/Sub_Facts/sub_facts_d_megatrack_active.png',
			'images/Sub_Facts/sub_facts_d_oaktree_active.png',
			'images/Sub_Facts/sub_facts_d_tinkermeister_active.png',
			'images/Sub_Adults/sub_adults_m_3030_active.png', 
			'images/Sub_Adults/sub_adults_m_megatrack_active.png',
			'images/Sub_Adults/sub_adults_m_oaktree_active.png',
			'images/Sub_Adults/sub_adults_m_tinkermeister_active.png',
			'images/Sub_Adults/sub_adults_d_3030_active.png', 
			'images/Sub_Adults/sub_adults_d_megatrack_active.png',
			'images/Sub_Adults/sub_adults_d_oaktree_active.png',
			'images/Sub_Adults/sub_adults_d_tinkermeister_active.png',
			'images/Sub_Title/sub_title_m_megatrack.png',
			'images/Sub_Title/sub_title_m_oak_tree.png',
			'images/Sub_Title/sub_title_m_tinkermeister.png',
			'images/Sub_Title/sub_title_d_30_30.png', 
			'images/Sub_Title/sub_title_d_megatrack.png',
			'images/Sub_Title/sub_title_d_oak_tree.png',
			'images/Sub_Title/sub_title_d_tinkermeister.png',
			'images/Top Nav/adults_down_d.png',
			'images/Top Nav/adults_up_d.png',
			'images/Top Nav/facts_down_d.png',
			'images/Top Nav/facts_up_d.png',
			'images/Top Nav/home_down_d.png',
			'images/Top Nav/home_up_d.png',
			'images/Top Nav/make_down_d.png',
			'images/Top Nav/make_up_d.png',
			'images/Top Nav/play_down_d.png',
			'images/Top Nav/play_up_d.png',
			'images/Top Nav/story_down_d.png',
			'images/Top Nav/story_up_d.png',
			'images/Adults/adults_guides_d_active.png',
			'images/Adults/adults_guides_m_active.png',
			'images/Adults/adults_shop_d_active.png',
			'images/Adults/adults_shop_m_active.png',
			'images/Facts/facts_d_3030_active.png',
			'images/Facts/facts_m_3030_active.png',
			'images/Facts/facts_d_megatrack_active.png',
			'images/Facts/facts_m_megatrack_active.png',
			'images/Facts/facts_d_tinkemeister_active.png',
			'images/Facts/facts_m_tinkemeister_active.png',
			'images/Facts/facts_d_oaktree_active.png',
			'images/Facts/facts_m_oaktree_active.png',
			'images/back_desktop_active.png',
			'images/btn_facts_active.png',
			'images/btn_home_active.png',
			'images/btn_make_active.png',
			'images/btn_play_active.png',
			'images/btn_read_active.png',
			'images/close_m_dialog_hover_click.png'
		 ]);
		 
</script>

<script>
	/*$(document).ready(function(){
	    $("a[rel^='prettyPhoto']").prettyPhoto({deeplinking: false, keyboard_shortcuts: false, social_tools: false, allow_resize:false, theme: 'light_rounded'});
	});*/

	  jQuery(document).ready(function($){
	    $('.lightbox').lightbox();
	  });

	  jQuery(document).ready(function () { var anchor_id = window.location.hash; if (anchor_id != "") {
	           var new_position = $(anchor_id).offset(); 
	           window.scrollTo(new_position.left,new_position.top); 
	  } });

var canvas, stage, exportRoot;

function init() {
	canvas = document.getElementById("canvas");
	images = images||{};

	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", handleFileLoad);
	loader.addEventListener("complete", handleComplete);
	loader.loadManifest(lib.properties.manifest);
}

function handleFileLoad(evt) {
	if (evt.item.type == "image") { images[evt.item.id] = evt.result; }
}

function handleComplete() {
	exportRoot = new lib.gearCanvas();

	stage = new createjs.Stage(canvas);
	stage.addChild(exportRoot);
	stage.update();

	createjs.Ticker.setFPS(lib.properties.fps);
	createjs.Ticker.addEventListener("tick", stage);
}

var ctx = document.getCSSCanvasContext('2d', 'animation', 300, 300);

</script>

<meta name = "keywords" content = "" />
<meta name = "description" content = "" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1 user-scalable=no">

</head>