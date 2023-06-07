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

<td colspan="<?=$maxline?>">

<table border=0 cellspacing=0 cellpadding=0 width="100%">
<tr><td>
<b>[ notice ]</b>
<? if($data[is_secret]&&!$is_admin&&$data[ismember]!=$member[no]) { ?>
<span class="secret">!</span>&nbsp;<?=$data[subject]?>
<? } else { ?><? if($data[is_secret]) { ?><span class="secret">!</span>&nbsp;<? } ?><?=$subject?><? } ?>
<?if($comment_num) echo "&nbsp;+"; ?>
<? $comment_num="".$data[total_comment]."";
if($data[total_comment]==0) { $comment_num="";}
echo "$comment_num"; ?>
</td><td align="right">
<?=$hide_cart_start?>
<input type=checkbox name=cart value="<?=$data[no]?>">
<?=$hide_cart_end?>
</td></tr></table>

</td><tr>