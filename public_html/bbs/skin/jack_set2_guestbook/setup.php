<!-- le 와 불여우 호환 토글용 스크립트 (예뜨락,헐랭이)--> 
<script language="javascript"> 
function Displaytoggle_talble(index) { 
for (i=1; i<=2; i++) 
if (index == i) { 
thisMenu2 = eval(document.getElementById("toggle_btn" + i + "").style); 
thisMenu2.display = "none"; 
document.getElementById("toggle_talble").style.display = "none"; 
} 
else { 
otherMenu2 = eval(document.getElementById("toggle_btn" + i + "").style); 
otherMenu2.display = ""; 
document.getElementById("toggle_talble").style.display = ""; 
} 
} 
</script>
<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
<td height=17 align=right class=sub>
<?=$a_member_join?>가입</a>
<?=$a_login?>&nbsp;로그인</a>
<?=$a_member_modify?>&nbsp;정보</a>
<?=$a_logout?>&nbsp;로그아웃</a>
<?=$a_setup?>&nbsp;관리자</a>
</td>
</tr>
</table>

<!-- 토글 시작 -->
<div id="toggle_btn1" style="display:;"><a href="javascript:Displaytoggle_talble(1)" class="button" onfocus='this.blur()'><p align=center><font class=num>GUESTBOOK WIRTE OPEN</font></a></div> 
<div id="toggle_talble" style="display:none;width:100%;"> 
<span id="toggle_btn2" style="display:none;"><a href="javascript:Displaytoggle_talble(2)" class="button" onfocus='this.blur()'><p align=center><font class=num>GUESTBOOK WRITE CLOSE</font></a></span>

<?
  include "include/write.php";
?>

</div>
