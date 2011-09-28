{embed="includes/_doc-header"
  title="{exp:channel:entries channel='{embed:channel}' entry_id='{embed:entry}'}{title}{/exp:channel:entries}"
}
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
  <div id="sidebar">
    <h3><a href="/{embed:channel}">{exp:channel:info channel="{embed:channel}"}{channel_title}{/exp:channel:info}</a></h3>
    {exp:channel:categories channel="{embed:channel}" style="nested" class="sb-menu"}
      <a href="{if "{ext_{embed:channel}}"}{ext_{embed:channel}}{if:else}/{embed:channel}{if parent_id}/{segment_2}{/if}/{category_url_title}{/if}" id="cat_{category_id}">{category_name}</a>
    {/exp:channel:categories}
  </div><!-- END #sidebar -->
  {exp:channel:entries channel="jobs"}
  <div id="section-head">
    <div id="section-head-img" style="background-image:url({head_img})"></div>
  </div>
  <div id="page-data">
    {exp:channel:entries channel="{embed:channel}" {if segment_3 == ""}entry_id="{embed:entry}"{/if} }
    <div class="entry">
    <h1>{title}</h1>
    {body}
    </div>
  </div>
  {/exp:channel:entries}
  <div class="clear"></div>
</div>
{embed="includes/_doc-footer"}