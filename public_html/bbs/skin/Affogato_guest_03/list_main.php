<table width=<?=$width?> border="0" cellpadding="0" cellspacing="0">
	<tr><td height="25"></td></tr>
	<tr><td height="1" class="line"></td></tr>
	<tr><td height="2"></td></tr>
	<tr>
		<td height="20">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="80%" height="20" style="padding:0 0 0 5px;" nowrap><b class="ms7"><i>NO <?=$number?>.</i>&nbsp;<span class="dotum8"><?=$name?></span></b>
				<? if($data[homepage]){?><a href="<?=$data[homepage]?>" target="_blank" onfocus='this.blur()'><span class="small6">HOME</span></a><? } else { ?><? } ?></td>
				<td width="180" align="right" style="padding-right:5px;" nowrap><font class="small5"><?=$a_reply?>REPLY</a> 
				<?=$a_modify?>&nbsp;&nbsp;MODIFY</a> 
				<?=$a_delete?>&nbsp;&nbsp;DELETE</a></font></td>
				<?=$hide_cart_start?><td width="16"><input type="checkbox" name="cart" value="<?=$data[no]?>"></td><?=$hide_cart_end?>
			</tr>
		</table></td>
	</tr>
	<tr>
		<td style="padding-left:5px;"><b class="date_tahoma6">&nbsp;<i><?=$date=date("F,  d,  Y",$data[reg_date])?></i>&nbsp;&nbsp;&nbsp;&nbsp;<?=$date=date("A h:i:s",$data[reg_date])?>&nbsp;&nbsp;</b></td>
	</tr>
	<tr>
		<td valign="top" style="padding:5px;">
		<?
			if($data[is_secret] && !$is_admin && $data[ismember] != $member[no]) echo "<br><center><b class='Georgia7'><i>You Do Not View Message!</i></b></center><br>";
			else echo $memo;
		?>
		</td>
	</tr>
</table>
<table width=<?=$width?> border="0" cellpadding="0" cellspacing="0">
<?
 include "include/get_reply.php";
?>