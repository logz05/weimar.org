{embed="includes/_doc-header" title="Login"}
<div id="content-sub" class="rounded">
<div id="sb_sdw"></div>
	<div id="sidebar">
		<h3><a href="/login/">Login</a></h3>
		<ul id="sb-menu">

		</ul>
	</div><!-- END #sidebar -->
	<div id="section-head">
		<div id="section-head-img" style="background-image:url(http://center.weimar.edu/assets/images/header/cafeteria.jpg)"></div>
	</div>
	<div id="page-data">
{exp:member:login_form return="/resources/cafeteria-menu-admin"}



	<p><label>Username</label><br />

	<input type="text" name="username" value=""  maxlength="32" class="input" size="25" /></p>



		<p><label>Password</label><br />

	<input type="password" name="password" value="" maxlength="32" class="input" size="25" /></p>



	{if auto_login}

	<p><input class='checkbox' type='checkbox' name='auto_login' value='1'  /> Auto-login on future visits</p>

	{/if}


	<p><input type="submit" name="submit" value="Login" /></p>



{/exp:member:login_form}
		</div>
	<div class="clear"></div>
</div>
{embed="includes/_doc-footer"}