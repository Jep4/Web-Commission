<table width=<?=$width?> border="0" cellspacing="0" cellpadding="0">	
	<tr>
		<td style="padding:3px 8px 5px 8px;" class="table_bg">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td valign="top" style="padding-top:3px;">
				<?
					if( $reply_data[is_secret] && !$is_admin && $data[ismember] != $member[no] ) echo "<br><center><b class='Georgia7'><i>You Do Not View Reply!</i></b></center><br>";
					else echo $memo;
				?>
				</td>
			</tr>
			<tr>
				<td><b class="ms7">Reply. </b> <b class="dotum8"><?=$name?></b>
				<font class="small5"><?=$a_modify?>&nbsp;&nbsp;MODIFY</a>
				<?=$a_delete?>&nbsp;&nbsp;DELETE</a></td>
			</tr>
		</table></td>
	</tr>
	<tr><td height="3"></td></tr>
	<tr><td height="1" class="line"></td></tr>
</table>