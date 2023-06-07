<div align=center><br>
<table border=0 cellspacing=0 cellpadding=0 width=350>
  <tr>
    <td width=1>

   <form method=post name=write action=write_ok.php enctype=multipart/form-data>
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
  </tr>
  <tr>
    <td valign=top>
<table border=0 cellsapcing=0 cellpadding=0 width=100% height=100% align=center>
  <tr>
    <td colspan=2>
    <input type=hidden name=subject value=" No Subject (guest) " <?=size(30)?> maxlength=200 class=input>
    </td>
  </tr>
      
  <?=$hide_start?>
   <tr>
    <td width=60 align=right class=thm7><b>name</b>&nbsp;</td>
    <td><input type=text name=name value="<?=$name?>" style="width:120;height:18px;" class=input>
    &nbsp;<font class=thm7><b>pass</b></font>&nbsp;<input type=password name=password style="width:120;height:18px;" class=input>
    </td>
  </tr>
  <tr>
    <td width=60 align=right class=thm7><b>e-mail</b>&nbsp;</td>
    <td><input type=text name=email value="<?=$email?>" style="width:300;height:18px;" class=input>
    </td>
  </tr>
  <tr>
    <td width=60 align=right class=thm7><b>homepage</b>&nbsp;</td>
    <td><input type=text name=homepage value="<?=$homepage?>" style="width:300;height:18px;" class=input>
    </td>
  </tr>
       
  <?=$hide_end?>
  <tr>
    <td colspan=2>

<table border=0 cellspacing=0 cellpadding=0 width=100%>
  <tr>
    <td class=thm7>
<?=$hide_notice_start?><input type=checkbox name=notice <?=$notice?> value=1>notice<?=$hide_notice_end?>
<?=$hide_html_start?><input type=checkbox name=use_html <?=$use_html?> value=1>html<?=$hide_html_end?>
    <input type=checkbox name=reply_mail <?=$reply_mail?> value=1>reply mail</td>
  </tr>
</table>
        
    </td>
  </tr>
  <tr>
    <td colspan=2>

<table border=0 cellspacing=0 cellpadding=1 width=100%>
  <tr>
    <td>
    <textarea name=memo class=input style="width:350;height:80px;overflow:auto;"><?=$memo?></textarea>
    </td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td align=right height=18 valign=bottom colspan=2><input type=submit value=' write ' class=submit>
    </td>
  </tr>
</table>

    </td>
  </tr>
  </form>

</table>
</div>