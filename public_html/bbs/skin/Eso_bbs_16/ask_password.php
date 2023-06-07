<br><br><br><br>
<table border=0 width=250>
<tr height=0>
 <td>
 <form method=post name=delete action=<?=$target?>>
 <input type=hidden name=page value=<?=$page?>>
 <input type=hidden name=id value=<?=$id?>>
 <input type=hidden name=no value=<?=$no?>>
 <input type=hidden name=select_arrange value=<?=$select_arrange?>>
 <input type=hidden name=desc value=<?=$desc?>>
 <input type=hidden name=page_num value=<?=$page_num?>>
 <input type=hidden name=keyword value="<?=$keyword?>">
 <input type=hidden name=category value="<?=$category?>">
 <input type=hidden name=sn value="<?=$sn?>">
 <input type=hidden name=ss value="<?=$ss?>">
 <input type=hidden name=sc value="<?=$sc?>">
 <input type=hidden name=mode value="<?=$mode?>">
 <input type=hidden name=c_no value=<?=$c_no?>>
 </td>
</tr>
<tr>
 <td align=center><b><?=$title?></b></td>
</tr>
<tr>
 <td align=center class=v7>
  <?=$input_password?> 
  <br><br><input type=image src=<?=$dir?>/ok.gif border=0 onfocus=blur()>&nbsp;&nbsp;
  <?=$a_list?><img src=<?=$dir?>/list.gif border=0 onfocus=blur()></a>&nbsp;&nbsp;
  <a href=javascript:void(history.back())><img src=<?=$dir?>/cancel.gif border=0 onfocus=blur()></a>
 </td>
</tr>
</table>
</form>

