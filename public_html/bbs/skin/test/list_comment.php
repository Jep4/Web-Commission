<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr><td style=padding:10;>

<table align=center cellpadding=0 cellspacing=0 width=100%>
<tr>
<td nowrap width=80 align=right valign=top style="padding-right:12; border-right-width:1; border-right-color:C0C0C0; border-right-style:solid;"><?=$c_face_image?><?=$comment_name?><br>
<font style='font-family:verdana;font-size:7pt;color:aaaaaa;'><?=$date=date("ymd",$c_data[reg_date])?></font></td>
<td width=100% style="padding-left:12;" valign=top><?=nl2br($c_memo)?> <?=$a_del?><img src=<?=$dir?>/delete.gif border=0 align=absbottom></a></td>
</tr>
</table>

</td></tr>

<tr><td colspan=2 height=1 background=<?=$dir?>/line.gif></td></tr>
</table>
