<?
// 간단한 답글의 데이타를 가지고옴
        $no = $data[no];
        $_dbTimeStart = getmicrotime();
        $view_comment_result=mysql_query("select * from $t_comment"."_$id where parent='$no' order by no asc");
        $_dbTime += getmicrotime()-$_dbTimeStart;
?>

<tr>
<td align=left height=30 style=padding-top:3;padding-left:10;><font style=font-family:verdana;font-size:7pt;><?=$date=date("ymd",$data[reg_date])?></font> │ <?=$data[subject]?></td>
<td align=right><?=$a_modify?><img src=<?=$dir?>/modify.gif border=0 align=absbottom></a> <?=$a_delete?><img src=<?=$dir?>/delete.gif border=0 align=absbottom></a></td>
</tr>

<tr><td colspan=2 height=1 background=<?=$dir?>/line.gif></td></tr>
</table>

<table align=center border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
<td style=padding:10;>
<?=$upload_image1?>
<?=$upload_image2?>
<?=$memo?>
</td>
</tr>
<tr>
 <td height=1 background=<?=$dir?>/line.gif></td>
</tr>
</form>
</table>

<?
 // 로그인이 되어 있으면 코멘트 비밀번호를 안 나타나게..
  if($member[no]) {$c_name=$member[name]; $hide_c_password_start="<!--"; $hide_c_password_end="-->"; }
  else $c_name="<input type=text name=name size=8 maxlength=10 class=input value=\"$zetyx[name]\">";

// 코멘트 출력부분
        if($setup[use_comment]) {
                while($c_data=mysql_fetch_array($view_comment_result)) {
                        $comment_name=stripslashes($c_data[name]);
                        $temp_name = get_private_icon($c_data[ismember], "2");
                        if($temp_name) $comment_name="<img src='$temp_name' border=0 align=absmiddle>";
                        $c_memo=trim(stripslashes($c_data[memo]));
                        //$c_memo=trim($c_data[memo])
                        $c_reg_date="<span title='".date("Y년 m월 d일 H시 i분 s초",$c_data[reg_date])."'>".date("Y/m/d",$c_data[reg_date])."</span>";
                        if($c_data[ismember]) {
                                if($c_data[ismember]==$member[no]||$is_admin||$member[level]<=$setup[grant_delete]) $a_del="<a onfocus=blur() href='del_comment.php?$href$sort&no=$no&c_no=$c_data[no]'>";
                                else $a_del="&nbsp;<Zeroboard ";
                        } else $a_del="<a onfocus=blur() href='del_comment.php?$href$sort&no=$no&c_no=$c_data[no]'>";

                        // 이름앞에 붙는 아이콘 정의
                        $c_face_image=get_face($c_data);

                        if($is_admin) $show_ip=" title='$c_data[ip]' "; else $show_ip="";

                        if($setup[use_formmail]&&check_zbLayer($c_data)) {
                                $comment_name = "<span $show_ip onMousedown=\"ZB_layerAction('zbLayer$_zbCheckNum','visible')\" style=cursor:hand>$comment_name</span>";
                        } else {
                                if($c_data[ismember]) $comment_name="<a onfocus=blur() href=\"javascript:void(window.open('view_info.php?id=$id&member_no=$c_data[ismember]','mailform','width=400,height=510,statusbar=no,scrollbars=yes,toolbar=no'))\" $show_ip>$comment_name</a>";
                                else $comment_name="<div $show_ip>$comment_name</div>";
                        }

                        $_skinTimeStart = getmicrotime();
                        include $dir."/list_comment.php";
                        $_skinTime += getmicrotime()-$_skinTimeStart;
                }
                if($member[level]<=$setup[grant_comment]) {
                        $_skinTimeStart = getmicrotime();
                        include "$dir/list_write_comment.php";
                        $_skinTime += getmicrotime()-$_skinTimeStart;
                }
        }
?>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr><td height=1>
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
</td></tr>