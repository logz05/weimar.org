{embed="includes/_doc-header"}
{preload_replace:section="Donate"}
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
	<div id="sidebar">
		<h3><a href="/donate/">{section}</a></h3>
		<ul id="sb-menu">
		</ul>
	</div><!-- END #sidebar -->
	{exp:channel:entries channel="donate" entry_id="722" }
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