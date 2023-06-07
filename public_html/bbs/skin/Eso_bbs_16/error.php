<form>
<br><br><br><br>
<table border=0 width=250>
<tr>
 <td align=center>
 <br><?echo $message;?><br><br>
 <?
   if(!$url) {
 ?>

 <center><a href=javascript:void(history.back())><img src=<?=$dir?>/cancel.gif border=0 onfocus=blur()></a></center>

 <?
   }
   
   else {
 ?>

 <div align=center><a href=javascript:void(history.back())><img src=<?=$dir?>/cancel.gif border=0 onfocus=blur()></font></a>

 <? } ?>
  
 <br><br>
 </td>
</tr>
</form>
</table>
<br><br>
