<?
// 간단한 답글의 데이타를 가지고옴;;
	$no = $data[no];
	$_dbTimeStart = getmicrotime();
	$view_comment_result=mysql_query("select * from $t_comment"."_$id where parent='$no' order by no asc");
	$_dbTime += getmicrotime()-$_dbTimeStart;
?>
<?
$nod=array();
$nod=explode("||",$data[memo]);

$node=$nod[0];
$node1=$nod[1];

$view_src="view.php?id=$id&no=".$data[no]."&category=".$category."&page=".$page."&divpage=".$divpage;

if($upload_image1) { $size = GetImageSize($data[file_name1]); }
?>

<table border=0 cellspacing=0 cellpadding=0 width="<?=$width?>" class="table_all">
<tr><td>

<table border=0 cellspacing=0 cellpadding=5 width="100%" class="table_number">
<tr><td><b>NO.<?=$data[no]?></b><span class="8"><?=$a_delete?>&nbsp;DELETE</a>&nbsp;<a href="<?=$view_src?>">REPLY</a></span>
</td></tr></table>

<table border=0 cellspacing=0 cellpadding=5 width="100%" class="table_content">
<tr><td align=center valign=top width=1 class="table_pic">

<? if($data[is_secret]&&!$is_admin&&$data[ismember]!=$member[no]) { ?>
<span class="secret">SECRET</span>
<? } else if($node=="true") { ?>
<a onclick="this.nextSibling.style.display= (this.nextSibling.style.display=='none')?'block':'none';" href="javascript:void(0)"><span class="more">▼ MORE</span></a><span style="width:100%; display:none; float:left;">
<? if($data[file_name1]) { ?>

<? if($size[0]>$i_width) { ?>
<img src="<?=$data[file_name1]?>" width=<?=$i_width?> onclick="window.open(this.src)" style="cursor:pointer;cursor:hand;">
<table border=0 cellspacing=0 cellpadding=0 width="200"><tr><td valign=top>원본사이즈: <?=$size[0]?>*<?=$size[1]?></td></tr></table>
<? } else if($size[1]>$i_height) { ?>
<img src="<?=$data[file_name1]?>" height=<?=$i_height?> onclick="window.open(this.src)" style="cursor:pointer;cursor:hand;">
<table border=0 cellspacing=0 cellpadding=0 width="200"><tr><td valign=top>원본사이즈: <?=$size[0]?>*<?=$size[1]?></td></tr></table>
<? } else { ?>
<?=$upload_image1?>
<? } ?>

<? } else { ?><span style="width:200; font-weight:bold;"><br>NO POSTER</span><? } ?></span>

<? } else { ?>

<? if($data[file_name1]) { ?>

<? if($size[0]>$i_width) { ?>
<img src="<?=$data[file_name1]?>" width=<?=$i_width?> onclick="window.open(this.src)" style="cursor:pointer;cursor:hand;">
<table border=0 cellspacing=0 cellpadding=0 width="200"><tr><td valign=top>원본사이즈: <?=$size[0]?>*<?=$size[1]?></td></tr></table>
<? } else if($size[1]>$i_height) { ?>
<img src="<?=$data[file_name1]?>" height=<?=$i_height?> onclick="window.open(this.src)" style="cursor:pointer;cursor:hand;">
<table border=0 cellspacing=0 cellpadding=0 width="200"><tr><td valign=top>원본사이즈: <?=$size[0]?>*<?=$size[1]?></td></tr></table>
<? } else { ?>
<?=$upload_image1?>
<? } ?>

<? } else { ?><span style="width:200; font-weight:bold;"><br>NO POSTER</span><? } ?>

<? } ?> 

</td>
<? if($size[0]>$limit_width) { ?><tr><? } ?>
<td valign="top" style="word-break:break-all;" class="table_comment">

<table border=0 cellspacing=0 cellpadding=0 width=250 height="1">
<tr><td></td></tr></table>

<?
 // 회원로그인이 되어 있으면 코멘트 비밀번호를 안 나타나게;;
  if($member[no]) { $c_name=$member[name]; $hide_c_password_start="<!--"; $hide_c_password_end="-->"; }
  else $c_name="<input type=text name=name size=8 maxlength=10 class=input value=\"$zetyx[name]\">";
?>

<table border=0 cellspacing=0 cellpadding=5 width="100%">
<!-- list_head.php에서 시작되는 form테크 마침 (코멘트 from태그와 중복 방지) -->
</form><tr><td>
<?
// 코멘트 출력;;
if($setup[use_comment]) { while($c_data=mysql_fetch_array($view_comment_result)) {

$comment_name=stripslashes($c_data[name]);
$temp_name = get_private_icon($c_data[ismember], "2");
if($temp_name) $comment_name="<img src='$temp_name' border=0 align=absmiddle>";
	$c_memo=trim(stripslashes($c_data[memo]));
	//$c_memo=trim($c_data[memo]);
	$c_reg_date="<span title='".date("Y년 m월 d일 h시 i분 s초",$c_data[reg_date])."'>".date("Y/m/d",$c_data[reg_date])."</span>";
			
if($c_data[ismember]) { if($c_data[ismember]==$member[no]||$is_admin||$member[level]<=$setup[grant_delete]) $a_del="<a onfocus=blur() href='del_comment.php?$href$sort&no=$no&c_no=$c_data[no]'>";
			else $a_del="&nbsp;<Zeroboard "; } 
else $a_del="<a onfocus=blur() href='del_comment.php?$href$sort&no=$no&c_no=$c_data[no]'>";

// 이름앞에 붙는 아이콘 정의;;
$c_face_image=get_face($c_data);
if($is_admin) $show_ip=" title='$c_data[ip]' "; else $show_ip="";    
if($setup[use_formmail]&&check_zbLayer($c_data)) {
	$comment_name = "<span $show_ip onMousedown=\"ZB_layerAction('zbLayer$_zbCheckNum','visible')\" style=cursor:hand>$comment_name</span>";
	} else { if($c_data[ismember]) $comment_name="<a onfocus=blur() href=\"javascript:void(window.open('view_info.php?id=$id&member_no=$c_data[ismember]','mailform','width=400,height=510,statusbar=no,scrollbars=yes,toolbar=no'))\" $show_ip>$comment_name</a>";
		else $comment_name="<div $show_ip>$comment_name</div>"; }

		$_skinTimeStart = getmicrotime();
		include $dir."/view_comment.php";
		$_skinTime += getmicrotime()-$_skinTimeStart; }
} ?>

</td></tr></table>

</td></tr></table>

</td>
</tr>
</table>

<br>
