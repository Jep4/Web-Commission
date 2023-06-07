<br><br>

<table align=center border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>

<form method=post name=write action=write_ok.php enctype=multipart/form-data>
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

<tr><td><input type=hidden name=subject value="Guest" class=input></td></tr>

<tr>
<td>

<table align=center border=0 cellspacing=0 cellpadding=0 width=80%>
<?=$hide_start?>
<tr>
<td nowrap align=right style=padding-right:5;padding-bottom:5;><font class=ver7>name</font></td>
<td width=100% colspan=2 style=padding-bottom:5;><input type=text name=name value="<?=$name?>"  class=input2 style="width:35%;height:21;">¡¡
<font class=ver7>pass</font> <input type=password name=password  class=input2 style="width:37%;height:21;"></td>
</tr>
<?=$hide_end?>

<tr>
<td nowrap align=right style='padding-right:5;' class=ver7><?=$hide_notice_start?>n<input type=checkbox name=notice <?=$notice?> value=1>h<input type=checkbox name=use_html <?=$use_html?> value=1><?=$hide_notice_end?>
memo</td>
<td width=100%><input type=text name=memo class=input2 style='width:100%;height:21;'></td>
<td nowrap align=right><input onfocus='this.blur()' type=submit value='write' align=center class=button></td>
</tr>
</table>

</form>
</td>
</tr>
</table>

<br>