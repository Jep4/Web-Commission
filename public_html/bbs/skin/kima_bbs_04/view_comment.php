<tr onMouseOver=this.style.backgroundColor='F9F9F9' onMouseOut=this.style.backgroundColor='transparent'>
<td width=95 align=right valign=top style="padding-top:3;"><?=$comment_name?></td>
<td align=left valign=top style="padding-left:5;padding-top:3;"><?=nl2br($c_memo)?></td>
<td width=60 align=right valign=top class=thm7 style="padding-top:3;"><?=$date=date("y-m-d",$data[reg_date])?>&nbsp;<?=$a_del?><img src=<?=$dir?>/comment_del.gif border=0 valign=absmiddle>
</td>
</tr>

<tr><td colspan=3 height=1 background=<?=$dir?>/line.gif></td></tr>