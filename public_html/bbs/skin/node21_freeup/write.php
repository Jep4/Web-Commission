<SCRIPT LANGUAGE="JavaScript">
<!--
function formresize(mode) {
        if (mode == 0) {
                document.write.memo.cols  = 80;
                document.write.memo.rows  = 20; }
        if (mode == 1) {
                document.write.memo.cols += 5; }
        if (mode == 2) {
                document.write.memo.rows += 3; }
}
// -->
</SCRIPT>

<?
 if ($mode=="reply") $write_str="REPLY";
 elseif($mode=="modify") $write_str="MODIFY";
 else $write_str="ADD TO LIST";

$nod=array();
$nod=explode("||",$data[memo]);

$node=$nod[0];
$node1=$nod[1];
?>

<SCRIPT LANGUAGE="JavaScript">
function changeinfo() { document.write.memo.value="";
document.write.memo.value=document.write.node.checked+"||"+document.write.node1.value+"||";}
</SCRIPT>

<table border=0 cellspacing=0 cellpadding=0>
<tr><td>
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
<input type=hidden name=name value="Guest">
<input type=hidden name=subject value="subject">
<input type=hidden name=memo value="<?=$memo?><?=$total?>">
</td></tr></table>

<table border=0 cellspacing=0 cellpadding=0 width="100%">
<tr><td align=center>

<?=$hide_pds_start?>
<input type=file name=file1 maxlength=500 class=input style='width:150;'><?=$file_name1?>
<?=$hide_pds_end?>
<?=$hide_start?>&nbsp;<input type=password name=password maxlength=20 class=input style="width:60;"><?=$hide_end?>
&nbsp;<input type=submit value=" ok " class=submit>
<input type=hidden name=node1 value="hidden" onchange="changeinfo();">
<input type=checkbox name=node onchange="changeinfo();">
<span class="8">MORE</span>
<?=$hide_secret_start?>
<input type="checkbox" name="is_secret" <?=$secret?> value="1">
<span class="8">SECRET</span>
<?=$hide_secret_end?>
<?=$hide_notice_start?>
<input type=checkbox name=notice <?=$notice?> value=1>
<span class="8">NOTICE</span>
<?=$hide_notice_end?>

</td></tr></table> 
