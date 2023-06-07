<br><br><br>

<form>
<table width="250" border="0" cellpadding="0" cellspacing="0">
	<tr><td height="1" class="line"></td></tr>
	<tr><td height="10"></td></tr>
	<tr>
		<td align="center" class="thm6">- MESSAGE  -</td>
	</tr>
	<tr><td height="10"></td></tr>
	<tr>
		<td align="center" height="40" style="padding:5px 0 5px 1px;color:#000000;letter-spacing:0px;"><? echo $message; ?></td>
	</tr>
	<tr><td height="1" class="line"></td></tr>
	<tr><td height="10"></td></tr>
	<tr>
		<td align="center">
		<? if(!$url){ ?>
		  <input type="button" value=' BACK ' onclick="javascript:history.go(-1);" class="button">
		<? } else { ?>
		  <input type="button" value=' BACK ' onclick="javascript:history.go(-1);" class="button">
		<? } ?>
		</td>
	</tr>
</form>
</table>

<br><br><br>