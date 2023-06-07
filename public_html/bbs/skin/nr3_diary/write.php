<script>
function AddTag(ch1,ch2){
        if(document.write.memo.createTextRange){
                document.write.memo.focus();
                document.selection.createRange().duplicate().text = ch1 + document.selection.createRange().duplicate().text + ch2;
                document.selection.createRange().select();
        }
}
</script>

<table align=center border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
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

<tr><td colspan=10><input type=hidden name=subject value="떠들기" <?=size(34)?> maxlength=200></td></tr>
<tr><td width=100% style='padding:0 0 0 0;'>
<table align=center cellpadding=0 cellspacing=0 border=0 width=100%><tr>

<td width=100% style='padding:0 0 0 0;'>
<table align=center cellpadding=0 cellspacing=0 border=0 width=100%>





<tr><td width=100% align=center style='padding:0 0 17 0;'>
<table cellpadding=0 cellspacing=0 border=0 width=100%><tr height=51>

<!-- # 선택 --><td width=100% align=center style='padding:1 0 0 0; border:solid 2px;border-color:#d7d7d7;color:#323232; background-color:#f2f2f2;' class=small>
<?=$category_kind?><?=$hide_notice_start?>&nbsp;&nbsp;&nbsp;<input type=checkbox name=notice <?=$notice?> value=1>&nbsp;<b>NOTICE</b><?=$hide_notice_end?>
<?=$hide_html_start?>&nbsp;&nbsp;&nbsp;<input type=checkbox name=use_html <?=$use_html?> value=1>&nbsp;<b>TAG</b><?=$hide_html_end?>
<?=$hide_secret_start?>&nbsp;&nbsp;&nbsp;<input type=checkbox name=is_secret <?=$secret?> value=1>&nbsp;<b>SECRET</b><?=$hide_secret_end?>
</td><td nowrap width=17></td>

<!-- # ok!! --><td nowrap width=97 align=center style='padding:1 0 0 0; border:solid 2px;border-color:#323232; background-color:#f2f2f2;'>
<input onfocus='this.blur()' type=submit value='WRITE OK !!' align=center class=button>
</td><td nowrap width=17></td>

<!-- # back --><td nowrap width=77 align=center style='padding:1 0 0 0; border:solid 2px;border-color:#d7d7d7;'>
<input onfocus='this.blur()' type=button value='BACK' align=center class=button onclick="history.go(-1)">
</td>
</tr></table></td></tr>










<!-- # 내용 --><tr><td width=100% valign=top style='padding:0 0 0 0;'>
<textarea name=memo class=input style="padding:0 0 0 3; border:solid 2px;border-color:#d7d7d7; width:100%;height:277;word-break:break-all;"><?=$memo?></textarea>
</td></tr>



<!-- # 파일업로드 --><?=$hide_pds_start?><tr><td height=17></td></tr>
<tr><td width=100% style='color:#000000;letter-spacing:0px;' class=tahoma><input type=file name=file1 class=input2 style="width:100%;height:21;"><?=$file_name1?></td></tr><tr><td height=5></td></tr>
<tr><td width=100% style='color:#000000;letter-spacing:0px;' class=tahoma><input type=file name=file2 class=input2 style="width:100%;height:21;"><?=$file_name2?></td></tr>
<?=$hide_pds_end?>










</table></td>
</tr></table></td></tr>

</table>