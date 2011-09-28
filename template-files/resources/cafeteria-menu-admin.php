{embed="includes/_doc-header"}
{if logged_out}
{redirect="/login/"}
{/if}
<style> 
#calendar td, th {
  border-left: 1px solid #999;
  border-bottom: 1px solid #999;
  width: 120px;
  padding: 18px 0;
  text-align: center;
}
#calendar td.weekday {
  padding: 8px 0;
  background: #2B5E72;
  color: #fff;
  font-weight: 600;
}
#calendar table {
  border-right: 1px solid #999;
  border-top: 1px solid #999;
}
 
#calendar th {
  background: #fff;
  color: #2B5E72;
  border: none;
  border-bottom: 1px solid #999;
}
 
#calendar .other-month {
  background: #eee;
}
td:last-child, th:last-child {
	border-right: 1px solid #999;
}
#calendar td.calendarToday {
  border: 2px solid #2B5E72;
}
#calendar td.calendarCell.filled:hover {
  background: #aec8d0;
}
td.calendarCell, td.calendarToday {
  cursor: pointer;
}
td.calendarCell:hover,
td.calendarToday:hover {
  background: #eee;
}
#success {
  padding:10px;
  background: green;
  border-radius:6px;
  display:none;
  color:white;
}
.calendarMonthLinks a {
  color: #2B5E72;
}
</style> 

<script type="text/javascript" src=""></script> 
<script type="text/javascript">
$(document).ready(function(){
function padNumber(number) {
   
     return (number < 10 ? '0' : '') + number
   
}
if("{segment_5}" != ""){ $("#success").fadeIn().delay(2000).slideUp(); }

if("{segment_3}" != ""){
  var year = "{segment_3}";
  var month = padNumber({segment_4});
} else {
  var year = "{current_time format='%Y'}";
  var month = padNumber({current_time format='%m'});
}

 $(".calendarCell").click(function(){
  var day = $(this).text();
  day = padNumber(day);
  dateString1 = year + "-" + month + "-" + day;
  var dateString = dateString1.replace(/\s/g, "");  
  if($(this).attr("rel") == "hasEntry"){ window.location = "/resources/cafeteria-menu-edit/" + dateString; } else {
  window.location = "/resources/cafeteria-menu-add/" + dateString;
 }
 });
 });
</script>
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
  <h1>Cafeteria Menu Admin</h1>
  <p>To add meals click on the day numbers. Days that have a shaded background have a menu added to them. Days with a white background are empty.</p>
  <div id="success">Meal added successfully!</div>

      {exp:channel:calendar channel="cafeteria-menu" show_future_entries="yes" switch="calendarToday|calendarCell"}

<a href="/resources/cafeteria-menu-admin/{current_time format='%Y/%m'}">Current Month</a>

<table class="calendar-month" border="0" cellpadding="6" cellspacing="1" summary="My Calendar" id="calendar" width="100%">

  <tr class="calendarHeader">

    <th><div class="calendarMonthLinks"><a href="{previous_path='/resources/cafeteria-menu-admin'}">&lt;&lt;</a></div></th>

    <th colspan="5">{date format="%F %Y"}</th>

    <th><div class="calendarMonthLinks"><a class="calendarMonthLinks" href="{next_path='/resources/cafeteria-menu-admin'}">&gt;&gt;</a></div></th>

  </tr>

  <tr>

    {calendar_heading}

    <td class="weekday">{lang:weekday_abrev}</td>

    {/calendar_heading}

  </tr>



  {calendar_rows }

  {row_start}<tr>{/row_start}

  

    {if entries}

    <td class="{switch} filled" rel="hasEntry" align="center">

      {day_number}

    </td>

    {/if}

    

    {if not_entries}

    <td class="{switch}" align="center">{day_number}</td>

    {/if}

    

    {if blank}

    <td class="calendarBlank"></td>

    {/if}

    

  {row_end}</tr>{/row_end}

  {/calendar_rows}

</table>

{/exp:channel:calendar}
    </div>
  <div class="clear"></div>
</div>
{embed="includes/_doc-footer"}