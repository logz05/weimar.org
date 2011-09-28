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
      <li><a href="http://weimartv.com" title="Weimar TV">Weimar TV</a></li>
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
    {exp:safecracker channel="cafeteria-menu" id="publishForm" return="resources/cafeteria-menu-admin/<?php $date = explode("-", "{segment_3}"); echo $date[0]."/".$date[1]; ?>/success" safecracker_head="no"}
    
    <label for="title">Breakfast</label><br />
    <textarea name="breakfast" cols="40" rows="6" id="breakfast" dir="ltr"></textarea>
    
    <label for="title">Lunch</label><br />
    <textarea name="lunch" cols="40" rows="6" id="lunch" dir="ltr"></textarea>
    
    <label for="title">Supper</label><br />
    <textarea name="supper" cols="40" rows="6" id="supper" dir="ltr"></textarea>
    
    <table class="hidden">
      <tr>
        <th scope="row" style="padding-right:12px;"><label for="title">Title</label></th>
        <td><input type="text" name="title" id="title" value="{segment_3}" size="50" maxlength="100" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="url_title">URL Title</label></th>
        <td><input type="text" name="url_title" id="url_title" value="{segment_3}" maxlength="75" size="50" /></td>
        <input type="text" class="hidden" name="entry_date" value="{segment_3} 12:00 PM" maxlength="23" size="25" />
      </tr>
    </table>
    <input type="submit" name="submit" value="Add Meals" />

  {/exp:safecracker}
  </div>
  <div class="clear"></div>
</div>
{embed="includes/_doc-footer"}