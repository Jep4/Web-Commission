<br><br><br>

<form>
<table width="280" border="0" cellpadding="0" cellspacing="0">
	<tr><td height="1" class="line"></td></tr>
	<tr><td height="3"></td></tr>
	<tr>
		<td height="20" align="center" class="small6 table_bg"><b>- ERROR MESSAGE -</b></td>
	</tr>
	<tr><td height="3"></td></tr>
	<tr><td height="1" class="line"></td></tr>
	<tr><td height="10"></td></tr>
	<tr>
		<td align="center" height="40" style="padding:5px 0 5px 1px;color:#000000;" class="dotum8"><? echo $message; ?></td>
	</tr>
	<tr><td height="10"></td></tr>
	<tr><td height="2" class="line"></td></tr>
	<tr><td height="5"></td></tr>
	<tr>
		<td align="center">
		<? if(!$url){ ?>
		  <input type="button" value=' BACK ' onclick="javascript:history.go(-1);" class="button">
		<? } else { ?>
		  <input type="button" value=' BACK ' onclick="javascript:history.go(-1);" class="button">
		<? } ?></td>
	</tr>
</form>
</table>

<br><br><br>