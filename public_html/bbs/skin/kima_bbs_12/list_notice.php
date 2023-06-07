<tr>
  <td height=30 width=30 nowrap align=center class=ver7>@</td>
  <td align=left style="padding-top:3;" colspan=4><?=$insert?><?=$subject?>&nbsp;&nbsp;<?$comment_num="$data[total_comment]";
if($data[total_comment]==0) {
  $comment_num="";}
echo "<span class=color2>$comment_num</span>";?></td>
<?=$hide_cart_start?>
<td><input type=checkbox name=cart value="<?=$data[no]?>"></td>
<?=$hide_cart_end?>
</tr>

<tr><td colspan=6 height=1 class=line></td></tr>