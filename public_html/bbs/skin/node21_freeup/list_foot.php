<!-- ������ �κ��Դϴ� -->

<table border=0 cellspacing=0 cellpadding=5 width="<?=$width?>">
<tr><td align="center">
<span class="8"><?=$a_list?>LIST&nbsp;</a><?=$a_prev_page?>PREV&nbsp;</a><?=$print_page?><?=$a_next_page?>&nbsp;NEXT</a></span>
</td></tr></table>

<table border=0 cellspacing=0 cellpadding=0 width="<?=$width?>">
</form><tr><td>
<!-- �˻��ױ� �κ��Դϴ�. ---------------------->
<!-- �˻��� �̸� ���� ���� �� �˻��ϰ� �ҽ��� ���� �Ǿ��ֽ��ϴ� -->
<form method=post name=search action=<?=$PHP_SELF?>>
<input type=hidden name=page value=<?=$page?>>
<input type=hidden name=id value=<?=$id?>>
<input type=hidden name=select_arrange value=<?=$select_arrange?>>
<input type=hidden name=desc value=<?=$desc?>>
<input type=hidden name=page_num value=<?=$page_num?>>
<input type=hidden name=selected><input type=hidden name=exec>
<input type=hidden name=sn value="on">
<input type=hidden name=ss value="on">
<input type=hidden name=sc value="on">
<input type=hidden name=category value="<?=$category?>">
<!-- �˻�â �����°� �Դϴ� -->
</td><tr><td align="right">
<input type=text name=keyword value="<?=$keyword?>" style="width:150;" class="input">
</td></tr></table>
