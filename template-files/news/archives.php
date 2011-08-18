{embed="includes/_doc-header" title="{exp:channel:entries channel="news"}{title}{/exp:channel:entries}"}
{preload_replace:section="Donate"}
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
	<div id="sidebar">
		<h3><a href="/news/{current_time format='%Y'}/">News</a></h3>
		<ul id="sb-menu">
      <li><a href="/news/{current_time format='%Y'}/">Archives</a></li>
			<ul>
				{exp:low_yearly_archives channel="news" sort="desc"}
					<li><a href="{path=news/{year}/}" title="View articles from {year}">{year}</a></li>
				{/exp:low_yearly_archives}
			</ul>
    </ul>
	</div><!-- END #sidebar -->
	<div id="section-head">
		<div id="section-head-img" style="background-image:url(http://center.weimar.edu/assets/images/header/news.jpeg)"></div>
	</div>
	<div id="page-data">
	{exp:channel:entries channel="news" }
		<div class="entry">
		<h1>{title}</h1>
		{exp:ce_img:single src="{news_thumb}" max_width="280" max_height="280" attributes='alt="{title}" title="{title}" class="news_pic"'}
		{news_body}
		</div>
		{/exp:channel:entries}
	</div>
	<div class="clear"></div>
</div>
{embed="includes/_doc-footer"}