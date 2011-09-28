{embed="includes/_doc-header" title="Resources"}
{preload_replace:section="Resources"}
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
  {exp:channel:entries channel="resources" entry_id="726" }
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