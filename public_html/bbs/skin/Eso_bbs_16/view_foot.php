<?
 /* 이전 다음글과 버튼 표시
 
  --- 이전/ 이후글 링크 ---
  <?=$a_prev?> : 이전글 링크
  <?=$a_next?> : 다음글 링크

  <?=$prev_face_image?> : 이전글 글쓴이의 얼굴 아이콘?;
  <?=$next_face_image?> : 다음글 글쓴이의 얼굴 아이콘?;


  <?=$hide_prev_start?> <?=$hide_prev_end?> : 이전글 나타나기/ 숨기기
  <?=$hide_next_start?> <?=$hide_next_end?> : 다음글 나타나기/ 숨기기

  기타 제목이나 글쓴이등은 위의 데이타에서 앞에 prev_ , next_ 를 덧 붙인것임;
  ex) 이전글 제목 : <?=$prev_subject?>

  <?=$a_write?> : 글쓰기 버튼
  <?=$a_list?> : 목록보기 버튼
  <?=$a_reply?> : 답글쓰기 버튼
  <?=$a_delete?> : 글삭제 버튼
  <?=$a_vote?> : 추천버튼
  <?=$a_modify?> : 글수정 버튼

 */
?>

<!-- 이전 / 다음글 출력 -->

<?=$hide_prev_start?>
<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr>
 <tr><td colspan=4 height=1 class=esoline></td></tr>
</tr>
<tr height=23>
  <td width=20 align=left>&nbsp;&nbsp;←</td>
  <td align=left style='word-break:break-all;'>&nbsp;<?=$a_prev?><?=$prev_subject?></a></td>
  <td width=75 align=right style='word-break:break-all;'><?=$prev_face_image?><?=$prev_name?>&nbsp;&nbsp;</td>
 
</tr>
</table>
<?=$hide_prev_end?>
<?=$hide_next_start?>
<table border=0 cellpadding=0 cellspacing=0 width=<?=$width?>>
<tr height=23>
  <td width=20 align=left>&nbsp;&nbsp;→</td>
  <td align=left style='word-break:break-all;'>&nbsp;<?=$a_next?><?=$next_subject?></a></td>
  <td width=75 align=right style='word-break:break-all;'><?=$next_face_image?><?=$next_name?>&nbsp;&nbsp;</td>
 
</tr>
</table>
<?=$hide_next_end?>
<!-- 버튼 관련 출력 -->

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
 <tr height=1>
 <tr><td colspan=5 height=1 class=esoline></td></tr></tr><tr height=4><td></td></tr><tr>
 <td class=v7>&nbsp;
    <?=$a_list?>list</a>&nbsp;
    <?=$a_write?>write</a>
 </td>
 <td align=right class=v7>

    <font title="답변"><?=$a_reply?> re </font></a>&nbsp;
    <font title="수정"><?=$a_modify?> edit </font></a>&nbsp;
    <font title="삭제"><?=$a_delete?> del </font></a>&nbsp;
 &nbsp;</td>
</tr>
</table>
<br><br>

