<table border=0 cellpadding=5 cellspacing=0 width="100%">
<tr><td>
<b><?=$comment_name?></b>&nbsp;<span class="8"><?=$c_reg_date="<span title='".date("Y년 m월 d일 H시 i분 s초",$c_data[reg_date])."'>".date("ymd",$c_data[reg_date])."</span>";?></span>&nbsp;<?=$a_del?>x</a>
</td>
<tr>
<td colspan="2">
<?=nl2br($c_memo)?>
</td>
</tr>
</table>
