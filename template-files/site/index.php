{embed="includes/_doc-header"}


<!--  initialize the slideshow when the DOM is ready -->

	<div class="rounded" id="bap" style="background:url(/assets/images/bap/banner_ted.jpg);">
	

		<nav id="sub">
			<ul>
				<li><a href="http://www.newstart.com/">NEWSTART</a></li>
				<li><a href="http://weimar.edu/">College</a></li>
				<li><a href="http://academy.weimar.edu/">Academy</a></li>
				<li><a href="http://www.weimarmarket.com/">Market</a></li>
				<li><a href="/health/conferencecenter/">Conference Center</a></li>
			</ul>
		</nav>
	</div>
	<div id="content">
	<div id="col-left">
	<div id="latest-headline">
		<div class="item">
		{exp:channel:entries channel="news" orderby="date" sort="desc" limit="1" disable="member_data|trackbacks"}
				<img class="thumb" src="{news_thumb}"/>
				<div class="title">{title}<div class="date">{entry_date format='%M %j'}</div></div>
				<hr/>
				<p class="text">{exp:char_limit total="120"}{news_body}{/exp:char_limit}</p>
		</div>
		{/exp:channel:entries}
	</div>
		<div id="events">
					<h2>Upcoming Events</h2>	

			<ul id="event_feed">
			
					<li>
				<h3>
					<span class="event_month">Apr</span>
					<span class="event_day">29</span>
				</h3>

				<p>Last day of classes<br /></p><div class="clear"></div>
			</li>
			<li>
				<h3>
					<span class="event_month">Apr</span>
					<span class="event_day">30</span>
				</h3>

				<p>Sabbath in the mountains<br /></p><div class="clear"></div>
			</li>
			<li>
				<h3>
					<span class="event_month">May</span>
					<span class="event_day">3</span>
				</h3>

				<p>Final Exams Spring Semester<br /></p><div class="clear"></div>
			</li>
			<li>
				<h3>
					<span class="event_month">Jun</span>
					<span class="event_day">7</span>
				</h3>

				<p>Amazing Facts/Weimar Convocation<br /></p><div class="clear"></div>
			</li>
			<li>
				<h3>
					<span class="event_month">Sep</span>
					<span class="event_day">12</span>
				</h3>

				<p>Week of Prayer - Dennis Priebe<br /></p><div class="clear"></div>
			</li>
			</ul>
			<p class="view_more"><a href="http://www.weimar.edu/news/calendar/">Event Calendar &raquo;</a></p>
		 
		</div><!-- END #events -->
		<div id="news-wrap">
		<ul id="news">
		<h2>Recent News</h2>
		{exp:channel:entries channel="news" offset="1" orderby="date" sort="desc" limit="3" disable="member_data|trackbacks|categories"}
			<li class="item clear">
			<div class="title">{exp:char_limit total="45"}{title}{/exp:char_limit}</div><div class="date">{entry_date format='%M %j'}</div>
				<hr/>
				<img class="thumb" src="{news_thumb}"/>
				<p class="text">{exp:char_limit total="120"}{news_body}{/exp:char_limit}</p>
			</li>
			{/exp:channel:entries}
		</div><!-- END #news -->
	</div><!-- END #col-left -->
	<div id="col-right">
		<div id="quick-links">
			<h2>Quick Links</h2>
			<ul>
				<li><a href="/donate/" title="Donate">Donate</a></li>
				<li><a href="/resources/weimar-today/" title="Subscribe to Weimar Today">Newsletter</a></li>
				<li><a href="/about/" title="Contact Us">Contact Us</a></li>
				<li><a href="http://www.newstart.com/" title="NEWSTART Club">About Us</a></li>
				<li><a href="http://weimartv.com/" title="Weimar TV">Weimar TV</a></li>
				<li><a href="/resources/cafeteria-menu/" title="Cafeteria Menu">Cafeteria Menu</a></li>
			</ul>
		</div><!-- END #quick_links -->
		<div id="icon-links">
			<img src="/assets/images/nsc_3.jpg"/>
		</div>
	</div><!-- END #col-right -->
		<div class="clear"></div>
	</div>
{embed="includes/_doc-footer"} 