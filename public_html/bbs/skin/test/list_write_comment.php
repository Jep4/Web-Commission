<br>

<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr><td width=1>
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
</td>

<tr>
<td>

<table border=0 align=right cellpadding=0 cellspacing=0 width=70%>
<tr>
<?=$hide_c_password_start?>
<tr> <td>���Թ����ڵ�</td> <td> <p><img src="http://delightpi.ivyro.net/bbs/zmSpamFree/zmSpamFree.php?zsfimg=<?php echo time();?>" id="zsfImg" alt="���⸦ Ŭ���� �ּ���." title="Ŭ���Ͻø� �ٸ� ������ �ٲ�ϴ�. SpamFree.kr" onclick="this.src='http://delightpi.ivyro.net/bbs/zmSpamFree/zmSpamFree.php?re&zsfimg=' + new Date().getTime();" />&nbsp; <input type="text" size="8" maxlength="10" name="zsfCode" id="zsfCode" />&nbsp; <span onclick="document.getElementById('zsfImg').src='http://delightpi.ivyro.net/bbs/zmSpamFree/zmSpamFree.php?re&zsfimg=' + new Date().getTime();" title="���ΰ�ħ">���ΰ�ħ</span></p> </td> </tr>
<td width="70" valign=top nowrap>
<font style='font-family:verdana;font-size:7pt;'>Name</font><br>
<input type=name name=name class=input style="width:62;height:18;"><br>
<font style='font-family:verdana;font-size:7pt;'>Pass</font><br>
<input type=password name=password class=input style="width:62;height:18;">
</td>
<?=$hide_c_password_end?>
<td width="100%">
<textarea name=memo style="width:100%;height:74" class=input></textarea>
</td>
<td width="60" align=right nowrap>
<input type=submit <?if($browser){?>class=button<?}?> value=' Comment ' accesskey="s" style="height:74;font-family:verdana;font-size:7pt;">
</td>
</tr>
</table>

</td>
</tr>
</form>

</table>

<br>

<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr><td height=1 background=<?=$dir?>/line.gif></td></tr>
</table>