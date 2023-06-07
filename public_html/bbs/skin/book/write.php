<SCRIPT LANGUAGE="JavaScript">
<!--
function formresize(mode) {
        if (mode == 0) { document.write.memo.cols  = 80;
		         document.write.memo.rows  = 20; }
        if (mode == 1) { document.write.memo.cols += 5; }
        if (mode == 2) { document.write.memo.rows += 3; } }
// -->
</SCRIPT>
<?
 if ($mode=="reply") $write_str="REPLY";
 elseif($mode=="modify") $write_str="MODIFY";
 else $write_str="ADD TO LIST";

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
<SCRIPT LANGUAGE="JavaScript">
function changeinfo() { document.write.memo.value="";
document.write.memo.value=document.write.profile.value+"||"+document.write.profile1.value+"||"+document.write.profile2.value+"||"+document.write.profile3.value+"||"+document.write.profile4.value+"||"+document.write.profile5.value+"||"+document.write.profile6.value+"||"+document.write.profile7.value+"||"+document.write.profile8.value+"||"+document.write.profile9.value+"||";}
</SCRIPT>

<table border=0 cellspacing=0 cellpadding=0 width="<?=$width?>">
<tr>
<td>

<form method=post name=write action=write_ok.php onsubmit="return check_submit();" enctype=multipart/form-data>
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
<input type=hidden name=memo value="<?=$memo?>">

</td>
</tr>
<td align="center">

<table border=0 cellspacing=0 cellpadding=0 class="text_width">
<tr>
<td>
</td>
</tr>
</table>

<br>

<table border=0 cellspacing=0 cellpadding=0>
<tr>
<td align="right" width="120">
</td>
<td class="text_width">
<b>[ <?=$title?> ]</b>
</td>
</tr>
</table>

<br>

<table border=0 cellspacing=3 cellpadding=3>
<tr>
<td align="right" width="120">
<b>옵션</b>&nbsp;
</td>
<td class="text_width">
<span class="8">
<?=$hide_html_start?><input type=checkbox name=use_html <?=$use_html?> value=1>태그<?=$hide_html_end?>
<?=$hide_secret_start?><input type=checkbox name=is_secret <?=$secret?> value=1>비밀글<?=$hide_secret_end?>
<?=$hide_notice_start?><input type=checkbox name=notice <?=$notice?> value=1>공지<?=$hide_notice_end?>
<?=$hide_start?>이름&nbsp;<input type=text name=name value="<?=$name?>" style="width:60;" class=input>비번&nbsp;<input type=password name=password style="width:60;" class=input><?=$hide_end?>
</span>
</td>
<tr>
<td align="right" width="120">
<b>장르</b>&nbsp;
</td>
<td class="text_width">
<input type=text name=profile value="<?=$profile?>" style="width:100%;" class=input onchange="changeinfo();">
</td>
<tr>
<td align="right" width="120"><b>CP</b>&nbsp;
</td>
<td class="text_width">
<span class="8">
<input type=text name=profile6 value="<?=$profile6?>" style="width:100%;" class=input onchange="changeinfo();">
</span>
</td>
</tr>
</table>

<br>

<table border=0 cellspacing=3 cellpadding=3 style="table-layout:fixed;word-break:break-all;">
<tr>
<td align="right" width="120">
<b>타이틀</b>&nbsp;</td>
<td class="text_width">
<input type=text name=subject value="<?=$subject?>" style="width:100%;" class=input>
</td>
<tr>
<td align="right" width="120">
<b></b>&nbsp;
</td>
<td class="text_width">
</td>
<tr>
<td align="right" width="120">
<b>카테고리</b>&nbsp;
</td><td class="text_width">
<?=$category_kind?>
</td>
</tr>
<tr>
<td align="right" width="120">
<b>행사</b>&nbsp;</td>
<td class="text_width">
<input type=text name=profile1 value="<?=$profile1?>" style="width:100%;" class=input onchange="changeinfo();">
</td>
<tr>
<td align="right" width="120">
<b>발행일</b>&nbsp;</td>
<td class="text_width">
<input type=text name=profile2 value="<?=$profile2?>" style="width:100%;" class=input onchange="changeinfo();">
</td>
<tr>
<td align="right" width="120">
<b>판형</b>&nbsp;</td>
<td class="text_width">
<input type=text name=profile3 value="<?=$profile3?>" style="width:100%;" class=input onchange="changeinfo();">
</td>
<tr>
<td align="right" width="120">
<b>페이지</b>&nbsp;</td>
<td class="text_width">
<input type=text name=profile4 value="<?=$profile4?>" style="width:100%;" class=input onchange="changeinfo();">
</td>
<tr>
<td align="right" width="120"><b>가격</b>&nbsp;</td>
<td class="text_width">
<input type=text name=profile5 value="<?=$profile5?>" style="width:100%; " class="input" onchange="changeinfo();">
</td>
                <tr>
<td align="right" width="120"><b>코멘트</b>&nbsp;
</td>
                    <td class="text_width">
<textarea name=profile7 style="overflow:visible;width:100%;height:80;" class="input" onchange="changeinfo();" style="height:100;"><?=$profile7?></textarea><tr>
<td align="right" width="120"><b>null</b>&nbsp;
</td>
<td class="text_width">
<input type=text name=profile8 value="<?=$profile8?>" style="width:100%;" class=input onchange="changeinfo();">
</td>
<tr>
<td align="right" width="120"><b>null</b>&nbsp;
</td>
<td class="text_width">
<input type=text name=profile9 value="<?=$profile9?>" style="width:100%;" class=input onchange="changeinfo();">
</td>
<?=$hide_pds_start?>
</td>
<tr>
<td align="right" width="120">
</td>
<td class="text_width">
<br>
<b>[ 이미지 ]</b>
</td>
<tr>
<td align="right" width="120">
<b>표지</b>&nbsp;
</td>
<td class="text_width">
<input type=file name=file1 maxlength=255 style="width:100%;" class="input"><?=$file_name1?>
</td>
<tr>
<td align="right" width="120">
<b>null</b>&nbsp;
</td>
<td class="text_width">
<input type=file name=file2 maxlength=255 style="width:100%;" class="input"><?=$file_name2?>
<?=$hide_pds_end?>
<? if($hide_sitelink1_start | $hide_sitelink2_start) { ?><? } else { ?>
</td>
<tr>
<td align="right" width="120"></td><td class="text_width">
<br>
<b>[ 이미지 ]</b>
<? } ?>
<?=$hide_sitelink1_start?>
</td>
<tr>
<td align="right" width="120"><b>본문 공개</b>&nbsp;
</td>
<td class="text_width">
<input type=text name=sitelink1 value="<?=$sitelink1?>" maxlength=255 style="width:100%;" class="input">
<?=$hide_sitelink1_end?>
<?=$hide_sitelink2_start?>
</td>
<tr>
<td align="right" width="120"><b>샘플</b>&nbsp;
</td>
<td class="text_width">
<input type=text name=sitelink2 value="<?=$sitelink2?>" maxlength=255 style="width:100%;" class="input">
<?=$hide_sitelink2_end?>
</td>
</tr>
</table>

</td>
</table>

<br>

<input type=submit value=" write " class=submit>
<input type=button value=" back " onclick=history.go(-1) class=submit>

<br><br>
