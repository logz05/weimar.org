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
{if segment_2==""}
  {exp:channel:entries channel="donate" entry_id="722" }
    <div class="entry">
    <h1>{title}</h1>
    {body}
    </div>
  {/exp:channel:entries}
{/if}
  <h1>Make a Donation</h1>
  <h2>Phone</h2>
  <p>To make a donation call 530-422-7995</p>
  <!--
<h2>Mail</h2>
  <p>Address Goes Here<br>
  Anytown, CA USA</p>
-->

  </div>
  <div class="clear"></div>
</div>
{embed="includes/_doc-footer"}