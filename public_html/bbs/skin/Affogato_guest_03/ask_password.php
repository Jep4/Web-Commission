<div align=center>
<br><br><br><br>

<table width="280" border="0" cellpadding="0" cellspacing="0">
	<tr><td height="1" class="line"></td></tr>
	<tr><td height="3"></td></tr>
	<tr>
		<td height="20" align="center" class="small6 table_bg"><b>- ASK PASSWORD -</b></td>
	</tr>
	<tr><td height="3"></td></tr>
	<tr><td height="1" class="line"></td></tr>
	<tr><td height="15"></td></tr>
	<tr>
		<td colspan=2>
		<form method=post name=delete action=<?=$target?>>
		<input type=hidden name=page value=<?=$page?>>
		<input type=hidden name=id value=<?=$id?>>
		<input type=hidden name=no value=<?=$no?>>
		<input type=hidden name=select_arrange value=<?=$select_arrange?>>
		<input type=hidden name=desc value=<?=$desc?>>
		<input type=hidden name=page_num value=<?=$page_num?>>
		<input type=hidden name=keyword value="<?=$keyword?>">
		<input type=hidden name=category value="<?=$category?>">
		<input type=hidden name=sn value="<?=$sn?>">
		<input type=hidden name=ss value="<?=$ss?>">
		<input type=hidden name=sc value="<?=$sc?>">
		<input type=hidden name=mode value="<?=$mode?>">
		<input type=hidden name=c_no value=<?=$c_no?>></td>
	</tr>
	<tr>
		<td height="25" align="center" class="dotum8"><?=$title?></td>
	</tr>
	<tr>
		<td>
		<table align="center" border="0" cellspacing="0" cellpadding="0">
			<tr><td height="10"></td></tr>
			<tr>
				<td align="left" class="small6">PASS -</td>
			</tr>
			<tr>
				<td align="left"><input type="password" name="password" style="width:120px;height:18px;" class="input_2"></td>
			</tr>
		</table></td>
	</tr>
	<tr><td height="20"></td></tr>
	<tr><td Height="2" class="line"></td></tr>
	<tr>
		<td height="28" align="center">
		<input onfocus='this.blur()' type="submit" value=' SUBMIT ' align="center" class="button">
		<input onfocus='this.blur()' type="button" value=' BACK ' align="center" class="button" onclick="javascript:history.go(-1)"></td>
	</tr>
</table>
<br><br>