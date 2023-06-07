<!-- HTML ½ÃÀÛ -->

<script>
<!--
function showOpen(name) { if(name.style.display != "none") { name.style.display = "none" }
else { for(i=1; i<2; i++){ document.getElementById("open"+i).style.display = "none"; } name.style.display = ""; } }
-->
</script>

<table border=0 cellspacing=0 cellpadding=5 width="<?=$width?>">
<?=$memo_on_sound?><tr><td align="center">

<table border=0 cellspacing=0 cellpadding=5 width="100%">
<tr><td align="center">
<span class="8">
<b><a onClick="showOpen(open1)" href="javascript:void(0)" class="8">WRITE</a>&nbsp;|&nbsp;</b><?=$a_prev_page?>PREV&nbsp;</a><?=$print_page?><?=$a_next_page?>&nbsp;NEXT</a><b>&nbsp;|&nbsp;</b>
    <?=$a_list?>LIST</a>
    <?=$a_login?>LOGIN</a>
    <?=$a_member_join?>JOIN</a>
    <?=$a_member_modify?>MY INFO</a>
    <?=$a_member_memo?>MEMO</a>
    <?=$a_logout?>LOGOUT</a>
    <?=$a_setup?>CONFIG</a>
</span>
</td></tr></table>

<div id=open1 style="display:none; padding:0;">
<? include "include/write.php" ?>
</div>

</td></tr></table>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr><td>
<form method=post name=list action=list_all.php>
<input type=hidden name=page value=<?=$page?>>
<input type=hidden name=id value=<?=$id?>>
<input type=hidden name=select_arrange value=<?=$select_arrange?>>
<input type=hidden name=desc value=<?=$desc?>>
<input type=hidden name=page_num value=<?=$page_num?>>
<input type=hidden name=selected>
<input type=hidden name=exec>
<input type=hidden name=keyword value="<?=$keyword?>">
<input type=hidden name=sn value="<?=$sn?>">
<input type=hidden name=ss value="<?=$ss?>">
<input type=hidden name=sc value="<?=$sc?>">
</td></tr></table>