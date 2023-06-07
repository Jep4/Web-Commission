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

  <br>
  <center><a href=# onclick=history.back() onfocus=blur()>back</a>

<?
  }
  else
  {
?>

  <div align=center><input type=button class=submit value=" back " onclick=history.back()>

<?
  }
?>
   <br><br>
    </td>
</tr>
</form>
</table>
<br><br>