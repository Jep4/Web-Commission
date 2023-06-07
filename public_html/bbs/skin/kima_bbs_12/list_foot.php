</table>
</td>
</tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
<td align=left style="padding-top:7;" class=ver7>
<?=$a_list?>list</a>&nbsp;&nbsp;<?=$a_write?>write</a>&nbsp;&nbsp;<?=$a_delete_all?>delete</a>
</td>
 <td align=right style="padding-top:5;" valign=top class=ver7>
<?=$a_1_prev_page?>prev</a> <?=$print_page?> <?=$a_1_next_page?>next</a></td>
</tr>
</form>
</table>


<table border=0 cellspcing=0 cellpadding=0 width=<?=$width?>>
<tr><td>
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
</td></tr>

<tr>
<td align=right>
<a href="javascript:OnOff('sn')" onfocus=blur()><img src=<?=$dir?>/name_<?=$sn?>.gif border=0 name=sn> n</a>
<a href="javascript:OnOff('ss')" onfocus=blur()><img src=<?=$dir?>/subject_<?=$ss?>.gif border=0 name=ss> s</a> 
<a href="javascript:OnOff('sc')" onfocus=blur()><img src=<?=$dir?>/content_<?=$sc?>.gif border=0 name=sc> c</a> 
<input type=text name=keyword value="<?=$keyword?>" style='width:100; height:18;' class=input><input type=submit value='seach' class=button>
</td>
</tr>
</table>