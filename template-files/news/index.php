{embed="includes/_doc-header"}
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
  <div id="sidebar">
    <h3><a href="/news/">News</a></h3>
    <ul id="sb-menu">
      <li><a href="http://weimartv.com" title="WeimarTV">WeimarTV</a></li>
      <li><a href="http://newstartclub.com" title="NEWSTART Club">NEWSTART Club</a></li>
      <li><a href="http://newstartexpo.com" title="NEWSTART Expo">NEWSTART Expo</a></li>
      <li><a href="http://weimarmarket.com" title="Weimar Market">Weimar Market</a></li>
      <li><a href="/resources/weimar-today/" title="Weimar Today">Weimar Today</a></li>
      <li><a href="/resources/featured-videos/" title="Featured Videos">Featured Videos</a></li>
      <li><a href="/resources/cafeteria-menu/" title="Featured Videos">Cafeteria Menu</a></li>
    </ul>
  </div><!-- END #sidebar -->
  <div id="section-head">
    <div id="section-head-img" style="background-image:url(http://center.weimar.edu/assets/images/header/cafeteria.jpg)"></div>
  </div>
  <div id="page-data">
<div id="news_col">
		<h1>Recent News</h1>
		<ul>
			{exp:channel:entries channel="news" limit="5" disable="member_data|trackbacks" paginate="bottom"}
			<a href="{path='news/archives/{entry_date format='%Y'}/{url_title}'}">
				<li class="entry_list">
					<h2>{exp:char_limit total="30"}{title}{/exp:char_limit}<span class="pub_date">{entry_date format="%M %d"}</span></h2>
					<div class="summary">
							{exp:ce_img:single src="{news_image_thumb}" max_width="100" max_height="100" crop="yes" attributes='alt="{title}" title="{title}" class="news_pic"'}
						<p>{exp:char_limit total="160"}{exp:strip_html}{news_body}{/exp:strip_html}{/exp:char_limit}</p>
					</div>
				</li>
			</a>
			{/exp:channel:entries}
		</ul>
		<p class="view_more">
			<a href="{path=news/archives/{current_time format='%Y'}}" title="View Archives">View Archives &raquo;</a>
		</p>
	</div>
    </div>
  <div class="clear"></div>
</div>
{embed="includes/_doc-footer"}