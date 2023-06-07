</td></tr></table>
</td></tr></table>
</td></tr></table>

<?
 if ($mode=="reply") $write_str="REPLY";
 elseif($mode=="modify") $write_str="MODIFY";
 else $write_str="ADD TO LIST";

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
?>

<SCRIPT LANGUAGE="JavaScript">
function changeinfo() { document.write.memo.value="";
document.write.memo.value=document.write.profile.value+"||"+document.write.profile1.checked+"||"+document.write.profile2.checked+"||"+document.write.profile3.checked+"||"+document.write.profile4.value+"||"+document.write.profile5.value+"||"+document.write.profile6.value+"||"+document.write.profile7.value+"||";}
</SCRIPT>

<table border=0 cellspacing=0 cellpadding=0> 
<tr><td> 
<form method=post name=write action=comment_ok.php> 
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
<input type=hidden name=memo value="<?=$c_memo?>">
</td><td align=center>

<br>
<table border=0 cellspacing=0 cellpadding=0 style="table-layout:fixed;word-break:break-all;" class="table_write_comment">
<tr><td>

<b>name</b>&nbsp;<?=$c_name?>
<?=$hide_c_password_start?>
&nbsp;<b>pass</b>&nbsp;<input type=password name=password maxlength=20 class=input style="width:60;">
<?=$hide_c_password_end?>

<script>
<!--
function showLink(name) { if(name.style.display != "none") { name.style.display = "none" }
else { for(i=1; i<2; i++){ document.getElementById("link"+i).style.display = "none"; } name.style.display = ""; } }
-->
</script>

<script>
<!--
function showMemo(name) { if(name.style.display != "none") { name.style.display = "none" }
else { for(i=1; i<2; i++){ document.getElementById("memo"+i).style.display = "none"; } name.style.display = ""; } }
-->
</script>

<br>

<b>option</b>&nbsp;<a onClick="showLink(link1)" href="javascript:void(0)" class="8">бр LINK</a>&nbsp;<a onClick="showMemo(memo1)" href="javascript:void(0)" class="8">бр MEMO</a>

<input type=checkbox name=profile1 class=check onchange="changeinfo();">
<span class="8">MORE</span>

<?=$hide_secret_start?>
<input type=checkbox name=profile2 class=check onchange="changeinfo();">
<span class="8">SECRET</span>
<?=$hide_secret_end?>

<input type=checkbox name=profile3 class=check onchange="changeinfo();">
<span class="8">DICE</span>
<? $dice = rand (1,6); ?>
<input type=hidden name=profile4 value=<?=$dice?> onchange="changeinfo();">

</td><tr><td>

<? $member[homepage] = preg_replace("/(http:\/\/)/i","",$member[homepage]); echo $memer[homepage]; ?>

<input type=hidden name=profile5 value="<?=$member[homepage]?>" onchange="changeinfo();">

<div id=link1 style="display:none; padding:0;"><b>link</b>&nbsp;http://<input type=text name=profile6 class=input style='width:280;' onchange="changeinfo();"></div>

</td><tr><td>

<div id=memo1 style="display:none; padding:0;"><b>memo</b>&nbsp;<input type=text name=profile7 class=input style='width:300;' onchange="changeinfo();"></div>

</td><tr><td>

<textarea name=profile class=input style="overflow:visible;width:100%;height:80;" onchange="changeinfo();"></textarea><br>

<input type=submit value=' write ' class="submit" style="width:100%;">

</td></tr></table>

<br><br>

</td>
</tr>
</form>
</table>
