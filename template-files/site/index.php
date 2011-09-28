{embed="includes/_doc-header"}
<script src="/assets/js/jquery.prettyPhoto.js"></script>
<link rel="stylesheet" href="/assets/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
  <div class="rounded" id="bap" style="background:url(/assets/images/bap/ns-global-bap.jpg);">
    <p>&ldquo;The <span class="health">gospel of health</span> is to be firmly linked with the <span class="ministry">ministry of the Word</span>&hellip;&rdquo;</p>
    <a id="watch-now" href="http://vimeo.com/27510556?title=0&amp;byline=0&amp;portrait=0&amp;width=700&amp;height=400" rel="prettyPhoto" title="">Watch Now</a>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto({
          theme: 'dark_rounded',
          social_tools: false
        });
      });
    </script>
    <nav id="sub">
      <ul>
        <li><a href="http://newstart.com/">NEWSTART</a></li>
        <li><a href="http://weimar.edu/">College</a></li>
        <li><a href="http://academy.weimar.edu/">Academy</a></li>
        <li><a href="http://weimarmarket.com/">Market</a></li>
        <li><a href="/health/inn">Inn</a></li>
      </ul>
    </nav>
  </div>
  <div id="content">
  <div id="col-left">
  <div id="latest-headline">
    {exp:channel:entries channel="news" orderby="date" sort="desc" limit="1" disable="member_data|trackbacks"}
    <a href="/news/archives/{url_title}" title="{title}">
      <div class="item">
        {exp:ce_img:single src="{news_thumb}" max_width="133" max_height="100" crop="yes" attributes="class='thumb'"}
        <div class="title">{exp:char_limit total="35"}{title}{/exp:char_limit}<div class="date">{entry_date format='%M %j'}</div></div>
        <hr/>
        <p class="text">{exp:char_limit total="160"}{news_body}{/exp:char_limit}</p>
      </div>
      </a>
    {/exp:channel:entries}
  </div>
    <div id="events">
          <h2 class="heading">Upcoming Events</h2>  

      <ul id="event_feed">
      <?php require_once("../includes/events.php"); ?>
      <?php
	$events = new Weimar_CalendarCollection();
	$events->loadCalendar('http://www.google.com/calendar/feeds/weimar.org_cnijr5sa383f7kl28eu63996ec@group.calendar.google.com/public/full'); //College
	$events->loadCalendar('http://www.google.com/calendar/feeds/weimar.org_d8ddm766f7nkgp28832qkfpt3k%40group.calendar.google.com/public/full'); //Academy
	foreach ($events->getEvents(5) as $event)
	{
		print "\t\t\t<li>\n";
		print "\t\t\t\t<h3>\n";
		print "\t\t\t\t\t<span class=\"event_month\">".$event->getStartTime('M')."</span>\n";
		print "\t\t\t\t\t<span class=\"event_day\">".$event->getStartTime('j')."</span>\n";
		print "\t\t\t\t</h3>\n";
		print "\t\t\t\t<p>".$event->getTitle()."<br /></p><div class=\"clear\"></div>\n";
		print "\t\t\t</li>\n";
	}
      ?>
      </ul>
      <p class="view_more"><a href="/news/events/">Event Calendar &raquo;</a></p>
     
    </div><!-- END #events -->
    <div id="news-wrap">
    <ul id="news">
    <h2 class="heading"><a href="/news/{current_time format='%Y'}">Recent News</a></h2>
    {exp:channel:entries channel="news" offset="1" orderby="date" sort="desc" limit="2" disable="member_data|trackbacks|categories"}
      <a href="/news/archives/{url_title}" title="{title}">
        <li class="item clear">
        <div class="title">{exp:char_limit total="40"}{title}{/exp:char_limit}</div><div class="date">{entry_date format='%M %j'}</div>
          <hr/>
          {exp:ce_img:single src="{news_thumb}" max_width="100" max_height="75" crop="yes" attributes="class='thumb'"}
          <p>{exp:char_limit total="160"}{exp:strip_html}{news_body}{/exp:strip_html}{/exp:char_limit}</p>
        </li>
      </a>
      {/exp:channel:entries}
    </div><!-- END #news -->
  </div><!-- END #col-left -->
  <div id="col-right">
    <div id="quick-links">
      <h2 class="heading">Quick Links</h2>
      <ul>
        <li><a href="/donate/" title="Donate">Donate</a></li>
        <li><a href="/resources/weimar-today/" title="Subscribe to Weimar Today">Newsletter</a></li>
        <li><a href="/about/contact/" title="Contact Us">Contact Us</a></li>
        <li><a href="/about/" title="About Us">About Us</a></li>
        <li><a href="http://weimartv.com/" title="Weimar TV">Weimar TV</a></li>
        <!--<li><a href="/resources/cafeteria-menu/" title="Cafeteria Menu">Cafeteria Menu</a></li>-->
      </ul>
    </div><!-- END #quick_links -->
    <div id="icon-links">
      <img src="/assets/images/nsc_3.jpg"/>
    </div>
  </div><!-- END #col-right -->
    <div class="clear"></div>
  </div>
{embed="includes/_doc-footer"} 