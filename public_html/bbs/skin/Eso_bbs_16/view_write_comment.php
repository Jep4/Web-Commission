<?
 /* ������ ��� ���� ǥ��

  -- ������ ��� ����
  <?=$hide_comment_start?> <?=$hide_comment_end?> : ������ ��� ���� �����ֱ�/ �����
  <?=$hide_c_password_start?> <?=$hide_c_password_end?> : ������ ��۽� ��й�ȣ �Է� �����ֱ�/ �����;;

  <?=$c_name?> : �ڸ�Ʈ�� �̸� �Է��ϴ� ��;;

  ** view.php ���� �Ʒ��ʿ� ������ ����� �����ϴ� <table>�±� ���ۺκ��� �ֽ��ϴ�.
     �׸��� ������ ����� ������ view_comment_view.php ���Ͽ��� ����� �մϴ�.

 */
?>
<!-- ������ �亯�� ���� -->
</table>
<?
$c_name="<input type=text name=name size=12 maxlength=10 class=input value=\"$zetyx[name]\">";
?>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr height=5>
 <td colspan=7>
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
 </td>
</tr>
<tr>
 <td align=center colspan=7>
	<table border=0 width=100% align=center>
   <?=$hide_c_password_start?> <col width="50"></col> <?=$hide_c_password_end?>
   <col width=""></col>
       <col width="70"></col>
      
	
	<tr> <?=$hide_c_password_start?>
 	 <td class=v7 align=right>name&nbsp; <br><font class=sub><?=$c_name?></font><br>
	 
    
    pass&nbsp;<br><input type=password name=password size=12 maxlength=10 class=input>
     <?=$hide_c_password_end?>
 
	 <td align=left height="100%"><textarea name=memo cols=45 rows=5 class=textarea style=width:100%;></textarea></td>
         <td height="100%"><input type="submit" class="submit" value=" comment " style=width:100%;height:100%;></td>
	</tr>
	</table>

 </td>
</tr><tr height=5><td></td></tr>
</form>
</table>