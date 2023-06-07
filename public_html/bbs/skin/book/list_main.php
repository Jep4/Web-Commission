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
if($setup[use_alllist]) $view_file="zboard.php"; else $view_file="view.php";
$view_src="$view_file?id=$id&no=".$data[no]."&category=".$category."&page=".$page."&divpage=".$divpage;
if ($count<$maxline) {
    $count++;
?>
<td valign="top" class="main_table" style="table-layout:fixed;word-break:break-all;">
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

<?=$hide_cart_start?><input type=checkbox name=cart value="<?=$data[no]?>">&nbsp;<?=$hide_cart_end?>
<font color="#999999">[<?=$category_name?>]</font>
<? if($data[is_secret]&&!$is_admin&&$data[ismember]!=$member[no]) { ?>
						<span class="secret">!</span>&nbsp;<span class="char_name"><?=$data[subject]?>
						</span>
						<? } else { ?><? if($data[is_secret]) { ?>
						<span class="secret">!</span>&nbsp;<? } ?>
						<span class="char_name"><?=$subject?>
						</span> <? if($data[sitelink2]) {?><a href="<?=$data[sitelink2]?>" target="_blank">(sample)</a><? } ?>&nbsp;
						<? } ?>
					</p>
                        <p>
<?=$profile1?> (<?=$profile2?>) ¹ßÇà<br><?=$profile?> -  <?=$profile6?>
<br><br>
<?=$profile3?> / <?=$profile4?>p / <?=$profile5?>¿ø
<br><br>
<?=$profile7?>
<br><br>
<? if($data[sitelink1]) {?><a href="<?=$data[sitelink1]?>" target="_blank"><span style="background-color:rgb(153,153,153);"><font color="white">¡¡link¡¡</font></span></a><? } ?>&nbsp;
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
	<? } if ($count==$maxline) { $count=0; ?>
	<tr>
		<? } ?>