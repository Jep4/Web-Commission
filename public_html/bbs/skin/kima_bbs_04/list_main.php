<tr align=center onMouseOver=this.style.backgroundColor='F9F9F9' onMouseOut=this.style.backgroundColor='transparent'>
  <td nowrap align=center class=thm7><?=$number?></td>
  <td nowrap class=thm7 align=center><?=$date=date("y-m-d",$data[reg_date])?></td>
  <td align=left style='padding-top:3;'><?=$insert?><?=$icon?><?=$subject?> 
<?$comment_num="".$data[total_comment]."";
if($data[total_comment]==0) {
  $comment_num="";}
echo "<span class=comment>$comment_num</span>";?>
</td> 
  <td nowrap align=left style='padding-top:3;'><?=$name?></td>
<td nowrap align=right class=thm7><?=$hit?></td>
<?=$hide_cart_start?>
<td><input type=checkbox name=cart value="<?=$data[no]?>"></td>
<?=$hide_cart_end?>
</tr>
<tr><td colspan=12 height=1 background=<?=$dir?>/line.gif></td></tr>