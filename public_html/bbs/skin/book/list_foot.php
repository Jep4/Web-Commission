<!-- 마무리 -->

</tr></table>
</td></tr></table>

<table border=0 cellpadding=0 cellspacing=0 width="100%">
</form><tr><td>
<!-- 검색 태그-->
<!-- 검색 시 이름 내용 제목 다 검사 -->
<form method=post name=search action=<?=$PHP_SELF?>>
<input type=hidden name=page value=<?=$page?>>
<input type=hidden name=id value=<?=$id?>>
<input type=hidden name=select_arrange value=<?=$select_arrange?>>
<input type=hidden name=desc value=<?=$desc?>>
<input type=hidden name=page_num value=<?=$page_num?>>
<input type=hidden name=selected><input type=hidden name=exec>
<input type=hidden name=sn value="on">
<input type=hidden name=ss value="on">
<input type=hidden name=sc value="on">
<input type=hidden name=category value="<?=$category?>">
<!-- 검색 창 -->
</td><td>

<table border=0 cellspacing=0 cellpadding=0 width="100%">
<tr><td height="50"></td></tr>
<tr><td height="50" align="center" valign="top">
<?=$a_prev_page?>PREV</a>&nbsp;<?=$print_page?>&nbsp;<?=$a_next_page?>NEXT</a>
</td>
</tr>
<tr><td height="50"></td></tr>
</table>

<table class="search"><tr>
<td align="center" valign="middle">
<input type=text name=keyword value="<?=$keyword?>" style="width:300px;" class="input2">
</td>
<td align="center" valign="middle" width="30">
<input type=submit class=submit value="검색">
</td>
</tr>
</table>
<tr><td height="50"></td></tr>
</td></tr></table>

</td></tr></table>
