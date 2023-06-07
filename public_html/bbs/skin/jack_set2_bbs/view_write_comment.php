<? if (!$restricted) { ?>
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

<tr>
<td colspan=2 style="padding-top:10px;"><textarea name=memo style="width:100%;height:60;" class=input></textarea>
</td>
</tr>
<tr>
<td nowrap align=left>
<?=$hide_c_password_start?><input type=name name=name class=input2 style="width:20%;height:25;margin-top:5px;" placeholder="이름">&nbsp;
<input type=password name=password class=input2 style="width:20%;height:25;margin-top:5px;" placeholder="비밀번호"><?=$hide_c_password_end?>
</td>
<td align=right><input type=submit class=button value='쓰기' accesskey="s">
</td></tr>
</table>
</form>
<? }?>