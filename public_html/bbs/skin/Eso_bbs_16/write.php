<?
  /*
  write.php �� �۾��� ���Դϴ�.
  �Ʒ� ������ ����մϴ�.

  ȸ���϶� ��Ÿ���� �ʴ� �κ��� ó���ϴ� �κ��Դϴ�. �����ָ� ȸ���϶��� ��Ÿ���� �ʽ��ϴ�.
  <?=$hide_start?> : ȸ���϶� �۾������ ��Ÿ���� �ʰ� �ϴ� �κ��Դϴ�;; ȸ���϶��� �ڵ� �ּ�(<!--)�� ���ϴ�.
  <?=$hide_end?>  : ȸ���϶� ������ �ʰ� �մϴ�. <?=$hide_start?>�� �����ϰ� <?=$hide_end?> �� �����ָ� �˴ϴ�.

  <?=$hide_sitelink1_start?>, <?=$hide_sitelink1_end?> : ����Ʈ��ũ 1���� ����ϴ��� ���ϴ��� ǥ��
  <?=$hide_sitelink2_start?>, <?=$hide_sitelink2_end?> : ����Ʈ��ũ 2���� ����ϴ��� ���ϴ��� ǥ��
  <?=$hide_pds_start?>, <?=$hide_pds_end?> : �ڷ���� ����ϴ��� ���ϴ��� ǥ��
  <?=$hide_html_start?>, <?=$hide_html_end?> : HTML üũ�ڽ� ǥ��


  <?=$title?> : �ű�, ����, ����϶��� ���� ǥ��

  �Ʒ������� �ش����� �ִ°��� �״�� ���νø� �˴ϴ�.
  <?=$name?> : ���� �̸��Դϴ�.
  <?=$subject?> : ���� �����Դϴ�.
  <?=$email?> : ���� �����Դϴ�.
  <?=$homepage?> : Ȩ�������Դϴ�.
  <?=$memo?> : ���� �����Դϴ�.
  <?=$sitelink1?> : ����Ʈ ��ũ 1���Դϴ�
  <?=$sitelink2?> : ����Ʈ ��ũ 2���Դϴ�
  <?=$file_name1?> : ���ε�� ���� 1���Դϴ�.
  <?=$file_name2?> : ���ε�� ���� 2���Դϴ�.
  <?=$category_kind?> : ī�װ� ����Ʈ �ڽ�
  <?=$use_html?> : HTML üũ ǥ��;; �� htmlüũ������(����) checked �� �� ����;;
  <?=$reply_mail?> : �亯���� üũ ǥ��;;
  <?=$secret?> : ��б� ǥ��
  <?=$upload_limit?> : ���ε� �뷮
  */
?>

<SCRIPT LANGUAGE="JavaScript">
<!--
function formresize(mode) {
        if (mode == 0) {
                document.write.memo.cols  = 80;
                document.write.memo.rows  = 20; }
        if (mode == 1) {
                document.write.memo.cols += 5; }
        if (mode == 2) {
                document.write.memo.rows += 3; }
}
// -->
</SCRIPT>


<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>

<col width=60></col>
<col width=7></col>
<col></col>
<tr height=0>
 <td colspan=3>
 <!-- ���±� �κ�;; �������� �ʴ� ���� �����ϴ� -->
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
 <!----------------------------------------------->
 </td>
</tr>

 
<?=$hide_start?>
<tr>
 <td align=right class=v7>name</td>
 <td></td>
 <td><input type=text name=name value="<?=$name?>" maxlength=20 class=input style=width:30%;> </td>
</tr>

<tr>
 <td align=right class=v7>pass</td>
 <td></td>
 <td><input type=password name=password maxlength=20 class=input style=width:30%;> </td>
</tr>

<tr>
 <td align=right class=v7>mail</td>
 <td></td>
 <td><input type=text name=email value="<?=$email?>" maxlength=200 class=input style=width:50%;> </td>
</tr>

<tr>
 <td align=right class=v7>homepage</td>
 <td></td>
 <td><input type=text name=homepage value="<?=$homepage?>" maxlength=200 class=input style=width:50%;> </td>
</tr>
<?=$hide_end?>

<tr>
 <td align=right></td>
 <td></td>
 <td style='padding:5' class=v7>
  <?=$hide_notice_start?> <input type=checkbox name=notice <?=$notice?> value=1>notice<?=$hide_notice_end?>
  <?=$hide_html_start?> <input type=checkbox name=use_html <?=$use_html?> value=1>html<?=$hide_html_end?>
  <input type=checkbox name=reply_mail <?=$reply_mail?> value=1>R-mail
  <?=$hide_secret_start?> <input type=checkbox name=is_secret <?=$secret?> value=1>secret<?=$hide_secret_end?>
 </td>
</tr>

<?=$hide_category_start?>
<tr>
 <td align=right class=v7>category</td>
 <td></td>
 <td><?=$category_kind?></td>
 </tr>
<?=$hide_category_end?>

<tr>
 <td align=right class=v7>subject</td>
 <td></td>
 <td> <input type=text name=subject value="<?=$subject?>" <?=size(54)?> maxlength=200 class=input style=width:90%;> </td>
</tr>

<tr>
 <td align=right class=v7>content</td>
 <td></td>
 <td><textarea name=memo <?=size(32)?> rows=15 class=textarea><?=$memo?></textarea></td>
</tr>

<?=$hide_sitelink1_start?>
<tr>
 <td align=right class=v7>link1</td>
 <td></td>
 <td> <input type=text name=sitelink1 value="<?=$sitelink1?>" <?=size(54)?> maxlength=200 class=input style=width:90%;> </td>
</tr>
<?=$hide_sitelink1_end?>

<?=$hide_sitelink2_start?>
<tr>
 <td align=right class=v7>link2</td>
 <td></td>
 <td> <input type=text name=sitelink2 value="<?=$sitelink2?>" <?=size(54)?> maxlength=200 class=input style=width:90%;> </td>
</tr>
<?=$hide_sitelink2_end?>

<?=$hide_pds_start?>
<tr>
 <td></td>
 <td></td>
 <td align=right></td>
</tr>

<tr>
 <td align=right class=v7>upload1</td>
 <td></td>
 <td> <input type=file name=file1 <?=size(42)?> maxlength=255 class=input style=width:90%;> <?=$file_name1?></td>
</tr>

<tr>
 <td align=right class=v7>upload2</td>
 <td></td>
 <td> <input type=file name=file2 <?=size(42)?> maxlength=255 class=input style=width:90%;> <?=$file_name2?></td>
</tr>

<?=$hide_pds_end?>
<tr align=center>
 <td colspan=3 class=v7 style='padding:10;'> <input type=submit value=" write " class=submit name="submit" onfocus=blur()></a>
&nbsp;<input type=button value=" back " onClick=history.go(-1) class=submit onfocus=blur()>
 </td>
</tr><br>
</table>
