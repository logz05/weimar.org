{embed="includes/_doc-header" title="Privacy Policy"}
{preload_replace:section="About"}
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
	{exp:channel:entries channel="about" entry_id="766" }
	<div id="section-head">
		<div id="section-head-img" style="background-image:url(http://center.weimar.edu/assets/images/header/about1.jpg)"></div>
	</div>
	<div id="page-data">
		
		<div class="entry">
		<h1>{title}</h1>
		{body}
		</div>
	</div>
	{/exp:channel:entries}
	<div class="clear"></div>
</div>
{embed="includes/_doc-footer"}