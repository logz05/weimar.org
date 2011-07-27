{embed="includes/_doc-header"}
<style>
textarea, input[type=text] {
  width:100%;
  clear:both;
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
    {exp:safecracker channel="cafeteria-menu" id="publishForm" return="resources/cafeteria-menu-admin/<?php $date = explode("-", "{segment_3}"); echo $date[0]."/".$date[1]; ?>/success" url_title="{segment_3}" safecracker_head="no"}
    
    <label for="title">Breakfast</label><br />
    <textarea name="breakfast" cols="40" rows="3" id="breakfast" dir="ltr">{breakfast}</textarea>
    
    <label for="title">Lunch</label><br />
    <textarea name="lunch" cols="40" rows="3" id="lunch" dir="ltr">{lunch}</textarea>
    
    <label for="title">Supper</label><br />
    <textarea name="supper" cols="40" rows="3" id="supper" dir="ltr">{supper}</textarea>
    
    <input type="submit" name="submit" value="Save Meals" />

  {/exp:safecracker}
  </div>
  <div class="clear"></div>
</div>
{embed="includes/_doc-footer"}