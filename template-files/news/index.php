{embed="includes/_doc-header" title="News"}
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
<div id="news_col">
		<h1>Recent News</h1>
		<ul>
			{exp:channel:entries channel="news" limit="5" disable="member_data|trackbacks" year="{segment_2}" paginate="bottom" dynamic="off"}
			<a href="{path='/news/archives/{url_title}'}">
				<li class="entry_list">
					<h2>{exp:char_limit total="30"}{title}{/exp:char_limit}<span class="pub_date">{entry_date format="%M %d"}</span></h2>
					<div class="summary">
							{exp:ce_img:single src="{news_thumb}" max="100" crop="yes" attributes='alt="{title}" title="{title}" class="news_pic"'}
						<p>{exp:char_limit total="160"}{exp:strip_html}{news_body}{/exp:strip_html}{/exp:char_limit}</p>
					</div>
				</li>
			</a>
			
			
    			{paginate}
    		<p class="view_more">
        {if previous_page}
        
        <a href="{auto_path}">&lt;&lt; Previous Page</a> &nbsp;
        
        {/if}

        {if next_page}
        
        <a href="{auto_path}">Next Page &gt;&gt; </a>
        
        {/if}
        </p>
        {/paginate}
			{/exp:channel:entries}
		</ul>
		</p>
	</div>
    </div>
  <div class="clear"></div>
</div>
{embed="includes/_doc-footer"}