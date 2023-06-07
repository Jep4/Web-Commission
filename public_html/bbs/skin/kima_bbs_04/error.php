<div align=center>
<form>
<br><br><br>
<table border=0 width=250>
<tr>
    <td align=center height=30>
      <br>
      <?echo $message;?>
      <br><br>
<?
  if(!$url)
  {
?>

  <center><input onfocus='this.blur()' type=button value=' back '  align=center class=button onclick="history.go(-1)">

<?
  }
  else
  {
  }
?>
   <br><br>
    </td>
</tr>
</form>
</table>