{embed="includes/_doc-header"}
<style>
h2 {
  margin-top:14px;
}
.day {
  width:100%;
  float:left;
}
.date {
  float:right;
  color:#ccc;
  font-size:14px;
}
.day .meal {
  width:33.4%;
  float:left;
}
.day .meal .food {
  padding:6px;
}
.day .meal h5 {
  background:#efefef;
  padding:6px;
}
hr {
  clear:both;
  margin:4px 0;
}
</style>
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
  <div id="sidebar">
    <h3><a href="/resources/">Resources</a></h3>
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
    {exp:channel:entries channel="cafeteria-menu" show_future_entries="yes" dynamic="on"}

{if embed:meal_id}

Hey Bob!

{if:else}
<div class="day">
        <h2>{entry_date format="%l"}<div class="date">{entry_date format="%M %j"}</div></h2>
        <hr/>
<div class="meal breakfast"><h5>Breakfast</h5><div class="food">{breakfast}</div></div>
<div class="meal lunch"><h5>Lunch</h5><div class="food">{lunch}</div></div>
<div class="meal supper"><h5>Supper</h5><div class="food">{supper}</div></div>
        </div>
{/if}
{/exp:channel:entries} 
<a href="/resources/cafeteria-menu/">&lt;&lt; Back to Calendar</a> 
</div>
  <div class="clear"></div>
</div>
{embed="includes/_doc-footer"}