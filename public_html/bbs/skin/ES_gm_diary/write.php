<br>

<table align=center border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>

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

<tr>
<td>

<table align=center border=0 cellspacing=0 cellpadding=0 width=90%>
<?=$hide_start?>
<tr>
  <td width=60 nowrap align=right style="padding-right:5;"><font style='font-family:verdana;font-size:7pt;'>Name</font></td>
  <td align=left><input type=text name=name value="<?=$name?>" class=input style="width:100%;height:18;">
  </td>
</tr>

<tr>
  <td width=60 nowrap align=right style="padding-right:5;"><font style='font-family:verdana;font-size:7pt;'>Pass</font></td>
  <td align=left><input type=password name=password class=input style="width:100%;height:18;">
  </td>
</tr>

<tr>
  <td width=60 nowrap align=right style="padding-right:5;"><font style='font-family:verdana;font-size:7pt;'>E-mail</font></td>
  <td align=left><input type=text name=email value="<?=$email?>" class=input style="width:100%;height:18;">
  </td>
</tr>

<tr>
  <td width=60 nowrap align=right style="padding-right:5;"><font style='font-family:verdana;font-size:7pt;'>Homepage</font></td>
  <td align=left><input type=text name=homepage value="<?=$homepage?>" class=input style="width:100%;height:18;">
  </td>
</tr>

<?=$hide_end?>

<tr>
  <td width=60 nowrap align=right style="padding-right:5;"><font style='font-family:verdana;font-size:7pt;'></font></td>
  <td align=left><?=$hide_html_start?> <input type=checkbox name=use_html <?=$use_html?> value=1>Html<?=$hide_html_end?></tr>

<tr>
  <td width=60 nowrap align=right style="padding-right:5;"><font style='font-family:verdana;font-size:7pt;'>Subject</font></td>
  <td align=left><input type=text name=subject value="<?=$subject?>" class=input style="width:100%;height:18;">
  </td>
</tr>

<tr>
  <td width=60 nowrap align=right style="padding-right:5;"><font style='font-family:verdana;font-size:7pt;'>Contents</font></td>
  <td align=left valign=top><textarea name=memo class=input style="width:100%;height:200;"><?=$memo?></textarea>
  </td>
</tr>

<?=$hide_sitelink1_start?>
<tr>
  <td width=60 nowrap align=right style="padding-right:5;"><font style='font-family:verdana;font-size:7pt;'>Link # 1</font></td>
  <td align=left><input type=text name=sitelink1 value="<?=$sitelink1?>" class=input style="width:100%;height:18;">
  </td>
</tr>
<?=$hide_sitelink1_end?>

<?=$hide_sitelink2_start?>
<tr>
  <td width=60 nowrap align=right style="padding-right:5;"><font style='font-family:verdana;font-size:7pt;'>Link # 2</font></td>
  <td align=left><input type=text name=sitelink2 value="<?=$sitelink2?>" class=input style="width:100%;height:18;">
  </td>
</tr>
<?=$hide_sitelink2_end?>

<?=$hide_pds_start?>
<tr>
  <td width=60 nowrap>&nbsp;</td>
  <td aling=left height=21 style="padding-top:3;"><font style='font-family:verdana;font-size:7pt;'>Upload size : <?=$upload_limit?></font></td>
</tr>

<tr>
  <td width=60 nowrap align=right valign=top style="padding-right:5;"><font style='font-family:verdana;font-size:7pt;'>File # 1</font></td>
  <td align=left><input type=file name=file1 class=input style="width:100%;height:18;"><?=$file_name1?>
  </td>
</tr>

<tr>
  <td width=60 nowrap align=right valign=top style="padding-right:5;"><font style='font-family:verdana;font-size:7pt;'>File # 2</font></td>
  <td align=left><input type=file name=file2 class=input style="width:100%;height:18;"><?=$file_name2?>
  </td>
</tr>
<?=$hide_pds_end?>

<tr><td height=5 colspan=2></td></tr>

<tr>
<td colspan=2 align=right>
 <input onfocus='this.blur()' type=submit value=' WRITE ' align=center class=button style='font-family:verdana;font-size:7pt;'>&nbsp;
<input onfocus='this.blur()' type=button value=' BACK ' align=center class=button style='font-family:verdana;font-size:7pt;' onclick="history.go(-1)">
</td>
</tr>

</table>

</td>
</tr>
</table>

<br>