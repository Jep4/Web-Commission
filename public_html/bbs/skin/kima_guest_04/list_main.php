<table border=0 cellPadding=0 cellspacing=0 width=100%>
<tr><td colspan=12 height=1 background=<?=$dir?>/line.gif></td></tr>
<tr>
<td align=center width=35 nowrap class=thm7><?=$number?></td>
<td align=left width=100% style='padding-top:3;'><img src=<?=$dir?>/head.gif border=0>&nbsp;<?=$face_image?> <?=$name?></a></td>
<td align=right nowrap width=100 class=thm7><?=$date=date("y-m-d",$data[reg_date])?>&nbsp;<span style='padding-top:3;'><? if($data[homepage]){?><a href="<?=$data[homepage]?>" target="_blank" onfocus='this.blur()'><img src=<?=$dir?>/home.gif border=0></a><? } else { ?><? } ?> <?=$a_reply?><img src=<?=$dir?>/reply.gif border=0></a> <?=$a_modify?><img src=<?=$dir?>/modify.gif border=0></a> <?=$a_delete?><img src=<?=$dir?>/delete.gif border=0></a></sapn>
<?=$hide_cart_start?><td align=right><input type=checkbox name=cart value="<?=$data[no]?>"></td><?=$hide_cart_end?>
</td>
  </tr>
<tr><td colspan=12 height=1 background=<?=$dir?>/line.gif></td></tr>
</table>

<table border=0 cellPadding=5 cellspacing=0 width=100%>
  <tr>
    <td valign=top>
    <?=$memo?><br>
    </td>
  </tr>
  <tr>
    <td width=100% align=right>
    </td>
  </tr>
</table>

<?
 include "include/get_reply.php";
?>