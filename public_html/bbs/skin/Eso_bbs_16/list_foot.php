</table>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
 <tr>
    <td align=left class=v7><?=$a_list?> list </a>&nbsp;&nbsp;
                           <?=$a_delete_all?> delete </a></td>
    <td align=center colspan=2 class=b7 nowrap>
                           <?=$a_prev_page?><<</a>  
                           <?=$print_page?>
                           <?=$a_next_page?>>></a>
    </td>
    <td width=40 align=right class=v7><?=$a_write?> write </a></td>
  </tr>
</form>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="<?=$width?>">
  <form method="post" name="search" action="<?=$PHP_SELF?>">
  <input type="hidden" name="page"           value="<?=$page?>">
  <input type="hidden" name="id"             value="<?=$id?>">
  <input type="hidden" name="select_arrange" value="<?=$select_arrange?>">
  <input type="hidden" name="desc"           value="<?=$desc?>">
  <input type="hidden" name="page_num"       value="<?=$page_num?>">
  <input type="hidden" name="selected">
  <input type="hidden" name="exec">
  <input type="hidden" name="sn"             value="on">
  <input type="hidden" name="ss"             value="on">
  <input type="hidden" name="sc"             value="on">
  <input type="hidden" name="category"       value="<?=$category?>">
  <tr><td height=5></td></tr>
  <tr height=17><td height=17 align="right">
  <input type=text name=keyword value="<?=$keyword?>" class=input size=13 valign=top><input type=submit value=" find " class=submit name="submit" onfocus=blur() valign=top>
                </td> 
  </tr>
  </form>
 </table>