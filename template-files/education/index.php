   {embed="includes/_doc-header" title="Education"}
{preload_replace:section="Education"}
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
	<div id="sidebar">
		<h3><a href="/education/">{section}</a></h3>
		<ul id="sb-menu">
			<li><a href="http://weimar.edu/" title="Weimar College">Weimar College</a></li>
			<li><a href="http://academy.weimar.edu" title="Weimar Academy">Weimar Academy</a></li>
		</ul>
	</div><!-- END #sidebar -->
	{exp:channel:entries channel="education" entry_id="716" }
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