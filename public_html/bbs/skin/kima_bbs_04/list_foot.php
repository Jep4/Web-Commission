<tr>
<td colspan=10></td></tr>
</table>
<table border=0 cellpadding=0 cellspacing=0 width=100%>
<tr>
 <td></td>
 <td>

<table border=0 cellspacing=1 cellpadding=1 width=100%>
<tr>
 <td align=left> 
<?=$a_list?><img src=<?=$dir?>/list.gif border=0></a>
<?=$a_delete_all?><img src=<?=$dir?>/delete.gif border=0></a>
<?=$a_write?><img src=<?=$dir?>/write.gif border=0></a>
</td>
 <td align=right class=thm7>
  <?=$a_1_prev_page?><img src=<?=$dir?>/prev.gif border=0></a>
  <?=$print_page?>
  <?=$a_1_next_page?><img src=<?=$dir?>/next.gif border=0></a>
 </td>
</tr>
</form>
</table>
 </td>
</tr>
<tr>
 <td>

<form method=post name=search action=<?=$PHP_SELF?>>
<input type=hidden name=page value=<?=$page?>>
<input type=hidden name=id value=<?=$id?>>
<input type=hidden name=select_arrange value=<?=$select_arrange?>>
<input type=hidden name=desc value=<?=$desc?>>
<input type=hidden name=page_num value=<?=$page_num?>>
<input type=hidden name=selected>
<input type=hidden name=exec>
<input type=hidden name=sn value="<?=$sn?>">
<input type=hidden name=ss value="<?=$ss?>">
<input type=hidden name=sc value="<?=$sc?>">
<input type=hidden name=category value="<?=$category?>">

 </td>
 <td>

<table border=0 width=100% cellspcing=0 cellpadding=0>
<tr>
<td align=right>
<input type=text name=keyword value="<?=$keyword?>" style="width:200px; height:18px" class=input>
</td>
</tr>
</table>
</td></tr></table>
</td></tr></table><br>