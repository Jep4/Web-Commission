
<tr>
  <td align=left style="padding:10;" width=100% class=sub><?=$subject?>&nbsp;<?=$icon?>&nbsp;&nbsp;<?$comment_num="$data[total_comment]";
if($data[total_comment]==0) {
  $comment_num="";}
echo "<font class=basic color=#606060>$comment_num</font>";?></td>
  <td nowrap align=left style="padding:10;font-family:Oswald;font-size:8px;"><?=$category_name?> 
<?=$hide_cart_start?><input type=checkbox name=cart value="<?=$data[no]?>"><?=$hide_cart_end?></td>
</tr>

<tr><td height=1 colspan=2 class=line></td></tr>