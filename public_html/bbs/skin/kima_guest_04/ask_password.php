<div align=center>
<br><br><br>

<table border=0 width=250>
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
<tr>
   <td align=center><br><?=$title?><br></td>
</tr>
<tr>
  <td align=center class=thm7><b>Password</b> <input type=password name=password style="width:100;height:18;" class=input></td>
</tr>
<tr height=30>
  <td align=center colspan=2 >
  <input onfocus='this.blur()' type=submit value=' confirm ' align=center class=submit>
  <input onfocus='this.blur()' type=button value=' back '  align=center class=submit onclick="history.go(-1)">
  </td>
</tr>
</form>
</table>