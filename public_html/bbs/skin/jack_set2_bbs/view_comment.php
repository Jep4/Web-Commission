<? if (!$restricted) { ?>
<table align=center cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr><td height=10 colspan=2 ></td></tr>
<tr>
<td nowrap>
<span class=nickname style="padding:7px;">
<font class=sub><?=$comment_name?></font>
<font class=basic>&nbsp;£ü&nbsp;<?=$date=date("ymd",$c_data[reg_date])?>&nbsp;</font>
<font class=sub><?=$a_del?>»èÁ¦</a></font></span>
</td>
</tr>
<tr>
<td colspan=2 style="padding:10px; " class=title><?=nl2br($c_memo)?></td>
</tr>
<tr><td height=10 colspan=2 ></td></tr>
</table>
 <? }?>