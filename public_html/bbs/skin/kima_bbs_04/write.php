<table border=0 cellspacing=1 cellpadding=0 width=450>
<tr>
  <td colspan=2></td>
</tr>
<tr height=1><td colspan=2><img src=images/t.gif height=1></td></tr>
<tr>
 <td width=1>

<form method=post name=write action=write_ok.php onsubmit="return check_submit();" enctype=multipart/form-data>
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

 </td>
 <Td>
 
<table border=0 width=100% cellspacing=1 cellpadding=0>

<?=$hide_start?>
<tr height=25>
 <td colspan=2>
  <table border=0 cellpadding=0 cellspacing=0>
  <tr>
  <td align=right width=80 class=thm7><b>name</b>&nbsp;</td>
  <td>
  <input type=text name=name value="<?=$name?>" style="width:140;height:18px;" class=input>
  </td>
  <td align=right width=80 class=thm7><b>password</b>&nbsp;</td>
  <td>
  <input type=password name=password style="width:140;height:18px;" class=input>
  </td>
</tr>
</table>
</td></tr>
</tr>
<tr><td height=1 colspan=2><img src=images/t.gif height=1></td></tr>
<tr height=25>
  <td align=right class=thm7><b>e-mail</b>&nbsp;</td>
  <td> <input type=text name=email value="<?=$email?>" style="width:360;height:18px;" class=input> </td>
</tr>
<tr><td height=1 colspan=2><img src=images/t.gif height=1></td></tr>
<tr height=25>
  <td align=right class=thm7><b>homepage</b>&nbsp;</td>
  <td> <input type=text name=homepage value="<?=$homepage?>" style="width:360;height:18px;" class=input> </td>
</tr>
<tr><td height=1 colspan=2><img src=images/t.gif height=1></td></tr>
<?=$hide_end?>

<tr height=25>
  <td align=right class=thm7 width=80><b>option</b>&nbsp;</td>
  <td> 
  <table border=0 cellpadding=0 cellspacing=0>
  <tr>
  <td class=thm7><?=$category_kind?> 
  <?=$hide_notice_start?><input type=checkbox name=notice <?=$notice?> value=1>notice<?=$hide_notice_end?> 
  <?=$hide_html_start?><input type=checkbox name=use_html <?=$use_html?> value=1>html<?=$hide_html_end?> 
  <input type=checkbox name=reply_mail <?=$reply_mail?> value=1>reply mail 
  <?=$hide_secret_start?><input type=checkbox name=is_secret <?=$secret?> value=1>secret<?=$hide_secret_end?></td>
  </tr>
  </table>
  </td>
</tr>
<tr><td height=1 colspan=2><img src=images/t.gif height=1></td></tr>
<tr>
  <td align=right class=thm7><b>subject</b>&nbsp;</td>
  <td> <input type=text name=subject value="<?=$subject?>" style="width:360;height:18px;" class=input> </td>
</tr>
<tr><td height=1 colspan=2><img src=images/t.gif height=1></td></tr>
<tr>
  <td align=right class=thm7><b>contens</b>&nbsp;</td>
  <td valign=top>
  <textarea name=memo style="width:360;height:260;overflow:auto;" class=input><?=$memo?></textarea>
  </td>
</tr>

<tr><td height=1 colspan=2><img src=images/t.gif height=1></td></tr>
<?=$hide_sitelink1_start?>
<tr height=25>
  <td align=right class=thm7><b>link££1</b>&nbsp;</td>
  <td> <input type=text name=sitelink1 value="<?=$sitelink1?>" style="width:360;height:18px;" class=input> </td>
</tr>
<?=$hide_sitelink1_end?>

<tr><td height=1 colspan=2><img src=images/t.gif height=1></td></tr>
<?=$hide_sitelink2_start?>
<tr height=25>
  <td align=right class=thm7><b>link££2</b>&nbsp;</td>
  <td> <input type=text name=sitelink2 value="<?=$sitelink2?>" style="width:360;height:18px;" class=input> </td>
</tr>
<?=$hide_sitelink2_end?>
<tr><td height=1 colspan=2><img src=images/t.gif height=1></td></tr>

<?=$hide_pds_start?>
<tr height=25>
  <td>&nbsp;</td>
  <td class=thm7>maximum file size : <?=$upload_limit?></td>
</tr>
<tr><td height=1 colspan=2><img src=images/t.gif height=1></td></tr>
<tr height=25>
  <td align=right class=thm7><b>file££1</b>&nbsp;</td>
  <td> <input type=file name=file1 style="width:360;height:18px;" class=input> <?=$file_name1?></td>
</tr>
<tr><td height=1 colspan=2><img src=images/t.gif height=1></td></tr>
<tr height=25>
  <td align=right class=thm7><b>file££2</b>&nbsp;</td>
  <td> <input type=file name=file2 style="width:360;height:18px;" class=input> <?=$file_name2?></td>
</tr>

<?=$hide_pds_end?>
<tr height=1><td colspan=2><img src=images/t.gif height=1></td></tr>
</table>

<table border=0 cellspacing=1 cellpadding=1 width=450>
<tr height=30>
  <td align=right valign=bottom>
  <input onfocus='this.blur()' type=submit value=' write ' align=center class=button>
  <input onfocus='this.blur()' type=button value=' back ' align=center class=button onclick="history.go(-1)">
  </td>
</tr>
<tr height=50><td><img src=images/t.gif height=1></td></tr>
</table>

</td>
</tr>
</table>