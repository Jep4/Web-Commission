
<br>
<table border=0 cellspacing=0 width="100%"> 
<tr><td> 
<form method=post name=write action=comment_ok.php> 
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
</td><tr><td align="center">

<table border=0 cellspacing=0 cellpadding=0 width="100%">
<tr><td colspan=2>
<textarea name=memo class=input style="overflow:visible;width:100%;height:50;" onchange="changeinfo();"></textarea>
</td><tr><td>
<b>name&nbsp;<?=$c_name?></b>
<?=$hide_c_password_start?>
<b>pass</b>&nbsp;<input type=password name=password maxlength=20 class=input style="width:60;">
<?=$hide_c_password_end?>
</td><td align=right>
<input type=submit value=" write " class=submit>
</td></tr></table>

</td></tr></form></table><br>
