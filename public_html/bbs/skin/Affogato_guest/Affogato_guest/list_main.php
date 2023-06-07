<table width=<?=$width?> border="0" cellpadding="0" cellspacing="0">
	<tr><td height="12"></td></tr>
	<tr>
		<td><b class="thm6">No. <?=$number?></b></td>
	</tr>
	<tr>
		<td valign="top" class="input_main">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="line_dash">
			<tr>
				<td height="22" class="thm6" nowrap>
				<span style="font-family:trebuchet MS; font-size:7pt;"><i><?=$date=date("l, y.m.d - Ah:i",$data[reg_date])?></i> //</span> 
				<b>From. <font class="dotum_8pt"><?=$name?></font></b> 
				<? if($data[homepage]){?><a href="<?=$data[homepage]?>" target="_blank" onfocus='this.blur()'><img src="<?=$dir?>/homepage.gif" align="absmiddle" border="0"></a><? } else { ?><? } ?></td>
				<td width="100%"></td>
				<td width="150" align="right" nowrap><font class="dotum_8pt"><?=$a_reply?>  r</a> 
				<?=$a_modify?>  +</a> 
				<?=$a_delete?>  -</a></font></td>
				<?=$hide_cart_start?><td><input type="checkbox" name="cart" value="<?=$data[no]?>"></td><?=$hide_cart_end?>
			</tr>
		</table>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td valign="top" style="padding:10px 0 10px 0;">
				<?
					if($data[is_secret] && !$is_admin && $data[ismember] != $member[no]) echo "<center><b class='thm6'>THIS - MESSAGE - IS - SECRET!</b></center>";
					else echo $memo;
				?>
				</td>
			</tr>
		</table></td>
	</tr>
</table>

<?
 include "include/get_reply.php";
?>