

<table align="center" cellpadding="0" cellspacing="0" width=<?=$width?>>


<tr>
<td valign=top width=100% class=notice style="padding:10px;border-top:0px; margin-top:-1px;"  colspan=2>
<?  if($reply_data[is_secret]&&!$is_admin&&$data[ismember]!=$member[no]) echo"<div align=center><img src='$dir/s1.gif' border=0></div>";else echo $memo; ?>
</td>
</tr>

<tr>
<td class=num>
<?=$a_modify?>MOD</a>
<?=$a_delete?>&nbsp;&nbsp;DEL</a></font> 
</td>


<td height=30px align=right><span class=info2 style="padding:8 10 8 10px;">
<font class=num>REPLY</font>
<font class=sub>
<? if($reply_data[is_secret]&& $is_admin|| $data[ismember]==$member[no]) { ?>
<img src="<?=$dir?>/ico_key.gif" align="absmiddle">&nbsp;<?=$name?> 
<? }elseif($reply_data[is_secret]&& $reply_data[ismember]==$member[no]) {?>
<img src="<?=$dir?>/ico_key.gif" align="absmiddle">&nbsp;<?=$name?> 
<? }elseif(!$reply_data[is_secret]) {?>
<?=$name?>
<? }else { ?>
&nbsp;<img src="<?=$dir?>/ico_key.gif" align="absmiddle">&nbsp; 
<?} ?></font>
</span>
</td>
</tr>

</table>
