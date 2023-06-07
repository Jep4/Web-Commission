
<table border=0 cellspacing=0 cellpadding=0 width=100% style="margin-top:30px;margin-bottom:10px;">
<tr>
<td  align=left  style='word-break:break-all;padding:0 0 0 10px;' >
<span style='word-break:break-all;padding:8 10 9 10px;' class=title>
<font class=sub ><b><?=$data[subject]?></b>
</span>
</td>
<td class=sub style="padding:5px;" align=right width=150px style="text-align:right;">
<?=$data[name]?><?=$a_modify?>&nbsp;수정</a><?=$a_delete?>&nbsp;삭제</a>
<?=$hide_cart_start?>&nbsp;<input type=checkbox name=cart value="<?=$data[no]?>"><?=$hide_cart_end?></font>
</td>

</tr>

<tr><td style='word-break:break-all;padding:10px;' class=contents colspan=2 >
<? if($data['is_secret'] && $is_admin || $data['ismember']==$member['no']) { ?>
<?=$memo?>
<? }elseif(!$data['is_secret']) {?>
<?=$memo?>
<? }else { ?>
<img src=<?=$dir?>/s1.gif border=0>
<?} ?>
</td>
</tr>
</table>