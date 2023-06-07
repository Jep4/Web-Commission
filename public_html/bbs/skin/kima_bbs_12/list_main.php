<tr>
  <td height=30 width=30 nowrap align=center class=thm7 style="padding-top:2;"><?=$number?></td>
  <td align=left style="padding-top:3;"><?=$insert?><?=$subject?>&nbsp;&nbsp;<?$comment_num="$data[total_comment]";
if($data[total_comment]==0) {
  $comment_num="";}
echo "<span class=color2>$comment_num</span>";?>&nbsp;&nbsp;<?=$icon?></td>
  <td nowrap align=left style="padding-top:3; padding-left:5; padding-right:10;"><?=$face_image?><?=$name?> </td>
  <td nowrap width=40 align=center class=thm7 style="padding-top:2;"><?=$date=date("y-m-d",$data[reg_date])?></td>
  <td nowrap width=25 align=center class=thm7 style="padding-top:2;"><?=$hit?></td>
<?=$hide_cart_start?>
<td><input type=checkbox name=cart value="<?=$data[no]?>"></td>
<?=$hide_cart_end?>
</tr>

<tr><td colspan=6 height=1 class=line></td></tr>