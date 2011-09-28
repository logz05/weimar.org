{embed="includes/_doc-header"}
{exp:world_weather:current station="KSAC" cache_refresh="300"}

<h1>Weather in Weimar, CA</h1>

<p>Temperature: {temperature_f}&deg;F ({temperature_c}&deg;C)<br />
Feels Like: {feels_like_f}&deg;F ({feels_like_c}&deg;C)<br />
Heat Index: {heat_index_f}&deg;F ({heat_index_c}&deg;C)<br />
Dew Point: {dew_point_f}&deg;F ({dew_point_c}&deg;C)<br />
Humidity: {humidity}%<br />
Barometer: {barometer_in} in. Hg ({barometer_hpa} hPa)<br />
Sky Conditions: {sky_condition}<br />
Conditions: {condition}<br />
Wind: from the {wind_direction} at {wind_speed_mph} mph<br />
Visibility: {visibility_mi} mi ({visibility_km} km)<br />
Last Updated: {last_update format="%m/%d/%Y %g:%i %a"}</p>

{/exp:world_weather:current}
{embed="includes/_doc-footer"} 