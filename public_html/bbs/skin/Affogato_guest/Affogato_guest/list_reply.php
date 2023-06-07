<table width=<?=$width?> border="0" cellspacing="0" cellpadding="0" class="line_dash">
	<tr>
		<td height="20" style="padding-top:3px;" class="thm6">&nbsp;<b style="font-family:trebuchet MS; font-size:6pt;"><i>+ THANK  YOU  FOR  YOUR  MESSAGE!</i></b></td>
	</tr>	
</table>
<table width=<?=$width?> border="0" cellspacing="0" cellpadding="0">	
	<tr>
		<td style="padding:10px 10px 5px 10px;">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td align="right" class="dotum_8pt"><b class="thm6">Reply.</b> <b><?=$name?></b> <?=$a_modify?>+</a> <?=$a_delete?>-</a></td>
			</tr>
			<tr>
				<td align="right" valign="top" style="padding-top:3px;">
				<?
					if( $reply_data[is_secret] && !$is_admin && $data[ismember] != $member[no] ) echo "<b class=thm6>THIS - REPLY - IS - SECRET!</b>";
					else echo $memo;
				?>
				</td>
			</tr>
		</table></td>
	</tr>
	<tr><td height="1" class="line"></td></tr>
</table>