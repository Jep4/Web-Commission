<br><br><br>

<form>
<table align=center border=0 cellspacing=0 cellpadding=0 width=250>
<tr><td height=1 background=<?=$dir?>/line.gif></td></tr>
<tr><td height=20></td></tr>

<tr><td align=center><?echo $message;?></td></tr>

<tr><td height=20></td></tr>
<tr><td height=1 background=<?=$dir?>/line.gif></td></tr>
<tr><td height=10></td></tr>
<tr>
<td align=center>

<?
  if(!$url)
  {
?>

  <input type=button value=' Back ' onclick=history.go(-1) class=button style='font-family:verdana;font-size:7pt;'>

<?
  }
  else
  {
?>

  <input type=button value=' Back ' onclick=history.go(-1) class=button style='font-family:verdana;font-size:7pt;'>

<?
  }
?>

</td>
</tr>
</form>
</table>


<br><br><br>