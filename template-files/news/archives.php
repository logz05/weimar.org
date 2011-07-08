{embed="includes/_doc-header"}
{preload_replace:section="Donate"}
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
	<div id="sidebar">
		<h3><a href="/archives/">Archives</a></h3>
		<ul id="sb-menu">
		</ul>
	</div><!-- END #sidebar -->
	
	<div id="section-head">
		<div id="section-head-img" style="background-image:url(http://center.weimar.edu/assets/images/header/news.jpeg)"></div>
	</div>
	{exp:channel:entries channel="news" url_title="{segment_4}" dynamic="off"}
	<div id="page-data">
		
		<div class="entry">
		<h1>{title}</h1>
		{news_body}
		</div>
	</div>
	{/exp:channel:entries}
	<div class="clear"></div>
</div>
{embed="includes/_doc-footer"}