
{embed="includes/_doc-header" title="Cafeteria Menu"}
<style>
#calendar td, th {
  border-left: 1px solid #999;
  border-bottom: 1px solid #999;
  width: 120px;
  padding: 10px 0;
  text-align: center;
}
 
#calendar table {
  border-right: 1px solid #999;
  border-top: 1px solid #999;
}
 
#calendar th {
  background: #666;
  color: #fff;
}
 
#calendar .other-month {
  background: #eee;
}
.current-month {
}
.current-month.filled {
  background:#d1e1e6;
}
#success {
  padding:10px;
  background: green;
  border-radius:6px;
  display:none;
  color:white;
}
.calendarMonthLinks a {
  color:white;
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
      <li><a href="/resources/cafeteria-menu/" title="Featured Videos">Cafeteria Menu</a></li>
    </ul>
  </div><!-- END #sidebar -->
  <div id="section-head">
    <div id="section-head-img" style="background-image:url(http://center.weimar.edu/assets/images/header/cafeteria.jpg)"></div>
  </div>
  <div id="page-data">

      {exp:channel:calendar channel="cafeteria-menu" show_future_entries="yes"}

<a href="/resources/cafeteria-menu/{current_time format='%Y/%m'}">Current Month</a>

<table class="calendar-month" border="0" cellpadding="6" cellspacing="1" summary="My Calendar" id="calendar" width="100%">

  <tr class="calendarHeader">

    <th><div class="calendarMonthLinks"><a href="{previous_path='/resources/cafeteria-menu'}">&lt;&lt;</a></div></th>

    <th colspan="5">{date format="%F %Y"}</th>

    <th><div class="calendarMonthLinks"><a class="calendarMonthLinks" href="{next_path='/resources/cafeteria-menu'}">&gt;&gt;</a></div></th>

  </tr>

  <tr>

    {calendar_heading}

    <td class="weekday">{lang:weekday_abrev}</td>

    {/calendar_heading}

  </tr>



  {calendar_rows }

  {row_start}<tr>{/row_start}

  

    {if entries}

    <td class='current-month filled' rel='hasEntry' align='center'>

      <a href="{day_path='/resources/meal-data/'}">{day_number}</a>

    </td>

    {/if}

    

    {if not_entries}

    <td class='current-month' align='center'>{day_number}</td>

    {/if}

    

    {if blank}

    <td class='calendarBlank'></td>

    {/if}

    

  {row_end}</tr>{/row_end}

  {/calendar_rows}

</table>

{/exp:channel:calendar}
    </div>
  <div class="clear"></div>
</div>
{embed="includes/_doc-footer"}