{embed="includes/_doc-header" title="Donate"}
{preload_replace:section="Donate"}
{!-- DELETE A PRODUCT --}
{if segment_2=="delete"}
{!-- The delete_from_cart tag deletes items. 
  In this case it is only called if segment_2 is "delete"
  if used on a page with other tags, place it towards the top of the page. 
   --}
  {exp:cartthrob:delete_from_cart delete_all="yes" row_id="{segment_3}"}
{/if}
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
  <div id="sidebar">
    <h3><a href="/donate/">{section}</a></h3>
    <ul id="sb-menu">
    </ul>
  </div><!-- END #sidebar -->
  <div id="section-head">
    <div id="section-head-img" style="background-image:url({exp:channel:entries channel='donate' entry_id='722' }{head_img}{/exp:channel:entries})"></div>
  </div>
  <div id="page-data">
    <p>Your donation is empty</p>
    <a href="/donate/">Donate</a>
  </div>
  <div class="clear"></div>
</div>
{embed="includes/_doc-footer"}