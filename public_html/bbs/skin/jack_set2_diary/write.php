

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

<table align=center border=0 cellspacing=0 cellpadding=0 width=100%>
<?=$hide_start?>
<tr>
  <td width=50% align=left style="padding-bottom:5px;padding-right:2px;"><input type=text name=name value="<?=$name?>" class=input2 style="width:100%;height:25;" placeholder="아이디">
  </td>
  <td width=50% align=left style="padding-bottom:5px;"><input type=password name=password class=input2 style="width:100%;height:25px;" placeholder="비밀번호">
  </td>
</tr>

<tr>
  <td width=100% align=left style="padding-bottom:5px;" colspan=2 ><input type=text name=homepage value="http://<?=$homepage?>" class=input2 style="width:100%;height:25;">
  </td>
</tr>

<?=$hide_end?>

<tr>
  <td width=100% align=left class=basic colspan=2 style="padding-bottom:5px;"  ><?=$category_kind?>
<?=$hide_notice_start?> <input type=checkbox name=notice <?=$notice?> value=1>notice<?=$hide_notice_end?>
<?=$hide_html_start?> <input type=checkbox name=use_html <?=$use_html?> value=1>html<?=$hide_html_end?> 
<?=$hide_secret_start?><input type=checkbox name=is_secret <?=$secret?> value=1>secret</td><?=$hide_secret_end?>
</tr>

<tr>
  <td width=100% align=left  style="padding-bottom:5px;" colspan=2 ><input type=text name=subject value="<?=$subject?>" class=input2 style="width:100%;height:25;" placeholder="제목">
  </td>
</tr>

<tr>
  <td width=100% align=left valign=top colspan=2 ><textarea name=memo class=input style="width:100%;height:200;"><?=$memo?></textarea>
  </td>
</tr>

<?=$hide_sitelink1_start?>
<tr>
  <td width=100% align=left  style="padding-bottom:5px;" colspan=2 ><input type=text name=sitelink1 value="<?=$sitelink1?>" class=input2 style="width:100%;height:25;">
  </td>
</tr>
<?=$hide_sitelink1_end?>

<?=$hide_sitelink2_start?>
<tr>
  <td width=100% align=left style="padding-bottom:5px;"  colspan=2 ><input type=text name=sitelink2 value="<?=$sitelink2?>" class=input2 style="width:100%;height:25;">
  </td>
</tr>
<?=$hide_sitelink2_end?>

<?=$hide_pds_start?>
<tr>
  <td nowrap colspan=2 >&nbsp;</td>
  <td width=100% aling=left height=25  style="padding-bottom:5px;"  class=ver7 colspan=2 >upload size : <?=$upload_limit?></td>
</tr>

<tr>
  <td width=100%  style="padding-bottom:5px;" align=left colspan=2 ><input type=file name=file1 class=input2 style="width:100%;height:25;"><?=$file_name1?>
  </td>
</tr>

<tr>
  <td width=100%  style="padding-bottom:5px;" align=left colspan=2 ><input type=file name=file2 class=input2 style="width:100%;height:25;"><?=$file_name2?>
  </td>
</tr>
<?=$hide_pds_end?>

<tr><td height=5 colspan=3></td></tr>

<tr>
<td width=100% colspan=3 align=right>
 <input onfocus='this.blur()' type=submit value='쓰기' align=center class=button>&nbsp;
<input onfocus='this.blur()' type=button value='뒤로가기' align=center class=button onclick="history.go(-1)">
</td>
</tr>

</table>

</td>
</tr>
</table>

<br>