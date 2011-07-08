{embed="includes/_doc-header"}
{preload_replace:section="Resources"}
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
	<div id="sidebar">
		<h3><a href="/resources/">{section}</a></h3>
		<ul id="sb-menu">
			<li><a href="http://www.weimartv.com" title="Weimar TV">Weimar TV</a></li>
			<li><a href="http://www.newstartclub.com" title="NEWSTART Club">NEWSTART Club</a></li>
			<li><a href="http://www.newstartexpo.com" title="NEWSTART Expo">NEWSTART Expo</a></li>
			<li><a href="http://www.weimarmarket.com" title="Weimar Market">Weimar Market</a></li>
			<li><a href="weimar-today/" title="Weimar Today">Weimar Today</a></li>
			<li><a href="featured-videos/" title="Featured Videos">Featured Videos</a></li>
			<li><a href="/resources/cafeteria-menu/" title="Featured Videos">Cafeteria Menu</a></li>

		</ul>
	</div><!-- END #sidebar -->
	{exp:channel:entries channel="resources" entry_id="726" }
	<div id="section-head">
		<div id="section-head-img" style="background-image:url({head_img})"></div>
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