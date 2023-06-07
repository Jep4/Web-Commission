
<?
$pro=array();
$pro=explode("||",$c_memo);

$profile=$pro[0];
$profile1=$pro[1];
$profile2=$pro[2];
$profile3=$pro[3];
$profile4=$pro[4];
$profile5=$pro[5];
$profile6=$pro[6];
$profile7=$pro[7];
$profile8=$pro[8];
?>

<div style="padding:5 0 5 0;">

<table border=0 cellspacing=0 cellpadding=0 width="100%" style="word-break:break-all;">
<tr><td align=left valign=top> 

<?=$c_face_image?>
<b><?=$comment_name?></b><? if($data[ip]==$c_data[ip]) echo "&nbsp;¡Ú"; ?>

<? if($pro[5]) { ?><a href=http://<?=$pro[5]= preg_replace("/(http:\/\/)/i","",$pro[5])?> target=_blank>HOME</a> <? } ?>
<? if($pro[6]) { ?><a href=http://<?=$profile6?> target=_blank>LINK</a><? } ?>

<? if($pro[2]=="true") echo "<font style=color:red;>(!)</font>"; ?>

<? if($pro[3]=="true") {
if($pro[4]=="1") echo "<img src=$dir/die/1.gif>";
if($pro[4]=="2") echo "<img src=$dir/die/2.gif>";
if($pro[4]=="3") echo "<img src=$dir/die/3.gif>";
if($pro[4]=="4") echo "<img src=$dir/die/4.gif>";
if($pro[4]=="5") echo "<img src=$dir/die/5.gif>";
if($pro[4]=="6") echo "<img src=$dir/die/6.gif>"; } ?>

<?=$c_reg_date=date("y/m/d h:i:s D",$c_data[reg_date])?>
<?=$a_del?>&nbsp;x</a>

<br>

<? if($pro[7]) { ?><span class=8>memo. <?=$profile7?></span><br> <? } ?>

<? if($pro[2]=="true"&&!$is_admin&&$data[ismember]!=$member[no]) { ?>
<span class="secret">SECRET</span>
<? } else if($pro[1]=="true") { ?>
<a onclick="this.nextSibling.style.display= (this.nextSibling.style.display=='none')?'block':'none';"  href="javascript:void(0)"><span class="more">¡å MORE</span></a><span style="width:100%; display:none; float:left;"><?=nl2br($profile)?></span>
<? } else { ?>
<?=nl2br($profile)?>
<? } ?>

</td>
</tr>
</table>

</div>