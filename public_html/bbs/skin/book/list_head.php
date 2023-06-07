<!-- ½ÃÀÛ -->

<table border=0 cellspacing=0 cellpadding=0 width="100%">
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
</td><tr><td align="center">

<table border=0 cellspacing=10 cellpadding=0 width="100%">
<tr>
<td  height="25" align="center">
<? if($setup[use_category]) { ?>
<? include "include/print_category.php"; ?>
<? } ?>
</td>
</tr>
</table>

<table width="100%">
<tr><td height="50"></td></tr>
<tr>
<td height="25" align="center">
<?=$a_prev_page?>PREV</a>&nbsp;<?=$print_page?>&nbsp;<?=$a_next_page?>NEXT</a>
</td>
</tr>
<tr><td height="50"></td></tr>
</table>

<table border=0 cellspacing=10 cellpadding=0 width="100%">
<tr>
