{embed="includes/_doc-header" title="Directions"}
{preload_replace:section="About"}
<style type="text/css">
.directions {
width:46%;
float:left;
padding:10px;
}
h2 {
	color:#466266;
}
#map {
border:1px solid #000;
margin-bottom:25px;
width:100%;
height:350px;
background: #FFF url(http://www.weimar.edu/styles/weimar_college/map_watermark.jpg) center center no-repeat;
}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
	<div id="sidebar">
		<h3><a href="/about/">About Us</a></h3>
		<ul id="sb-menu">
			<li><a href="/about/contact" title="History">Contact Us</a></li>
			<li><a href="/about/campus-map" title="Campus Map">Campus Map</a></li>
			<li><a href="/about/employment" title="Employment">Employment</a></li>
			<li><a href="/about/history" title="History">History</a></li>
		</ul>
	</div><!-- END #sidebar -->


	<div id="page-data">
		
		<div class="entry">
		<h1>Directions</h1>
			<div id="map"></div>
			<div class="directions"> 
		
		<h2>From Sacramento</h2> 
		<p>Head East on <strong>I-80</strong><br /> 
Take exit <strong>130 West Paoli Lane</strong><br /> 
Turn Left onto <strong>West Paoli Lane</strong><br /> 
and cross over the highway<br /> 
Turn <strong>Right</strong> at the end of the bridge<br /> 
After 0.1 mi turn <strong>Left</strong> onto Weimar Campus<br /> 
At the Y follow the road to the <strong>Left</strong><br /> 
The college buildings will be on the <strong>Left</strong></p> 
		
  	</div> 
  	<div class="directions"> 
		
		<h2>From Reno</h2> 
		<p>Head West on <strong>I-80</strong><br /> 
Take exit <strong>130 West Paoli Lane</strong><br /> 
Follow the ramp around to the <strong>Right</strong><br /> 
The road becomes <strong>West Paoli Lane</strong><br /> 
After 0.3 mi turn <strong>Left</strong> onto Weimar Campus<br /> 
At the Y follow the road to the <strong>Left</strong><br /> 
The college buildings will be on the <strong>Left</strong></p> 
		
  	</div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&key="></script>
<script type="text/javascript">
$(document).ready(function() {
	var latlng = new google.maps.LatLng(39.035776,-120.976749);
	var myOptions = {
	zoom: 8,
	center: latlng,
	mapTypeId: google.maps.MapTypeId.ROADMAP,
	scrollwheel: false,
	navigationControl: true,
	navigationControlOptions: {
		style: google.maps.NavigationControlStyle.ZOOM_PAN,
	},
	navigationControlOptions: {
		style: google.maps.NavigationControlStyle.SMALL,
	},
	mapTypeControl: true,
	scaleControl: true
	};
	var map = new google.maps.Map(document.getElementById("map"), myOptions);
	
	var contentString = '<div id="info">'+
  	'<div id="siteNotice">'+
  	'</div>'+
  	'<div id="bodyContent">'+
  	'<p><strong>Weimar College</strong><br />20601 W. Paoli Ln<br />Weimar, CA 95736</p>'+
  	'</div>'+
  	'</div>';
  	
	var infowindow = new google.maps.InfoWindow({
  	content: contentString
	});
	
	var marker = new google.maps.Marker({
	position: latlng, 
	map: map, 
	title:"Weimar College"
	});
	
	google.maps.event.addListener(marker, 'click', function() {
  	infowindow.open(map,marker);
	});
});
</script>
{embed="includes/_doc-footer"}