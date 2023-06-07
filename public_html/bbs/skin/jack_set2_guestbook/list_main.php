

<table align="center" cellpadding="0" cellspacing="0" width=<?=$width?> style="margin-top:40px;">
<tr>
<td height=30px><span class=info style="padding:8 10 8 10px;">
<font class=num>

NUMBER <?=$number?></font>
<font class=sub>
<? if($data[is_secret]&& $is_admin) { ?>
<img src="<?=$dir?>/ico_key.gif" align="absmiddle">&nbsp;<?=$name?> 
<? }elseif($data[is_secret]&& $data[ismember]==$member[no]) {?>
<img src="<?=$dir?>/ico_key.gif" align="absmiddle">&nbsp;<?=$name?>
<? }elseif(!$data[is_secret]) {?>
<?=$name?> 
<? }else { ?>
<img src="<?=$dir?>/ico_key.gif" align="absmiddle">
<?} ?>
</font>
</span>

<td class=num align=right>
<?=$a_reply?>RE&nbsp;&nbsp;</a>
<? if($data[homepage]){?><a href="<?=$data[homepage]?>" target="_blank" onfocus='this.blur()'>SITE</a>&nbsp;<? } else { ?><? } ?>
<?=$a_modify?>MOD&nbsp;&nbsp;</a>
<?=$a_delete?> DEL</a></font> 
<?=$hide_cart_start?>&nbsp;<input type=checkbox name=cart value="<?=$data[no]?>"><?=$hide_cart_end?>
</td>
</tr>


<tr>
<td width=100% valign=top colspan=2 class=notice style="padding:10px;">
<?
if($data[is_secret]&&!$is_admin&&$data[ismember]!=$member[no]) echo"<div align=center><img src='$dir/s1.gif' border=0></div>";
else echo $memo;
?></td>
</tr>
</table>



<?
 include "include/get_reply.php";
?>
