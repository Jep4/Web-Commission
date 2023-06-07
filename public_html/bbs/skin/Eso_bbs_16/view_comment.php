<?
  /* 간단한 답글을 출력하는 부분입니다.
   view.php스킨파일에 간단한 답글을 시작하는 <table>시작 태그가 시작되어 있습니다.
   그리고view_foot.php 파일에 </table>태그가 간단한 답글 쓰기 폼과 같이 있습니다

  <?=$comment_name?> : 글쓴이
  <?=$c_memo?> : 내용
  <?=$c_reg_date?> : 글을 쓴 날자;;
  <?=$a_del?> : 코멘트 삭제 버튼링크
  <?=$c_face_image?> : 멤버용 아이콘;;
 */
?>

<? 
	$name= str_replace(">",">",$name);
$c_date="<span title='".date("a.g:i:s", $c_data[reg_date])."'>".date("m-d", $c_data[reg_date])."</span>"; 
	if(($is_admin||$member[level]<=$setup[grant_delete]||$data[ismember]==$member[no]||!$data[ismember])&&!$data[child]) $g_delete="<a href='delete.php?$href$sort&no=$data[no]' title='삭제하기'>".$icon."</a>"; 
	else $g_delete="$icon";
?>

<tr onMouseOver=this.style.backgroundColor="" onMouseOut=this.style.backgroundColor="">
 <td style='padding:8'><font class="com"><?=$c_date?>&nbsp;&nbsp;</font>
	<?=$c_face_image?><?=$comment_name?>&nbsp;&nbsp;</b><font class=date title="삭제"><?=$a_del?>x</a></font>
	
<br>
<?=nl2br($c_memo)?></td></tr>
<tr height=1>
<tr><td colspan=5 height=1 class=esoline></td></tr>
</tr>