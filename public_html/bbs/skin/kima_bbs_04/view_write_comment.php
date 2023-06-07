</tr><td colspan=4 height=1></td></tr>
</table>

<form method=post name=write action=comment_ok.php>
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

<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr><td align=right>
<table border=0 cellpadding=0 cellspacing=0>
<tr>
<td>
<font class=thm7><b>name</b></font> <?=$c_name?>
<?=$hide_c_password_start?>
<font class=thm7><b>pass</b></font> <input type=password name=password <?=size(10)?> maxlength=20 class=input style="height:18">
<?=$hide_c_password_end?>
</td>
</tr>
<tr><td>
<textarea name=memo class=input style="width:250;height:55;overflow:auto;"></textarea></td>
<td><input type=submit <?if($browser){?>class=input<?}?> value=' comment ' accesskey="s" style="font-size:7pt;font-family:tahoma;letter-spacing:0;height:55;"></td></tr>
</table>

</td>
</tr>
</table>
</form>