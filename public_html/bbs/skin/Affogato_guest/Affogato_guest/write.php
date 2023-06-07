<table width=<?=$width?> align="center" cellpadding="0" cellspacing="0">
	<tr>
	<td width="1">
	<form method="post" name="write" action="write_ok.php" enctype="multipart/form-data">
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
	<input type=hidden name=subject value="Guest" class=input>
	</td></tr>

	<tr>
		<td valign="top">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="20%" align="left" style="padding-bottom:3px;" class="thm6"><b>
				<?=$hide_notice_start?><input type="checkbox" name="notice" <?=$notice?> value="1">NOTICE<?=$hide_notice_end?>
				<?=$hide_html_start?><input type="checkbox" name="use_html" <?=$use_html?> value="1">HTML<?=$hide_html_end?>
				<?=$hide_secret_start?><? if($member[no]) { ?><input type="checkbox" name="is_secret" <?=$secret?> value="1">SECRET</b><? } ?><?=$hide_secret_end?>
				<td width="50%" align="right">
				<?=$hide_start?><font class="thm6"><b>NAME&nbsp;<input type="text" name="name" value="<?=$name?>" style="width:15%;height:18px;" class="input_2">&nbsp;
				PASS&nbsp;<input type="password" name="password" style="width:15%;height:18px;" class="input_2">&nbsp;
				HOME&nbsp;<input type="text" name="homepage" value="<?=$homepage?>" style="width:32%;height:18px;" class="input_2"></font></b><?=$hide_end?></td>
			</tr>
			<tr>
				<td colspan="2"><textarea name="memo" style="width:100%;height:70px;" class="input"><?=$memo?></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center" class="thm6" style="pading-bottom:5px;"><input type="submit" <? if($browser){ ?>class="button"<? } ?> value=" WRITE " accesskey="s"></td>
			</tr>
		</table>
		<br></td>
	</tr>
</table>