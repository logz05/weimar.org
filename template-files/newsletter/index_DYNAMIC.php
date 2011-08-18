<style>
	h1 {
		padding-bottom:2px;
		margin-bottom: 12px;
		margin-top:20px;
		font-size:18px;
		font-weight: bold;
	}
	h2 {
		
		padding-top:22px;
		margin-bottom: 6px;
		font-size:16px;
		font-weight: bold;
		color:#015AAC;
	}
	p + h2 {
		border-top: 2px dashed #ccc;
	}
	p {
		margin-top:0;
		padding-top:0;
	}
</style>

<html style="padding:0; margin:0;">
	<body style="padding:0; margin:0;" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0" bgcolor='#b7cfd7' >
		<STYLE> a { color:#87A621; } </STYLE>
		<table width="100%" cellpadding="0" cellspacing="0" class="backgroundTable" bgcolor='#b7cfd7'>
			<tr>
				<td valign="top" align="center">
					<table width="550" cellpadding="0" cellspacing="0">
						<tr>
							<td style="background-color:#4DA6EC;border-top:0px solid #333333;">
								<center><a href="http://www.weimar.org/"><IMG SRC="http://center.weimar.edu/assets/images/enews-header.jpg" BORDER="0" title="Weimar Today newsletter"  alt="Weimar Today Newsletter" align="center" /></a></center>
							</td>
						</tr>
					</table>
					
					<table width="550" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
						<tr>
							<td style="background:url(http://center.weimar.edu/assets/images/enews-header-cell.jpg); color:#fff; border-bottom: solid 2px #677e19; padding:0 30px 12px"><span style="float:left; font-size:18px;color:#fff;font-family:'Helvetica Neue', Arial, Helvetica, sans-serif;line-height:110%;">Weimar Weekly Newsletter</span><span style="float:right; font-size:14px;color:#fff;font-family:'Helvetica Neue', Arial, Helvetica, sans-serif;line-height:110%;">Nov 14, 2013</span></td>
						</tr>
					</table>
					<table width="550" cellpadding="10" cellspacing="0" bgcolor="#FFFFFF">
						<tr>
						{exp:channel:entries channel="enewsletter" limit="1"}
							<td></td>
							<td bgcolor="#FFFFFF" valign="top" style="font-size:16px;color:#000000;line-height:150%;font-family:'Helvetica Neue', Arial, Helvetica, sans-serif;">
								{enews_body}
								</br>
							</td>
							
							<td></td>
							{/exp:channel:entries}
						</tr>
					</table>
					<table width="550" cellpadding="0" cellspacing="0">
						<tr>
							<td style="text-align:center;" valign="top">
								<span style="font-size:10px;color:#000000;line-height:4em;font-family:verdana;">A free community service of <a href="http://www.weimar.org/" style="font-size:10px;color:#000000;line-height:4em;font-family:verdana;">Weimar Center of Health and Education</a>. &copy;{current_time format="%Y"}. All Rights Reserved
								</span>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>