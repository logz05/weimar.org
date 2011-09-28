{embed="includes/_doc-header"
  title="{exp:channel:entries channel="cafeteria-menu" show_future_entries="yes" dynamic="on"}Menu for {entry_date format="%l, %M %j"}{/exp:channel:entries}"
}
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
  width:32%;
  float:left;
  margin-right: 8px;
}
.day .meal .food {
  padding:6px;
}
.day .meal h4 {
  padding: 4px;
  color: #548092;
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
      <li><a href="/weimartoday" title="Weimar Today">Weimar Today</a></li>
      <li><a href="/resources/cafeteria-menu/" title="Cafeteria Menu">Cafeteria Menu</a></li>
      {if logged_in}<li><a href="/resources/cafeteria-menu-admin/" title="Cafeteria Menu Admin">Cafeteria Menu Admin</a></li>{/if}
    </ul>
  </div><!-- END #sidebar -->
  <div id="section-head">
    <div id="section-head-img" style="background-image:url(/assets/images/header/cafeteria.jpg)"></div>
  </div>
  <div id="page-data">
    {exp:channel:entries channel="cafeteria-menu" show_future_entries="yes" dynamic="on"}
    <div class="day">{if logged_in}<a href="/resources/cafeteria-menu-edit/{title}">Edit This</a>{/if}
      <h2>{entry_date format="%l"}<div class="date">{entry_date format="%M %j"}</div></h2>
      <hr>
      <div class="meal breakfast">
        <h4>Breakfast</h4>
        <div class="food">{breakfast}</div>
      </div>
      <div class="meal lunch">
        <h4>Lunch</h4>
        <div class="food">{lunch}</div>
      </div>
      <div class="meal supper">
        <h4>Supper</h4>
        <div class="food">{supper}</div>
      </div>
    </div>
    {/exp:channel:entries} 
  <a href="/resources/cafeteria-menu/">&lt;&lt; Back to Calendar</a> 
  </div>
  <div class="clear"></div>
</div>
{embed="includes/_doc-footer"}