<? 
	$name= str_replace(">",">",$name);
$date="<span title='".date("H시 i분 s초", $data[reg_date])."'>".date("y-m-d", $data[reg_date])."</span>"; 
	if(($is_admin||$member[level]<=$setup[grant_delete]||$data[ismember]==$member[no]||!$data[ismember])&&!$data[child]) $g_delete="<a href='delete.php?$href$sort&no=$data[no]' title='삭제하기'>".$icon."</a>"; 
	else $g_delete="$icon";
?> 
  <tr onMouseOver=this.style.backgroundColor="" onMouseOut=this.style.backgroundColor="" height=25>
    <?=$hide_cart_start?><td align=center><input type=checkbox name=cart value="<?=$data[no]?>"></td><?=$hide_cart_end?>
    <td align=center class=num><?=$number?></font></td>
    <?=$hide_category_start?><td align=center class=rc><span class=sub><?=$category_name?></span></td><?=$hide_category_end?>
    <td align=left class=rc>
       <table border=0 cellpadding=0 cellspacing=0 border=0 width=100%>
          <tr>
              <td width=0></td>
              <td>&nbsp;
   <?=$subject?>&nbsp;<?
$comment_num="+".$data[total_comment]."";
if($data[total_comment]==0) {
  $comment_num="";
}
echo "<span class=com>$comment_num</span>";
?>&nbsp;<?=$icon?></td>
          </tr>
        </table>
     </td>
     <td align=center class=rc><?=$face_image?><?=$name?>&nbsp;</td>
     <td align=center class=date><?=$date?></td>
   <tr height=1><td></td></tr>
<tr><td class=esoline height="1" colspan="6"> </td></tr>



 
