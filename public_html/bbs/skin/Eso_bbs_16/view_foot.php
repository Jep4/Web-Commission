<?
 /* ���� �����۰� ��ư ǥ��
 
  --- ����/ ���ı� ��ũ ---
  <?=$a_prev?> : ������ ��ũ
  <?=$a_next?> : ������ ��ũ

  <?=$prev_face_image?> : ������ �۾����� �� ������?;
  <?=$next_face_image?> : ������ �۾����� �� ������?;


  <?=$hide_prev_start?> <?=$hide_prev_end?> : ������ ��Ÿ����/ �����
  <?=$hide_next_start?> <?=$hide_next_end?> : ������ ��Ÿ����/ �����

  ��Ÿ �����̳� �۾��̵��� ���� ����Ÿ���� �տ� prev_ , next_ �� �� ���ΰ���;
  ex) ������ ���� : <?=$prev_subject?>

  <?=$a_write?> : �۾��� ��ư
  <?=$a_list?> : ��Ϻ��� ��ư
  <?=$a_reply?> : ��۾��� ��ư
  <?=$a_delete?> : �ۻ��� ��ư
  <?=$a_vote?> : ��õ��ư
  <?=$a_modify?> : �ۼ��� ��ư

 */
?>

<!-- ���� / ������ ��� -->

<?=$hide_prev_start?>
<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr>
 <tr><td colspan=4 height=1 class=esoline></td></tr>
</tr>
<tr height=23>
  <td width=20 align=left>&nbsp;&nbsp;��</td>
  <td align=left style='word-break:break-all;'>&nbsp;<?=$a_prev?><?=$prev_subject?></a></td>
  <td width=75 align=right style='word-break:break-all;'><?=$prev_face_image?><?=$prev_name?>&nbsp;&nbsp;</td>
 
</tr>
</table>
<?=$hide_prev_end?>
<?=$hide_next_start?>
<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr height=23>
  <td width=20 align=left>&nbsp;&nbsp;��</td>
  <td align=left style='word-break:break-all;'>&nbsp;<?=$a_next?><?=$next_subject?></a></td>
  <td width=75 align=right style='word-break:break-all;'><?=$next_face_image?><?=$next_name?>&nbsp;&nbsp;</td>
 
</tr>
</table>
<?=$hide_next_end?>
<!-- ��ư ���� ��� -->

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
 <tr height=1>
 <tr><td colspan=5 height=1 class=esoline></td></tr></tr><tr height=4><td></td></tr><tr>
 <td class=v7>&nbsp;
    <?=$a_list?>list</a>&nbsp;
    <?=$a_write?>write</a>
 </td>
 <td align=right class=v7>

    <font title="�亯"><?=$a_reply?> re </font></a>&nbsp;
    <font title="����"><?=$a_modify?> edit </font></a>&nbsp;
    <font title="����"><?=$a_delete?> del </font></a>&nbsp;
 &nbsp;</td>
</tr>
</table>
<br><br>

