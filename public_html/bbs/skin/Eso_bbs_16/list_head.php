<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
  <tr>
    <td colspan=4 align=left valign=bottom><?=$memo_on_sound?>
<?
if($setup[use_category])
{
?>
<? include "include/print_category.php"; ?>
<?}?>
     </td>
  </tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
  <tr>
    <td colspan=4 align=right valign=bottom class=v7 width=100%>
    <font title="가입"><?=$a_member_join?>*</font></a>
    <?=$a_member_memo?><span title="쪽지함"><?=$member_memo_icon?></span></a>
    <font title="정보수정"><?=$a_member_modify?>*</font></a></font>
    <font title="로그인"><?=$a_login?>*</font></a>
    <font title="로그아웃"><?=$a_logout?>*</font></a>
    <font title="관리자"><?=$a_setup?>*</font></a>
    </td> 
  </tr>
  <tr>
    <td height="2" colspan="6"> </td></tr>
</table>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?> style="border-collapse:collapse;">
  <tr><td class=esoline1 height="2" colspan="6"> </td></tr>
  
<?=$hide_cart_start?><col width=20></col><?=$hide_cart_end?>
<col width=50></col>
<?=$hide_category_start?><col width=<?=$cacaca?>></col><?=$hide_category_end?>
<col></col>
<col width=<?=$nanana?>></col>
<col width=75></col>
<col width=0></col>
  <tr height=0>
     <td colspan=5>
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
     </td>
  </tr>
  <tr>
     <?=$hide_cart_start?><td nowrap align="center" height="30" style=letter-spacing:2 bgcolor="#FAFAFA"><font class="com"><b>c</b></font></td><?=$hide_cart_end?>
     <td nowrap align="center" height="30" style=letter-spacing:2 bgcolor="#FAFAFA"><font class="com"><b>no</b></font></td>
     <?=$hide_category_start?><td nowrap align="center" height="30" class=rc style=letter-spacing:2 bgcolor="#FAFAFA"><font class="com"><b>category</b></font></td><?=$hide_category_end?>
     <td nowrap align="center" height="30" class=rc style=letter-spacing:2 bgcolor="#FAFAFA"><font class="com"><b>subject</b></font></td>
     <td nowrap align="center" height="30" class=rc style=letter-spacing:2 bgcolor="#FAFAFA"><font class="com"><b>name</b></font></td>
     <td nowrap align="center" height="30" class=rc style=letter-spacing:2 bgcolor="#FAFAFA"><font class="com"><b>date</b></font></td>
  </tr>
  <tr><td class=esoline height="2" colspan="6"> </td></tr>
  

