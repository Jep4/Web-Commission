<?
  /* ������ ����� ����ϴ� �κ��Դϴ�.
   view.php��Ų���Ͽ� ������ ����� �����ϴ� <table>���� �±װ� ���۵Ǿ� �ֽ��ϴ�.
   �׸���view_foot.php ���Ͽ� </table>�±װ� ������ ��� ���� ���� ���� �ֽ��ϴ�

  <?=$comment_name?> : �۾���
  <?=$c_memo?> : ����
  <?=$c_reg_date?> : ���� �� ����;;
  <?=$a_del?> : �ڸ�Ʈ ���� ��ư��ũ
  <?=$c_face_image?> : ����� ������;;
 */
?>

<? 
	$name= str_replace(">",">",$name);
$c_date="<span title='".date("a.g:i:s", $c_data[reg_date])."'>".date("m-d", $c_data[reg_date])."</span>"; 
	if(($is_admin||$member[level]<=$setup[grant_delete]||$data[ismember]==$member[no]||!$data[ismember])&&!$data[child]) $g_delete="<a href='delete.php?$href$sort&no=$data[no]' title='�����ϱ�'>".$icon."</a>"; 
	else $g_delete="$icon";
?>

<tr onMouseOver=this.style.backgroundColor="" onMouseOut=this.style.backgroundColor="">
 <td style='padding:8'><font class="com"><?=$c_date?>&nbsp;&nbsp;</font>
	<?=$c_face_image?><?=$comment_name?>&nbsp;&nbsp;</b><font class=date title="����"><?=$a_del?>x</a></font>
	
<br>
<?=nl2br($c_memo)?></td></tr>
<tr height=1>
<tr><td colspan=5 height=1 class=esoline></td></tr>
</tr>