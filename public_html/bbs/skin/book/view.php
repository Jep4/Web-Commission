<!-- 글보기 출력시 view article화면 나오는 곳 -->
<?
$pro=array();
$pro=explode("||",$data[memo]);
$profile=$pro[0];
$profile1=$pro[1];
$profile2=$pro[2];
$profile3=$pro[3];
$profile4=$pro[4];
$profile5=$pro[5];
$profile6=$pro[6];
$profile7=$pro[7];
$profile8=$pro[8];
$profile9=$pro[9];
?>

<table border=0 cellspacing=0 cellpadding=0 width="100%">
<tr>
<td align="center">

<table border=0 cellspacing=0 cellpadding=10 width="100%" style="table-layout:fixed;word-break:break-all;">
<tr>
<td align="center">
<?=$a_modify?>mod</a>&nbsp;<?=$a_delete?>del</a>
</td>
</tr>
</table>

</td>
<tr>
<td align="center" valign="top">

	<table class="goodsbox" width="100%" align="center" bgcolor="white">
	<tr>
		<td>
			<table width="100%" height="10">
			<tr>
				<td>
				</td>
			</tr>
			</table>
			<table width="100%">
			<tr>
				<td width="270" align="center" valign="top">
					<? $no_poster="<img src='$dir/secret.png' class='face'>
					 "?> <? if($data[file_name1]) { ?>
					<? if($setup[use_pds]) { ?>
					<img src="<?=$data[file_name1]?>" class="face"> <? } else { ?>
					<?=$no_poster?>
					<? } ?>
					<? } else { ?>
					<?=$no_poster?>
					<? } ?>
				</td>
				<td width="10" align="center" valign="middle">
				</td>
				<td align="left" valign="top">
					<p>

						<b><font color="#999999"><?=$category_name?>
						</font></b>
					</p>
					<p>
						<? if($data[is_secret]&&!$is_admin&&$data[ismember]!=$member[no]) { ?>
						<span class="secret">!</span>&nbsp;<span class="char_name"><?=$data[subject]?>
						</span>
						<? } else { ?>
						<? if($data[is_secret]) { ?>
						<span class="secret">!</span>&nbsp;<? } ?>
						<span class="char_name"><?=$subject?>
						</span><? } ?>
					</p>
					<p>
						<?=$profile?>
						 - <?=$profile6?>
					</p>
					<table width="100%">
					<tr>
						<td width="90" valign="top">
							<font color="888888">◆ </font><b>행사</b>
						</td>
						<td valign="top">
							<p>
								<?=$profile1?>
							</p>
						</td>
					</tr>
					<tr>
						<td width="90" height="8">
						</td>
						<td height="8">
						</td>
					</tr>
					<tr>
						<td width="90" valign="top">
							<font color="888888">◆ </font><b>발행일</b>
						</td>
						<td valign="top">
							<?=$profile2?>
						</td>
					</tr>
					<tr>
						<td width="90" height="8">
						</td>
						<td height="8">
						</td>
					</tr>
					<tr>
						<td width="90" valign="top">
							<font color="888888">◆ </font><b>판형</b>
						</td>
						<td valign="top">
							<?=$profile3?>
						</td>
					</tr>
					<tr>
						<td width="90" height="8">
						</td>
						<td height="8">
						</td>
					</tr>
					<tr>
						<td width="90" valign="top">
							<font color="888888">◆ </font><b>페이지</b>
						</td>
						<td valign="top">
							<?=$profile4?>
							 p
						</td>
					</tr>
					<tr>
						<td width="90" height="8">
						</td>
						<td height="8">
						</td>
					</tr>
					<tr>
						<td width="90" valign="top">
							<font color="888888">◆ </font><b>가격</b>
						</td>
						<td valign="top">
							<?=$profile5?>
							 원
						</td>
					</tr>
					</table>
					<br>
					<br>
					<?=$profile7?>
					<? if($data[sitelink1]) {?>
					<div align="right">
						<br>
						<br>
						<br>
						<a href="<?=$data[sitelink1]?>" target="_blank">
						<table width="300" height="40" cellpadding="0" cellspacing="0" bgcolor="#444444" align="right">
						<tr>
							<td>
								<p align="center">
									<font color="white"><b>본문 열람</b></font>
								</p>
							</td>
						</tr>
						</table>
						</a>
					</div>
					<? } ?>
					<? if($data[sitelink2]) {?>
					<div align="right">
						<br>
						<br>
						<br>
						<a href="<?=$data[sitelink2]?>" target="_blank">
						<table width="300" height="40" cellpadding="0" cellspacing="0" bgcolor="#444444" align="right">
						<tr>
							<td>
								<p align="center">
									<font color="white"><b>sample</b></font>
								</p>
							</td>
						</tr>
						</table>
						</a>
					</div>
					<? } ?>
				</td>
				<td width="10" align="center" valign="middle">
				</td>
			</tr>
			</table>
			<table width="100%" height="10">
			<tr>
				<td>
				</td>
			</tr>
			</table>
			<td>
			</td>
		</tr>
		</table>

</td>
</tr>
</table>
