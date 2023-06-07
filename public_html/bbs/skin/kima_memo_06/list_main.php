<tr>
<td nowrap style='padding:10 10 8 5;' class=line2>
    <table border=0 cellspacing=0 cellpadding=0 width=100%>
    <tr>
    <td align=center nowrap><?=$face_image?> <?=$name?></td>
    </tr>
    <tr>
    <td align=center nowrap class=thm7><?=$date=date("Y-m-d",$data[reg_date])?></td>
    </tr>
    </table>
</td>
<td width=100% style='padding:10 0 8 10;'><?=$data[memo]?> <?=$a_modify?><img src=<?=$dir?>/modify.gif border=0 align=absmiddle></a> <?=$a_delete?><img src=<?=$dir?>/delete.gif border=0 align=absmiddle></a></td>
<?=$hide_cart_start?><td><input type=checkbox name=cart value="<?=$data[no]?>"></td><?=$hide_cart_end?>
</tr>

<tr><td colspan=3 height=1 class=line></td></tr>