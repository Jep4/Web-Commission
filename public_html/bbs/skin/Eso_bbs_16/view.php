<?
$_esolink="<a href=$data[homepage] target=_blank onfocus=blur()>";
?>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
  <tr><td class=esoline height="1" colspan="6"> </td></tr>
  <tr><td height="1" colspan="6"> </td></tr>
  <tr><td class=esoline height="1" colspan="6"> </td></tr>
  <tr height=4><td></td></tr>
  <tr height=20>
    <td></td>
    <td align=left style='padding-left:5'><?=$face_image?><?=$name?>&nbsp;&nbsp;
<?=$hide_homepage_start?><?=$_esolink?><img src=<?=$dir?>/home.gif border="0" alt="home"></a><?=$hide_homepage_end?></td>
    <td align=right class=date width=180 style='padding-right:5'><?=$date=date("a.g:i, l",$data[reg_date])?>&nbsp;( <?=$hit?>hit )</td></tr>
  <tr height=1>
    <td colspan=3></td>
  </tr>
<?=$hide_download1_start?>
  <tr height=20>
   <td></td>
   <td class=num style='padding-left:5'><?=$a_file_link1?><?=$file_name1?> (<?=$file_size1?>)</a>, Download : <?=$file_download1?></td>
  </tr>
<?=$hide_download1_end?>

<?=$hide_download2_start?>
  <tr height=20>
   <td></td>
   <td class=num style='padding-left:5'><?=$a_file_link2?><?=$file_name2?> (<?=$file_size2?>)</a>, Download : <?=$file_download2?></td>
  </tr>
<?=$hide_download2_end?>

<?=$hide_sitelink1_start?>
  <tr height=20>
   <td></td>
   <td class=num style='padding-left:5'><?=$sitelink1?></td>
  </tr>
  <tr height=1>
    <td colspan=3></td>
  </tr>
<?=$hide_sitelink1_end?>

<?=$hide_sitelink2_start?>
  <tr height=20>
    <td></td>
    <td class=num style='padding-left:5'><?=$sitelink2?></td>
  </tr>
  <tr height=1>
    <td colspan=3></td>
  </tr>
<?=$hide_sitelink2_end?>

  <tr height=20>
    <td></td>
  <td class=sub style='padding-left:5'><?=$subject?></td>
  </tr>
  <tr height=1>
    <td height=1  colspan=4 class=esoline></td>
  </tr>
  <tr height=4>
    <td></td>
  </tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
  <tr>
     <td style='padding:8;'><p align=justify><?=$upload_image1?></p>
     <p align=justify><?=$upload_image2?></p><p align=justify><?=$memo?></p>
     </td>
  </tr>
</table>

<?=$hide_comment_start?>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
  <tr height=1>
    <td height=1 class=esoline></td>
  </tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<?=$hide_comment_end?>