{embed="includes/_doc-header"}
{preload_replace:section="Health"}
<link rel="stylesheet" href="/assets/css/new.css">
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
	<div id="sidebar">
		<h3><a href="/health/">Health</a></h3>
		<ul id="sb-menu">
			<li><a href="http://newstart.com/" title="NEWSTART">NEWSTART</a></li>
			<li><a href="http://reversingdiabetes.org/" title="ReversingDiabetes.org">Reversing Diabetes</a></li>
			<li><a href="/health/inn/" title="Conference Center">Conference Center</a></li>
			<li><a href="http://newstartclub.com/" title="NEWSTART Lifestyle Club">NEWSTART Club</a></li>
			<li><a href="http://weimarmarket.com/" title="Weiamr Market">Weimar Market</a></li>
		</ul>
	</div><!-- END #sidebar -->
	{exp:channel:entries channel="health" entry_id="719" }
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